$(document).ready(function () {
    var iclock = 0;

    /* ============== FLIP CLOCK ============== */
    view_seconds(false);
    var clock = new FlipClock($('.clock'), fp_sett_js.second_site, {
        clockFace: 'HourlyCounter',
        language: 'ru',
        callbacks: {
            interval: function () {
                if (iclock++ > 0)
                    view_seconds();
            }
        }
    });

    $('li.lang').hover(function () {
        var lang = $('#lang-dropdown');
        if (lang.hasClass('active') === false) {
            lang.addClass('active');
        }
    });

    $('#lang-dropdown').mouseleave(function () {
        $(this).removeClass('active');
    });

    // блок: хочу заработать
    $('.earn_money_want').click(function () {
        load_earn_money_want();

        if ($(this).hasClass('collapsed') == false)
            return false;
    });

    $('#amountdeposit').keypress(function (e) {
        if (e.which == 13) {
            $('.earn_money_want').click();
        }
    });


    desc_and_suma_insert();

    $(document).delegate('#plan_id', 'change', function () {
        desc_and_suma_insert();
    });

    $('#suma_deposit').on('change keyup', function(){
        let suma_deposit = parseFloat($(this).val());
        $('.final-deposit-amount').text(Math.floor(suma_deposit*100)/100+ ' $');
        calculateROI();
    });
    $('#suma_deposit').trigger('change');

    $('#btn_add_new_deposit').click(function () {
        // $('.rule_deposit').removeClass('bg-danger');
        // $('.balance_ndp').removeClass('bg-danger');

        var plan_id = parseInt($('#plan_id').val());
        var min_dep, max_dep;
        var balance = fp_sett_js.balance;
        var balance_bonus = fp_sett_js.balance_bonus;
        var deposited = parseFloat($('#suma_deposit').val());
        var plan = null;
        $.each(fp_sett_js.list_plans, function (k, v) {
            if (v.id == plan_id) {
                plan = v;
                min_dep = parseFloat(v.deposit_min);
                max_dep = parseFloat(v.deposit_max);
            }
        });

        if (deposited < min_dep || deposited > max_dep) {
            $('#suma_deposit').val(parseInt(max_dep));
        } else {
            var balance_compare = plan.only_for_bonus === 1 ? balance_bonus : balance;
            // var balance_compare_div = plan.only_for_bonus === 1 ? $('.deposits-balance > .is-bonus') : $('.deposits-balance > :not(.is-bonus)');
            if (deposited > balance_compare) {
                $.alert({
                    icon: '',
                    title: '<img src="/assets/theme/images/animated/error.svg?' + Math.floor(Math.random()*1000000) + '" alt="">',
                    type: 'red',
                    content: global_params.lang_error_balance
                });
                // balance_compare_div.find('.balance_ndp').addClass('bg-danger');
            } else {
                viewAlertConfirmCreateDeposit();
            }
        }
    });

    $('.btn_replan_deposit').click(function () {
        var balance = fp_sett_js.balance;
        var p = $(this).parents('.bloc-reinvest');
        var deposited = parseFloat(p.find('.replan_deposit').val());

        if (deposited > balance) {
            $.alert({
                icon: 'flaticon-status',
                title: '',
                type: 'orange',
                content: global_params.lang_error_balance
            });
            // balance_compare_div.find('.balance_ndp').addClass('bg-danger');
        } else {
            viewAlertConfirmCreateDepositReplan(p);
        }
    });

    $('.input-only-pos').on('keyup change', function(){
        // change and replace live, allow using only digital and dot, jquery
        var v = $(this).val();
        v = v.replace(/[^0-9\.]/g, '');
        v = v.replace(/(\..*)\./g, '$1');
        $(this).val(v);
    });

    // $('#suma_deposit').on('keyup', function () {
    //     bloc_confirm_deposit_hide();
    // });

    // $('#confirm_dep_new').click(function () {
    //     var btn = $(this);
    //
    //     if ($(this).hasClass('ajax_send') == false) {
    //         if ($('.rule_deposit').children('input').is(':checked') == false) {
    //             $('.rule_deposit').addClass('bg-danger');
    //         } else {
    //             $('.rule_deposit').removeClass('bg-danger');
    //             $('#ajax_confirm_dep').css({display: 'inline-block'});
    //
    //             btn.addClass('ajax_send');
    //             var bloc_confirm_depnew = $('#bloc_confirm_deposit_new');
    //
    //             $.post('/ajax', {
    //                 go: 'add_deposit',
    //                 plan_id: bloc_confirm_depnew.find('.dep_plan_id').val(),
    //                 suma: bloc_confirm_depnew.find('.dep_suma').val(),
    //                 promocode: bloc_confirm_depnew.find('.dep_promocode').val()
    //             }).done(function (response) {
    //                 $('#ajax_confirm_dep').hide();
    //                 btn.removeClass('ajax_send');
    //
    //                 if (response.status == true) {
    //
    //                     window.location.href = '/deposits/';
    //
    //                 } else {
    //                     if (response.error === undefined)
    //                         alert('Unknown error :(. Please contact to Technical Support');
    //                     else
    //                         alert(response.error);
    //                 }
    //             });
    //         }
    //     }
    // });

    $('#cancel_confirm_new_dep').click(function () {
        $('#bloc_confirm_deposit_new').hide(600);
    });

    $('.load_old_deposit').click(function () {
        var page = parseInt($(this).parent().children('input[name=page]').val());
        var total_page = $(this).parent().children('input[name=page_max]').val();

        if (page + 1 <= total_page) {
            $(this).parent().children('input[name=page]').val(page + 1);
            load_old_deposits(page + 1);

            if (page + 1 == total_page)
                $(this).hide();
        }
    });

    $('.load_history_payout').click(function () {
        var page = parseInt($(this).parent().children('.page_actual').val()) + 1;
        var total_page = parseInt($(this).parent().children('.total_page').val());

        var tbody = $('.tbody_list_payout');

        var list_method = {
            'pm': 'PerfectMoney',
            'epaycore': 'ePayCore',
            'payeer': 'Payeer',
            'advcash': 'Advcash',
            'bitcoin': 'Bitcoin',
            'qiwi': 'Qiwi',
            'crypt': fp_sett_js.lang.crypt_title,
            'coinpayments': fp_sett_js.lang.crypt_title,
            'blockio': fp_sett_js.lang.crypt_title
        };

        $.post('/ajax', {
            go: 'view_list_payout',
            page: page
        }).done(function (response) {
            $.each(response.list, function (k, r) {

                switch (r.status) {
                    case 'ok':
                        r.status = '<label class="data-status succes"><i class="flaticon-check"></i> ' + fp_sett_js.lang['s_executed'] + '</label>';
                        break;

                    case 'wait':
                    case 'processed':
                        r.status = '<label class="data-status process"><i class="flaticon-status-wait"></i>  ' + fp_sett_js.lang['s_wait_payout'] + '</label>';
                        break;

                    case 'cancel':
                        r.status = '<label class="data-status canceled" data-toggle="tooltip" data-placement="left" title="' + fp_sett_js.lang['refused_admin3,'] + '"><i class="flaticon-status-denied"></i> ' + fp_sett_js.lang['1canceled'] + '</label>';
                        break;

                    case 'cancel_client':
                        r.status = '<label class="data-status canceled" data-toggle="tooltip" data-placement="left" title="' + fp_sett_js.lang['cancel_user_p'] + '"><i class="flaticon-status-denied"></i> ' + fp_sett_js.lang['1canceled'] + '</label>';
                        break;
                }

                if (r.formatted_date_closed == null)
                    r.formatted_date_closed = '';

                let method = list_method[r.method];
                if($.inArray(r.method, ['crypt', 'paykassa', 'blockio', 'coinpayments']) >= 0){
                    method = r.sub_method;
                }

                tbody.append('<tr>' +
                    '<td><span>' + r.formatted_date_created + '</span></td>' +
                    '<td class="td-price"><b>' + r.formatted_suma + '</b> <span class="mcur">$</span><br/><span style="font-size:12px;">' +
                    method + ': ' +
            '<b class=\'truncate\'>' + r.wallet + '</b></span>' +
                    '</td>' +
                    '<td class="td-price">' +
                    r.status + '<br/>' +
                    '<span data-toggle="tooltip" data-placement="left" title="' + fp_sett_js.lang['date_executed'] + '">' +
                    (r.formatted_date_closed !== '' ? r.formatted_date_closed : '') +
                    '</span>' +
                    '</td>' +
                    '</tr>');
            });

            //
            tbody.find('[data-toggle="tooltip"]').tooltip();
        });

        if (page >= total_page) {
            $(this).parent().remove();
        } else {
            $(this).parent().children('.page_actual').val(page);
        }
    });

    load_history_work();
    $('#filter_history').change(function () {
        load_history_work();
    });


    $('#filter_history_specific').change(function () {
        load_history_work_specific();
    });

    // confirm authorization email
    $('#sec_conf_auth_email').change(function () {
        $('.alert_mess').html('');
        $('input[name=pass]').val('');
        $('#modal_sec_conf_auth_email').modal({
            keyboard: false,
            backdrop: 'static',
            show: true
        });
    });
    // $('#sec_conf_auth_email').change(function () {
    //     let title = $(this).data('title');
    //
    //     $.confirm({
    //         title: title,
    //         content: '<form method="post" action="">' +
    //             '<div class="form-group">' +
    //             '<span>Введите ваш актуальный пароль</span><br>' +
    //             '<input class="inp inp-0" type="password" name="pass" hidefocus="true" style="outline: none;">' +
    //             '</div>' +
    //             '</form>',
    //         buttons: {
    //             formSubmit: {
    //                 text: 'Подтвердить',
    //                 btnClass: 'btn-blue',
    //                 action: function () {
    //                     var name = this.$content.find('.name').val();
    //                     if(!name){
    //                         $.alert('provide a valid name');
    //                         return false;
    //                     }
    //                     $.alert('Your name is ' + name);
    //                 }
    //             },
    //             cancel: {
    //                 text: 'Отменить',
    //                 action: function () {
    //                     //close
    //                     $('#sec_conf_auth_email').bootstrapToggle('off');
    //                 }
    //             },
    //         },
    //         onContentReady: function () {
    //             // bind to events
    //             var jc = this;
    //             this.$content.find('form').on('submit', function (e) {
    //                 // if the user submits the form by pressing enter in the field.
    //                 e.preventDefault();
    //                 jc.$$formSubmit.trigger('click'); // reference the button and click it
    //             });
    //         }
    //     });
    //
    //     return false;
    // });

    $('#save_sec_conf_auth_email').click(function () {
        $.post('/ajax', {
            go: 'save_security',
            type: 'security_conf_auth_email',
            value: $('#sec_conf_auth_email').is(':checked'),
            password: $('#modal_sec_conf_auth_email').find('input[name=pass]').val()
        }).done(function (response) {
            if (response.status == true) {
                $('#modal_sec_conf_auth_email').modal('hide');
                window.location.reload();
            } else {
                $('input[name=pass]').val('');
                $('#modal_sec_conf_auth_email').find('.alert_mess').html('<div class="alert alert-danger">' + response.error + '</div>');
            }
        });
    });

    $('#modal_sec_conf_auth_email').find('.btn_close').click(function () {
        $('#sec_conf_auth_email').parent().find('.toggle-handle').click();
    });

    // Confirm payout email
    $('#sec_conf_payout_email').change(function () {
        $('.alert_mess').html('');
        $('input[name=pass]').val('');
        $('#modal_sec_conf_payout_email').modal({
            keyboard: false,
            backdrop: 'static',
            show: true
        });
    });

    $('#save_sec_conf_payout_email').click(function () {
        $.post('/ajax', {
            go: 'save_security',
            type: 'security_conf_payout_email',
            value: $('#sec_conf_payout_email').is(':checked'),
            password: $('#modal_sec_conf_payout_email').find('input[name=pass]').val()
        }).done(function (response) {
            if (response.status == true) {
                $('#modal_sec_conf_payout_email').modal('hide');
            } else {

                // Reload page if is not confirm page
                if (response.errorCode == 'need_confirm_auth') {
                    window.location.reload();
                }

                //
                $('input[name=pass]').val('');
                $('#modal_sec_conf_payout_email').find('.alert_mess').html('<div class="alert alert-danger">' + response.error + '</div>');
            }
        });
    });

    $('#modal_sec_conf_payout_email').find('.btn_close').click(function () {
        $('#sec_conf_payout_email').parent().find('.toggle-handle').click();
    });

    var btn_action = $('.load_history_actions');
    var default_null = null;
    btn_action.on('click', function () {
        if ($(this).hasClass('disabled') === false) {
            $(this).addClass('disabled');
            var btn = $(this);
            var pp_actual = btn.prev('.page_actual');
            var page = parseInt(pp_actual.val());
            var filter = $('#filter_actions').val();

            if (default_null === null) {
                default_null = $('#table_history_actions').children('tbody').html();
            } else if (page == 1) {
                $('#table_history_actions').children('tbody').html(default_null);
            }

            $.post('/ajax', {
                go: 'get_actions',
                page: page,
                filter: filter,
                only: 'notifications-archived',
            }).done(function (response) {

                if (page == 1) {
                    $('#table_history_actions').children('tbody').html('');
                }

                if (response.status == true) {
                    for (var k in response.list) {
                        var el = response.list[k];

                        var html = '<tr>';
                        html += '<td data-action="' + el.code + '"><div class="last"><span class="date">' + el.dateH + '</span><span>' + el.action + ' <b>' + ((el.ip == null) ? '' : el.ip) + '</b></span></div></td>';
                        html += '</tr>';

                        $('#table_history_actions').children('tbody').append(html);
                    }

                    //
                    if(response.list.length === 0){
                        var html = '<tr>';
                        html += '<td class="account-no-data" style="background: transparent;"><i class="flaticon-info icon"></i><br>' + fp_sett_js.lang['no_archived_notifications'] + '</td>';
                        html += '</tr>';

                        $('#table_history_actions').children('tbody').append(html);
                    }

                    //
                    if (page < response.total_page) {
                        pp_actual.val(page + 1);
                    } else {
                        pp_actual.parent().hide();
                    }
                }

            }).fail(function () {
                alert('Error loading');
            }).always(function () {
                btn.removeClass('disabled');
            });
        }
    });

    var thactions = $('#table_history_actions');
    if (thactions.length > 0) {
        btn_action.trigger('click');
    }

    /**
     *
     */
    if ($('#table_history_lastactions').length > 0) {
        $.post('/ajax', {
            go: 'get_actions',
            page: 1,
            limit: 5,
        }).done(function (response) {

            $('#table_history_lastactions').children('tbody').html('');

            if (response.status == true) {
                for (var k in response.list) {
                    var el = response.list[k];

                    var html = '<tr>';
                    html += '<td data-action="' + el.code + '"><div class="last"><span class="date">' + el.dateH + '</span><span>' + el.action + ' <b>' + ((el.ip == null) ? '' : el.ip) + '</b></span></div></td>';
                    html += '</tr>';

                    $('#table_history_lastactions').children('tbody').append(html);
                }

                //
                if(response.list.length === 0){
                    var html = '<tr>';
                    html += '<td class="account-no-data" style="background: transparent;"><i class="flaticon-info icon"></i><br>' + fp_sett_js.lang['no_active_notifications'] + '</td>';
                    html += '</tr>';

                    $('#table_history_lastactions').children('tbody').append(html);
                }
            }

        }).fail(function () {
            alert('Error loading last actions');
        });
    }

    /**
     *
     */
    var btn_action = $('.btn_load_notifications');
    var default_null = null;
    btn_action.on('click', function () {
        if ($(this).hasClass('disabled') === false) {
            $(this).addClass('disabled');
            var btn = $(this);
            var pp_actual = btn.prev('.page_actual');
            var page = parseInt(pp_actual.val());
            var filter = $('#filter_actions_notifications').val();

            if (page == 1) {
                if (default_null === null) {
                    default_null = $('#table_notifications_actions').children('tbody').html();
                } else {
                    $('#table_notifications_actions').children('tbody').html(default_null);
                }
            }

            $.post('/ajax', {
                go: 'get_actions',
                page: page,
                only: 'notifications',
                filter: filter
            }).done(function (response) {

                if (page == 1) {
                    $('#table_notifications_actions').children('tbody').html('');
                }

                if (response.status == true) {
                    for (var k in response.list) {
                        var el = response.list[k];

                        var html = '<tr>';
                        html += '<td data-action="' + el.code + '"><input class="notification_checkbox" style="position: absolute;margin-top: 34px;margin-left: 5px;" type="checkbox" value="' + el.id + '" id="' + el.id + '"><label style="position: absolute;margin-top: 34px;margin-left: 5px;" for="' + el.id + '"></label><div class="last"><span class="date">' + el.dateH + '</span><span class="text-notification">' + el.action + ' <b>' + ((el.ip == null) ? '' : el.ip) + '</b></span></div></td>';
                        html += '</tr>';

                        $('#table_notifications_actions').children('tbody').append(html);
                    }

                    //
                    if(response.list.length === 0){
                        var html = '<tr>';
                        html += '<td class="account-no-data" style="background: transparent;"><i class="flaticon-info icon"></i><br>' + fp_sett_js.lang['no_active_notifications'] + '</td>';
                        html += '</tr>';

                        $('#table_notifications_actions').children('tbody').append(html);
                    }

                    //
                    if (page < response.total_page) {
                        pp_actual.val(page + 1);
                    } else {
                        pp_actual.parent().hide();
                    }

                    //
                    $('.total_count_notifications').text(response.total_elements);
                }

            }).fail(function () {
                alert('Error loading');
            }).always(function () {
                btn.removeClass('disabled');
            });
        }
    });

    thactions = $('#table_notifications_actions');
    if (thactions.length > 0) {
        btn_action.trigger('click');
    }

    $('#filter_actions_notifications').on('change', function () {
        var lha = $('.btn_load_notifications');
        lha.prev('.page_actual').val(1);
        lha.parent().show();
        lha.click();
    });

    $('#table_notifications_actions').on('change', '.notification_checkbox', function(){
         let fieldAllNotifications = $('.notification_checkbox');
         let fieldNotificationsChecked = $('.notification_checkbox:checked');
         let value = $(this).val();
         let isChecked = $(this).prop('checked');

         if(value == 'all'){
            fieldAllNotifications.each(function(){
                if(isChecked) {
                    $(this).prop('checked', 'checked');
                } else {
                    $(this).removeAttr('checked');
                }
            });
         }
    });

    $('.notification_clear_selected').on('click', function(){
        let fieldNotificationsChecked = $('.notification_checkbox:checked');
        let ids = [];

        fieldNotificationsChecked.each(function(){
            if($(this).val() !== 'all'){
                ids.push($(this).val());
                $(this).parent().parent().remove();
            }
        });

        /**
         *
         */
        if(ids.length > 0){
            $.post('/ajax', {
                go: 'mark_notifications',
                ids: ids
            })
                .done(function(){
                    $('.btn_load_notifications').prev('.page_actual').val(1)
                    $('.btn_load_notifications').trigger('click');
                    $('.load_history_actions').trigger('click');
                });
        }
    });

    $('#clear_all_notifications').on('click', function(){
        $.post('/ajax', {
            go: 'mark_all_notifications'
        })
            .done(function(){
                $('.btn_load_notifications').prev('.page_actual').val(1)
                $('.btn_load_notifications').trigger('click');
                $('.load_history_actions').trigger('click');
            });

        return false;
    });

    if($('.total_count_notifications').length > 0) {
        $.post('/ajax', {
            go: 'get_actions',
            only: 'notifications'
        }).done(function (response) {

            if (response.status == true) {
                //
                $('.total_count_notifications').text(response.total_elements);
            }
        });
    }

    // Confirm payout sms
    $('#sec_conf_payout_sms').change(function () {
        $('.alert_mess').html('');
        $('input[name=pass]').val('');
        $('#modal_sec_conf_payout_sms').modal({
            keyboard: false,
            backdrop: 'static',
            show: true
        });
    });

    $('#save_sec_conf_payout_sms').click(function () {
        $.post('/ajax', {
            go: 'save_security',
            type: 'security_conf_payout_sms',
            value: $('#sec_conf_payout_sms').is(':checked'),
            password: $('#modal_sec_conf_payout_sms').find('input[name=pass]').val()
        }).done(function (response) {
            if (response.status == true) {
                $('#modal_sec_conf_payout_sms').modal('hide');
            } else {
                $('input[name=pass]').val('');
                $('#modal_sec_conf_payout_sms').find('.alert_mess').html('<div class="alert alert-danger">' + response.error + '</div>');
            }
        });
    });

    $('#modal_sec_conf_payout_sms').find('.btn_close').click(function () {
        $('#sec_conf_payout_sms').parent().find('.toggle-handle').click();
    });

    // Confirm financy password
    $('#sec_conf_financy_pass').change(function () {
        $('.alert_mess').html('');
        $('input[name=pass]').val('');

        if ($('#inserted_financy').val() == 1) {
            $('.form-financy-pass').hide();
        }

        $('#modal_sec_conf_financy_pass').modal({
            keyboard: false,
            backdrop: 'static',
            show: true
        });
    });

    $('#save_sec_conf_financy_pass').click(function () {

        if ($('#inserted_financy').val() == 0) {
            var f1 = $('#modal_sec_conf_financy_pass').find('input[name=financy_pass]').val();
            var f2 = $('#modal_sec_conf_financy_pass').find('input[name=financy_pass2]').val();

            if (f1 != f2 || f1 == '') {
                $('#modal_sec_conf_financy_pass').find('.alert_mess').html('<div class="alert alert-danger">' + fp_sett_js.lang['financy_pass_no_identic'] + '</div>');
                return;
            }
        }

        $.post('/ajax', {
            go: 'save_security',
            type: 'security_conf_financy_pass',
            value: $('#sec_conf_financy_pass').is(':checked'),
            financy_password: $('#modal_sec_conf_financy_pass').find('input[name=financy_pass]').val(),
            password: $('#modal_sec_conf_financy_pass').find('input[name=pass]').val()
        }).done(function (response) {
            if (response.status == true) {
                $('#modal_sec_conf_financy_pass').modal('hide');

                $('#inserted_financy').val('1');
                $('.form-financy-pass').hide();
            } else {
                $('input[name=pass]').val('');
                $('#modal_sec_conf_financy_pass').find('.alert_mess').html('<div class="alert alert-danger">' + response.error + '</div>');
            }
        });
    });

    $('#save_sec_conf_block_ip_config').click(function () {
        $('.alert_mess').html('');

        var p = $(this).parent().parent().children('.modal-body');
        var alert_email = p.find('input[name=sec_ip_email]').is(':checked');
        var alert_sms = p.find('input[name=sec_ip_sms]').is(':checked');
        var config_list_ip = [];
        var actual_pass = p.find('input[name=pass]').val();

        config_list_ip = load_rules_ip();

        if (alert_email == false && alert_sms == false) {
            $('.alert_mess').html('<div class="alert alert-danger" style="font-size: 12px;">' + fp_sett_js.lang['min_security_need'] + '</div>');
        } else {
            $.post('/ajax', {
                go: 'save_security',
                type: 'security_conf_ip_config',
                alert_email: alert_email,
                alert_sms: alert_sms,
                rules_ip: config_list_ip,
                actual_pass: actual_pass
            }).done(function (response) {
                if (response.status == true) {
                    $('#modal_sec_conf_ip_settings').modal('hide');
                    p.find('input[name=pass]').val('');
                } else {
                    p.children('.alert_mess').html('<div class="alert alert-danger" style="font-size: 12px;">' + response.error + '</div>');
                }
            });
        }
    });

    $('#sett_security_ip').click(function () {
        $('#modal_sec_conf_ip_settings').modal('show');

        return false;
    });

    $('#sec_security_ip_status').change(function () {

        $.post('/ajax', {
            go: 'control_ip_allow',
            rules_ip: true
        }).done(function (response) {
            if (response.status == true) {
                $('.alert_mess_ip').html('<div class="alert alert-success" style="font-size: 12px;">' + fp_sett_js.lang['your_actual_ip'] + ': ' +
                    '<b>' + response.ip + '</b> - ' + fp_sett_js.lang['ip_in_limit'] + '</div>');
                $('#save_sec_conf_block_ip').removeAttr('disabled');
            } else {
                $('.alert_mess_ip').html('<div class="alert alert-danger" style="font-size: 12px;">' + fp_sett_js.lang['your_actual_ip'] + ': ' +
                    '<b>' + response.ip + '</b> - ' + fp_sett_js.lang['ip_no_in_limit'] + '</div>');
                $('#save_sec_conf_block_ip').attr('disabled', 'disabled');
            }
        });

        $('#modal_sec_conf_ip').find('.alert_mess').html('');

        $('#modal_sec_conf_ip').modal({
            keyboard: false,
            backdrop: 'static',
            show: true
        });

        return false;
    });

    $('.close_notify_secured').click(function () {
        $.post('/ajax', {
            go: 'closed_notify_secured'
        });
    });

    $('#save_sec_conf_block_ip').click(function () {

        $.post('/ajax', {
            go: 'save_security',
            type: 'security_conf_ip_block',
            value: $('#sec_security_ip_status').is(':checked'),
            password: $('#modal_sec_conf_ip').find('input[name=pass]').val()
        }).done(function (response) {
            if (response.status == true) {
                $('#modal_sec_conf_ip').modal('hide');
            } else {
                $('input[name=pass]').val('');
                $('#modal_sec_conf_ip').find('.alert_mess').html('<div class="alert alert-danger">' + response.error + '</div>');
            }
        });

        return false;
    });

    $('#modal_sec_conf_ip').find('.btn_close').click(function () {
        $('#sec_security_ip_status').parent().find('.toggle-handle').click();
    });

    $('#check_ip_mask').click(function () {
        $('#form_mask_ip').show();
    });

    $('#check_ip_fix').click(function () {
        $('#form_mask_ip').hide();
    });

    $('input[name=add_ip]').click(function () {
        var newip = $('input[name=newipaddress]').val();
        var maska_v = $('select[name=newipmask] option:selected').text().split(' - ');
        var maska = maska_v[1];

        var type = 'maska';
        var id_mask = maska_v[1];
        if ($('#check_ip_mask').children('input').is(':checked') == false) {
            maska = '';
            type = 'ip';
            id_mask = '';
        }

        var html = '<tr>' +
            '<input type="hidden" class="sec_type" value="' + type + '"/>' +
            '<input type="hidden" class="sec_ip" value="' + newip + '"/>' +
            '<input type="hidden" class="sec_maska" value="' + id_mask + '"/>';
        html += '<td class="count">' + ((maska == '') ? 'IP адрес' : 'IP подсеть') + '</td>';
        html += '<td class="count">' + newip + '</td>';
        html += '<td class="count">' + maska + '</td>';
        html += '<td style="text-align: center" class="count">' +
            '<a href="#" class="glyphicon glyphicon-remove del_ip_el" title="' + fp_sett_js.lang['delete'] + '" hidefocus="true" style="outline: none;"></a>' +
            '</td>';

        $('#list_rules_ip').append(html);

        $.post('/ajax', {
            go: 'control_ip_allow',
            rules_ip: load_rules_ip()
        }).done(function (response) {
            if (response.status == true) {
                $('.alert_mess_ip').children().removeClass('alert-danger').addClass('alert-success').html(fp_sett_js.lang['your_actual_ip'] + ': ' +
                    '<b>' + response.ip + '</b> - ' + fp_sett_js.lang['ip_in_limit']);
            } else {
                $('.alert_mess_ip').children().removeClass('alert-success').addClass('alert-danger').html(fp_sett_js.lang['your_actual_ip'] + ': ' +
                    '<b>' + response.ip + '</b> - ' + fp_sett_js.lang['ip_no_in_limit']);
            }
        });
    });

    $(document).delegate('.del_ip_el', 'click', function () {
        $(this).parent().parent().remove();

        $.post('/ajax', {
            go: 'control_ip_allow',
            rules_ip: load_rules_ip()
        }).done(function (response) {
            if (response.status == true) {
                $('.alert_mess_ip').children().removeClass('alert-danger').addClass('alert-success').html(fp_sett_js.lang['your_actual_ip'] + ': ' +
                    '<b>' + response.ip + '</b> - ' + fp_sett_js.lang['ip_in_limit']);
            } else {
                $('.alert_mess_ip').children().removeClass('alert-success').addClass('alert-danger').html(fp_sett_js.lang['your_actual_ip'] + ': ' +
                    '<b>' + response.ip + '</b> - ' + fp_sett_js.lang['ip_no_in_limit']);
            }
        });

        return false;
    });

    $('#modal_sec_conf_financy_pass').find('.btn_close').click(function () {
        $('#sec_conf_financy_pass').parent().find('.toggle-handle').click();
    });

    $('#query_code_conf_email_payout').click(function () {

        $.post('/ajax', {
            go: 'send_conf_payout_code_email'
        }).done(function (response) {
            if (response.status == true) {
                $('#query_code_conf_email_payout').parent().html('<label class="label label-success">' + fp_sett_js.lang['code_sended'] + '</label>');
            }
        });

        return false;
    });

    $('#query_code_conf_sms_payout').click(function () {

        $.post('/ajax', {
            go: 'send_conf_payout_code_sms'
        }).done(function (response) {
            if (response.status == true) {
                $('#query_code_conf_sms_payout').parent().html('<label class="label label-success">' + fp_sett_js.lang['code_sended'] + '</label>');
            } else {
                $('#query_code_conf_sms_payout').parent().html('<label class="label label-danger">' + fp_sett_js.lang['error'] + '</label>');
                alert(response.error);
            }
        });

        return false;
    });

    $('#payout_method_select').change(function () {
        var value = $(this).val();
        var pre_v = 'payeer_';
        $('#additional_forms_payout').html('');

        if (value.length > pre_v.length && value.substr(0, pre_v.length) == pre_v) {
            var param = fp_payments[value.substr(pre_v.length)];

            $.each(param.json_r_fields, function (k, v) {
                var html = '<div class="table-row clearfix">' +
                    '<span>' + v.name + '</span>' +
                    '' +
                    '<div class="field-text">' +
                    '<input type="text" value="" style="width: 186px;" name="' + k + '">' +
                    '</div><div class="table-text">';
                if (v.example != null)
                    html += fp_sett_js.lang['example'] + ': ' + v.example;
                html += '</div>' +
                    '</div>';
                $('#additional_forms_payout').append(html);
            });

            var html = '<div class="table-row clearfix">' +
                '<span>' + fp_sett_js.lang['valute'] + '</span>' +
                '' +
                '<div class="field-select">' +
                '<select class="select-styled blue-select" style="width: 80px;" name="method_currency">';

            $.each(param.json_currencies, function (k, v) {
                html += '<option value="' + v + '">' + v + '</option>';
            });

            html += '</select>' +
                '</div>';
            html += '</div>';
            $('#additional_forms_payout').append(html);
        }
    });

    $('.payed_qiwi').click(function () {
        var t = $(this);

        $.post('/ajax', {
            go: 'need_control_qiwi'
        }).done(function (response) {
            if (response.status == true) {
                t.parent().html('<b class="text-success">' + fp_sett_js.lang['query_sended_success'] + '<br>' + fp_sett_js.lang['5minutes_recharge'] + '</b>');
            }
        });
    });

    $('#filter_actions').on('change', function () {
        var lha = $('.load_history_actions');
        lha.prev('.page_actual').val(1);
        lha.parent().show();
        lha.click();
        // var value = $(this).val();
        // window.location.href = '?a=' + value + '#account';
    });

    $('#filter_exchange_list').on('change', function () {
        var value = $(this).val();
        window.location.href = '/accelerators?a=' + value + '#buy';
    });

    $('#view_ref_tree').on('click', function () {
        $('#modal_structure_tree').modal('show');
    });

    $('#modal_structure_tree').on('show.bs.modal', function () {
        var height = $(window).height() - 150;
        var modalBody = $(this).find('.modal-body');

        modalBody.css({'height': height + 'px'});
        $('html').getNiceScroll().hide();
    });

    $('#modal_structure_tree').on('shown.bs.modal', function () {
        var modalBody = $(this).find('.modal-body');

        var scrollWidth = modalBody.prop('scrollWidth');
        var WidthBlock = modalBody.width();

        modalBody.scrollLeft(scrollWidth / 2 - WidthBlock / 2);
    });

    $('#modal_structure_tree').on('hide.bs.modal', function () {
        $('html').getNiceScroll().show();
    });

    $('#view_refs_stat').on('click', function () {
        $('#modal_structure_stat').modal('show');
    });

    $('#modal_structure_stat').on('show.bs.modal', function () {
        var height = $(window).height() - 120;
        var modalBody = $(this).find('.modal-body');

        modalBody.css({'height': height + 'px'});
        $('html').getNiceScroll().hide();
    });

    $('#modal_structure_stat').on('shown.bs.modal', function () {
        Highcharts.chart('ex_ref', stat_ref);
    });

    $('#modal_structure_stat').on('hide.bs.modal', function () {
        $('html').getNiceScroll().show();
    });

    $('#filter_levels').on('change', function () {
        var level = $(this).val();
        var tables = $('#table_refs').children('tbody');

        if (level == 'all') {
            tables.children('tr').show();
        } else {
            var reg = /^level_(\d)/.exec(level);

            tables.children('tr').each(function () {
                var l = $(this).attr('data-level');
                if (l == reg[1]) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        }

        $('#filter_refs').html('');

        updateListRefferalsTableView();
    });

    $('.filter_ref').on('click', function () {
        var username = $(this).parents('tr').attr('data-user');
        var username_ref = jq(username);

        $('#filter_levels').parents('.field-select').hide();
        $('.field-clear').show();

        $('#table_refs').children('tbody').children('tr[data-ref!=' + username_ref + ']').hide();
        $('#table_refs').children('tbody').children('tr[data-ref=' + username_ref + ']').show();

        var filters_html = '';

        var level_this = parseInt($(this).parents('tr').attr('data-level'));
        for (var level = level_this; level >= 1; level--) {

            if (filters_html != '') {
                filters_html = ' &nbsp;<i class="glyphicon glyphicon-chevron-right" style="color: #9E9E9E;"></i>&nbsp; ' + filters_html;
            }

            filters_html = ' <a href="#" class="remove-filter">' + username + '</a> ' + filters_html;

            username = $('#table_refs').find('tr[data-user=' + jq(username) + ']').attr('data-ref');
        }

        $('#filter_refs').html(filters_html);

        //
        updateListRefferalsTableView();
    });

    $('#h3_referals').on('click', '.remove-filter', function (e) {
        e.preventDefault();
        var username = $(this).text();

        $(this).parent().html('');
        $('#table_refs').find('tr[data-user=' + jq(username) + ']').find('.filter_ref').click();

        return false;
    });

    $('.reset_filter').on('click', function () {
        $('#filter_levels').trigger('change');
        $('#filter_levels').parents('.field-select').show();
        $('.field-clear').hide();

        return false;
    });

    $('.btn_balance_game').on('click', function(){
        $.alert({
            title: fp_sett_js.lang.game_title,
            alignMiddle: false,
            content: '<div class="block-game-exchanger" style="text-align:left; color:#3d4b69">' +
                '<div class="forms-full"><div class="line"><label>' + fp_sett_js.lang.game_operation + ' <p>' + fp_sett_js.lang.game_balance + ': <b><span id="popup_balance_game">..</span> ' + fp_sett_js.lang.game_credits + '</b></p> </label> <div><select class="select" id="game_operation"><option value="credit" selected>' + fp_sett_js.lang.game_credit + '</option> <option value="debit">' + fp_sett_js.lang.game_debit + '</option></select></div></div></div><div class="cls"></div>' +
                '<div class="forms-left"><div class="line"><label>' + fp_sett_js.lang.game_credits2 + ' <p>' + fp_sett_js.lang.game_min + ': <b><span id="game_min_credit">1</span> ' + fp_sett_js.lang.game_credits + '</b></p></label> <div><input type="text" class="inp inp-0" id="game_credit" /></div></div></div>' +
                '<div class="forms-right"><div class="line"><label>' + fp_sett_js.lang.game_summ + ' ($) <p>' + fp_sett_js.lang.game_course + ': <b>1$ = 10 ' + fp_sett_js.lang.game_credits + '</b></p></label> <div><input type="text" class="inp inp-0" id="game_amount_sell" /></div></div></div><div class="cls"></div>' +
                // '<p style="font-size: 12px">' + fp_sett_js.lang.game_payout_memo + '</p>' +
                '</div>',
            onOpenBefore: function(data, status, xhr){
                let balanceGame = $('.balance_games').data('balance');
                $('#popup_balance_game').text(balanceGame);

                $(".block-game-exchanger .select").chosen({
                    inherit_select_classes: true,
                    disable_search: true
                });

                $('.block-game-exchanger').delegate('#game_credit', 'keyup', function(){
                    let value = parseFloat($(this).val());
                    let result = '';

                    if(isNaN(value) === false){
                        result = Math.floor(value / 10 * 100) / 100;
                    }

                    $('#game_amount_sell').val(result);
                });

                $('.block-game-exchanger').delegate('#game_amount_sell', 'keyup', function(){
                    let value = parseFloat($(this).val());
                    let result = '';

                    if(isNaN(value) === false){
                        result = Math.floor(value * 10);
                    }

                    $('#game_credit').val(result);
                });

                $('#game_operation').on('change', function(){
                    let value = 1;

                    if($(this).val() === 'debit'){
                        value = 10;
                    }

                    $('#game_min_credit').text(value);
                });
            },
            buttons: {
                ok: {
                    text: fp_sett_js.lang.game_btn_action, // text for button
                    btnClass: 'btn-blue', // class for the button
                    isHidden: false, // initially not hidden
                    isDisabled: false, // initially not disabled
                    action: function(){
                        let credit = $('#game_credit').val();

                        if(credit === '' || isNaN(credit)) {
                            return false;
                        }

                        //
                        $.post('/ajax', {
                            go: 'balance_games_operation',
                            operation: $('#game_operation').val(),
                            amount: credit
                        }).done(function(data){
                            if(data.operation_success || data.error === null){
                                window.location.reload();
                            } else if(data.error !== null) {
                                $.alert({
                                    icon: 'flaticon-info',
                                    title: '',
                                    type: 'red',
                                    content: data.error
                                });
                            }

                        }).fail(function(){
                            window.location.reload();
                        });

                        return false;
                    }
                },
                cancel: {
                    text: fp_sett_js.lang.game_btn_cancel, // text for button
                    action: function(){
                        // longhand method to define a button
                        // provides more features
                    }
                }
            }
        });
    });

    /*checkBalanceGames();
    setInterval('checkBalanceGames()', 60000);
    $('.btn_game_run').on('click', function(){
        setTimeout('checkBalanceGames()', 4000);
    });*/

    /**
     * Apply Accelerator for active deposit
     */
    $('.dp_apply_accelerator').on('click', function(){
        let deposit = $(this).data('deposit-id');
        let plan_id = $(this).data('plan-id');
        var urlWWW_rules = fp_sett_js.url_www + fp_sett_js.lang_site + '/terms';

        $.alert({
            title: global_params.lang_title_confirm_apply_accelerator,
            type: 'dark',
            columnClass: 'medium',
            content:
                '<div style="line-height:16px;min-height:40px; height:100%">' +
                '<div class="deposit_img"><img src="/assets/theme/images/netmi/staking-confirm.svg" style="height: 120px; margin-bottom:20px; margin-top: 5px;"></div>' +
                '</div>' +
                '<div><input type="text" style="width: 60%; margin-right:5px" class="inp inp-0" id="promocode_value"/> <a href="#" id="btn_check_promocode">' + global_params.lang_btn_check_promocode + '</a></div>' +
                '<div id="promocode_verify" class="hide"></div>' +
                '<p>&nbsp;</p>' +
                '<input class="checkbox" style="display:none" type="checkbox" value="1" id="depconfirm">' +
                '<label for="depconfirm" class="labelform" style="display: none">' +
                '<span>' + global_params.lang_allow_rules + '</span> <a href="'+ urlWWW_rules +'" target="_blank">'+global_params.lang_rules+'</a>' +
                '</label>' +
                '' +
                '<span style="display:block; font-size: 10px; margin-bottom:10px; line-height: 20px ">' + global_params.lang_confirm_btn_rules + ' <a href="'+ urlWWW_rules +'" style="color:#aa72ce !important; display: inline-block;" target="_blank">'+global_params.lang_rules+'</a></span>' +
                '</div>',
            buttons: {
                confirm: {
                    text: global_params.lang_btn_confirm,
                    btnClass: 'btn-blue',
                    action: function(){
                        // let checkedRule = $('#depconfirm').prop('checked');
                        let checkedRule = true;

                        if(checkedRule){

                            $.post('/ajax', {
                                go: 'apply_promocode_deposit',
                                deposit: deposit,
                                promocode: $('#promocode_value').val()
                            }).done(function (response) {
                                if (response.status == true) {

                                    window.location.href = '/deposits/?active';

                                } else {
                                    if (response.error === undefined)
                                        $.alert('Unknown error :(. Please contact to Technical Support');
                                    else
                                        $.alert({
                                            icon: '',
                                            title: '<img src="/assets/theme/images/animated/error.svg?' + Math.floor(Math.random()*1000000) + '" alt="">',
                                            type: 'red',
                                            content: response.error
                                        });
                                }
                            });

                        } else {
                            $.alert({
                                icon: 'flaticon-status-denied',
                                title: '',
                                type: 'orange',
                                content: global_params.lang_need_confirm_rules
                            });
                            return false;
                        }
                    }
                },
                cancel: {
                    text: global_params.lang_btn_cancel
                }
            },
            onContentReady: function () {
                // when content is fetched & rendered in DOM
                var self = this;

                this.buttons.confirm.disable();
                var thisButtonConfirm = this.buttons.confirm;

                /**
                 *
                 */
                $('#promocode_value').on('keyup', function(){
                    $('#promocode_verify').addClass('hide');
                    thisButtonConfirm.disable();
                });

                /**
                 *
                 */
                $('#promocode_verify').addClass('hide');
                $('#btn_check_promocode').on('click', function(){
                    let promocode = $('#promocode_value').val().trim();

                    if(promocode === ''){
                        $('#promocode_value').focus();
                    } else {
                        verifyPromocodeNewDeposit(promocode, plan_id, function(valid){
                            if(valid){
                                thisButtonConfirm.enable();
                            } else {
                                thisButtonConfirm.disable();
                            }
                        });
                    }

                    return false;
                });
            },
        });
    });

    /**
     * Page Accelerators-SWAP
     */
    var refresh_frontend_token_balances = function(){
        getBalances(function(data){
            $('#ntm_tokens_value').text(
                numberFormat(data.balance_tokens, 4)
            );
            $('#ntm_token_earn').text(
                numberFormat(data.balance_tokens_earned, 4)+ '$'
            );
            $('.tokens_link_available_usd')
                .data('value', data.balance_usd)
                .text(
                    numberFormat(data.balance_usd, 2)
                );
            $('.tokens_link_available_tokens')
                .data('value', data.balance_tokens)
                .text(
                    numberFormat(data.balance_tokens, 4)
                );
        });

        // Loading history for tokens (Reset)
        getHistoryTokenBuySell(1, appendHistoryTable);
    };
    var clear_frontend_inputs = function(){
        $('.token_buy_amount_token').val('');
        $('.token_buy_amount_usd').val('');
        $('.token_sell_amount_token').val('');
        $('.token_sell_amount_usd').val('');
    };
    /** BUY **/
    $('.tokens_link_available_usd').click(function(){
        let value = $(this).data('value');
        let price = parseFloat($('.token_price_buy').val());

        let total_amount_token = Math.floor((value / price * 1000))/1000;
        let total_value_usd = Math.ceil(total_amount_token*price*100)/100;

        $('.token_buy_amount_token').val(total_amount_token);
        $('.token_buy_amount_usd').val(total_value_usd);
    });
    $('.token_buy_amount_token').on('keyup', function(){
        let value = parseFloat($(this).val());
        let price = parseFloat($('.token_price_buy').val());
        let total_value_usd = Math.ceil(value*price*100)/100;
        if(isNaN(total_value_usd)) {
            total_value_usd = '';
        }
        $('.token_buy_amount_usd').val(total_value_usd);
    });
    $('.token_buy_amount_usd').on('keyup', function(){
        let value = parseFloat($(this).val());
        let price = parseFloat($('.token_price_buy').val());
        let total_amount_token = Math.floor((value / price * 1000))/1000;
        if(isNaN(total_amount_token)) {
            total_amount_token = '';
        }
        $('.token_buy_amount_token').val(total_amount_token);
    });
    $('.token_btn_buy').click(function(){
        let value = parseFloat($('.token_buy_amount_token').val());
        if(isNaN(value)) {
            $('.token_buy_amount_token').val('').focus();
        } else {
            let contentConfirm = fp_sett_js.lang['token_buy_confirm'];
            contentConfirm = contentConfirm.replace('%tokens%', numberFormat(value, 4));
            let amount = parseFloat($('.token_buy_amount_usd').val());
            contentConfirm = contentConfirm.replace('%amount%', numberFormat(amount, 2));

            if(confirm(contentConfirm)){
                clear_frontend_inputs();

                //
                $.post('/ajax', {
                    go: 'token_buy',
                    value: value
                }).done(function (response) {
                    if(response.status == true) {
                        // Alerting success sell
                        let content = fp_sett_js.lang['token_buy_success'];
                        content = content.replace('%tokens%', numberFormat(response.tokens, 4));
                        content = content.replace('%amount%', numberFormat(response.amount, 2));

                        $.alert({
                            icon: '',
                            title: '<img src="/assets/theme/images/animated/success.svg" alt="">',
                            content: content,
                            type: 'green'
                        });

                        //
                        refresh_frontend_token_balances();
                    } else {
                        switch(response.error)
                        {
                            case 'insufficient_amount':
                                $.alert({
                                    icon: '',
                                    title: '<img src="/assets/theme/images/animated/error.svg" alt="">',
                                    content: fp_sett_js.lang['error_insufficient_amount'],
                                    type: 'red'
                                });
                                break;

                            default:
                                $.alert({
                                    icon: '',
                                    title: '<img src="/assets/theme/images/animated/error.svg" alt="">',
                                    content: fp_sett_js.lang['error_unknown'],
                                    type: 'red'
                                });
                                break;
                        }
                    }
                });
            }
        }
    });

    /** SELL **/
    $('.tokens_link_available_tokens').click(function(){
        let value = $(this).data('value');
        let price = parseFloat($('.token_price_sell').val());

        $('.token_sell_amount_token').val(value);

        let total_value_usd = Math.floor(value*price*100)/100;

        $('.token_sell_amount_usd').val(total_value_usd);
    });
    $('.token_sell_amount_token').on('keyup', function(){
        let value = parseFloat($(this).val());
        let price = parseFloat($('.token_price_sell').val());
        let total_value_usd = Math.ceil(value*price*100)/100;
        if(isNaN(total_value_usd)) {
            total_value_usd = '';
        }
        $('.token_sell_amount_usd').val(total_value_usd);
    });
    $('.token_sell_amount_usd').on('keyup', function(){
        let value = parseFloat($(this).val());
        let price = parseFloat($('.token_price_sell').val());
        let total_amount_token = Math.floor((value / price * 1000))/1000;
        if(isNaN(total_amount_token)) {
            total_amount_token = '';
        }
        $('.token_sell_amount_token').val(total_amount_token);
    });
    $('.token_btn_sell').click(function(){
        let value = parseFloat($('.token_sell_amount_token').val());
        if(isNaN(value)) {
            $('.token_sell_amount_token').val('').focus();
        } else {
            let contentConfirm = fp_sett_js.lang['token_sell_confirm'];
            contentConfirm = contentConfirm.replace('%tokens%', numberFormat(value, 4));
            let amount = parseFloat($('.token_sell_amount_usd').val());
            contentConfirm = contentConfirm.replace('%amount%', numberFormat(amount, 2));

            if(confirm(contentConfirm)){
                clear_frontend_inputs();

                //
                $.post('/ajax', {
                    go: 'token_sell',
                    value: value
                }).done(function (response) {
                    if(response.status == true) {
                        // Alerting success sell
                        let content = fp_sett_js.lang['token_sell_success'];
                        content = content.replace('%tokens%', numberFormat(response.tokens, 4));
                        content = content.replace('%amount%', numberFormat(response.amount, 2));

                        $.alert({
                            icon: '',
                            title: '<img src="/assets/theme/images/animated/success.svg" alt="">',
                            content: content,
                            type: 'green'
                        });

                        //
                        refresh_frontend_token_balances();
                    } else {
                        switch(response.error)
                        {
                            case 'insufficient_tokens':
                                $.alert({
                                    icon: '',
                                    title: '<img src="/assets/theme/images/animated/error.svg" alt="">',
                                    content: fp_sett_js.lang['error_insufficient_tokens'],
                                    type: 'red'
                                });
                                break;

                            default:
                                $.alert({
                                    icon: '',
                                    title: '<img src="/assets/theme/images/animated/error.svg" alt="">',
                                    content: fp_sett_js.lang['error_unknown'],
                                    type: 'red'
                                });
                                break;
                        }
                    }
                });
            }
        }
    });
});

function load_rules_ip() {
    var config_list_ip = [];

    $('#list_rules_ip').children('tr').each(function () {
        var type = $(this).children('.sec_type').val();
        var ip = $(this).children('.sec_ip').val();
        var maska = $(this).children('.sec_maska').val();

        config_list_ip.push({type: type, ip: ip, maska: maska});
    });

    return config_list_ip;
}

function appendHistoryTable(data){
    if(data.page === 1){
        $('#token_history_buysell').html('');
    }
    if(data.length === 0 && page === 1){
        $('#token_history_buysell').html('<tr><td colspan="5" style="text-align: center">' + global_params.lang_operation_history_empty + '</td></tr>');
    }
    let line = '';
    for(var k in data.list) {
        line = '<tr>';
        line += '<td class="td-price"><div class="first">' + data.list[k].datetime + ' </div></td>';
        line += '<td class="td-price"><div>' + global_params['lang_operation_'+data.list[k].operation] + '<span style="margin-top: 4px; font-size: 14px; font-weight: bold; color: #fff;">' + numberFormat(data.list[k].total, 4) + ' NTM</span></div></td>';
        line += '<td class="td-price"><div>' + numberFormat(data.list[k].exchange, 4) + ' $</div></td>';
        line += '<td class="td-price"><div class="last"><span class="amount-dark">' + numberFormat(data.list[k].amount, 2) + ' $</span></div></td>';
        line += '</tr>';
        $('#token_history_buysell').append(line);
    }

    if(data.pages_total > data.page){
        $('#btn_more_loading').show();
    } else {
        $('#btn_more_loading').hide();
    }
}

function getHistoryTokenBuySell(page, callback)
{
    if(page == undefined){
        page = 1;
    }
    $.post('/ajax', {
        go: 'token_history',
        page: page
    }).done(function (response) {
        if (response.status == true) {
            if(typeof callback === 'function'){
                callback(response);
            }
        }
    });
}

function load_history_work() {
    var value = $('#filter_history').val();

    switch (value) {
        case 'actual':
            $('#filter_history_specific').hide();
            load_history_work_actual();
            break;

        case '3month':
            $('#filter_history_specific').hide();
            load_history_work_3month();
            break;

        case 'specific':
            var c = $('#filter_history_specific option').length;
            if (c == 0)
                $("#load_history_work").html('');
            else {
                $('#filter_history_specific').show();
                load_history_work_specific();
            }
            break;
    }
}

function load_history_work_actual() {
    $("#load_history_work").hide(600);
    $("#load_history_work").load("/history_actions/load_actual", function () {
        $("#load_history_work").show(400);

    });
}

function load_history_work_3month() {
    $("#load_history_work").hide(600);
    $("#load_history_work").load("/history_actions/load_3month", function () {
        $("#load_history_work").show(400);

    });
}

function updateListRefferalsTableView()
{
    let blocNoReferrals = $('#view_no_referrals');
    let tableListReferrals = $('#table_refs');
// console.log(tableListReferrals.children('tbody').find('tr:[display=block]').length );

    let totalVisible = 0;
    tableListReferrals.children('tbody').find('tr').each(function(){
        if($.inArray($(this).css('display'), ['table-row', 'block']) >= 0){
            totalVisible++;
        }
    });

    if(totalVisible > 0){
        tableListReferrals.show();
        blocNoReferrals.hide();
    } else {
        tableListReferrals.hide();
        blocNoReferrals.show();
    }
}

function load_history_work_specific() {
    var id = $('#filter_history_specific').val();
    $("#load_history_work").hide();
    $("#load_history_work").load("/history_actions/load_detailed/" + id, function () {
        $("#load_history_work").show();

    });
}

function load_old_deposits(p) {
    var tbody = $('.previous-deposits').find('tbody');

    $.post('/ajax', {
        go: 'view_old_deposit_page',
        page: p
    }).done(function (response) {
        $.each(response.list, function (k, r) {
            tbody.append('<tr>' +
                '<td>' + r.formatted_date_created + '</td>' +
                '<td>' + r.plan_type_name + ' <br> <b>' + r.plan_name + '</b></td>' +
                '<td>' + addCommas(parseFloat(r.deposited)) + ' $</td>' +
                '<td>' + addCommas(parseFloat(r.earned)) + ' $</td>' +
                '<td>' + r.formatted_date_closed + '</td>' +
                '</tr>');
        });
    });

    return false;
}

function calculateROI()
{
    var fieldPlanID = $('#plan_id');
    var ind_list_plans = [];
    fp_sett_js.list_plans.forEach(function (v, k) {
        ind_list_plans[v.id] = k;
    });
    var ind_plan = ind_list_plans[fieldPlanID.val()];
    var plan = fp_sett_js.list_plans[ind_plan];


    /**
     *
     */
    let suma_deposit = parseFloat($('#suma_deposit').val());
    let ROI = suma_deposit*(plan.earn_rate*plan.freezing_days)/100;
    $('.final-receive-amount').text(ROI + ' $');
}

function desc_and_suma_insert() {
    var fieldPlanID = $('#plan_id');
    if (fieldPlanID.length == 0) {
        return false;
    }

    $('.rule_deposit').removeClass('bg-danger');
    $('.balance_ndp').removeClass('bg-danger');

    var v = parseInt(fieldPlanID.val());
    var ind_list_plans = [];
    fp_sett_js.list_plans.forEach(function (v, k) {
        ind_list_plans[v.id] = k;
    });
    var ind_plan = ind_list_plans[v];

    var val_init = $('#suma_deposit').attr('data-init');
    var suma_deposit = 0;
    if (val_init == '') {
        suma_deposit = Math.round((parseFloat(fp_sett_js.list_plans[ind_plan].deposit_min) + (parseFloat(fp_sett_js.list_plans[ind_plan].deposit_max) - parseFloat(fp_sett_js.list_plans[ind_plan].deposit_min)) / 2));
    } else {
        suma_deposit = parseInt(val_init);

        if(suma_deposit < fp_sett_js.list_plans[ind_plan].deposit_min){
            suma_deposit = fp_sett_js.list_plans[ind_plan].deposit_min;
        } else if(suma_deposit > fp_sett_js.list_plans[ind_plan].deposit_max) {
            suma_deposit = fp_sett_js.list_plans[ind_plan].deposit_max;
        }
    }
    $('#suma_deposit').val(suma_deposit).trigger('change');

    var fieldTypeDesposit = $('#plan_id');

    // write text description
    var earn_rate = fp_sett_js.list_plans[ind_plan].earn_rate;


    var lang_proc = 'a2';
    // if (fieldTypeDesposit.val() == 'golden') {
    //     lang_proc = 'a2_gold';
    // }

    var name_plan = fieldTypeDesposit.parents('.field-select').find('.cuselText').children('label').text();
    var plan = fp_sett_js.list_plans[ind_plan];
    var text = '<div class="guid-item-img __border"><img style="border:none" src="/assets/theme/images/plans/' + fp_sett_js.list_plans[ind_plan].code + '.svg" alt=""></div>';
    text += '<div class="guid-item-info"><div class="guid--head"><strong>' + fp_sett_js.list_plans[ind_plan].name + '</strong></div>';
    text += '<div class="guid--price"><span>' + fp_sett_js.lang['a3'] + '</span><strong>' + Math.round(parseFloat(fp_sett_js.list_plans[ind_plan].deposit_min)) + '-' + Math.round(parseFloat(fp_sett_js.list_plans[ind_plan].deposit_max)) + '<b>$</b></strong></div>';
    text += '<div class="guid--price margin1"><span>' + fp_sett_js.lang['v3'] + '</span>';
    if (fp_sett_js.list_plans[ind_plan].freezing_days === 0) {
        text += '<strong style="color:#aa72ce;">' + fp_sett_js.lang['plan_nolimit'] + '</strong>';
    } else {
        text += ' <b style="color:#aa72ce;">' + fp_sett_js.list_plans[ind_plan].freezing_days + ' ';
        switch (plan.periodicity) {
            case 'daily':
                text += fp_sett_js.lang['days'];
                break;

            case 'weekly':
                text += fp_sett_js.lang['weekly'];
                break;

            case 'monthly':
                text += fp_sett_js.lang['monthly'];
                break;
        }
        text += '</b></div><p>';
    }


    switch (plan.periodicity) {
        case 'daily':
            text += fp_sett_js.lang['plan_daily'];
            break;

        case 'weekly':
            text += fp_sett_js.lang['plan_weekly'];
            break;

        case 'monthly':
            text += fp_sett_js.lang['plan_monthly'];
            break;
    }
    text += ': <b>' + earn_rate + '%</b>';
    if(fp_sett_js.list_plans[ind_plan].return_deposit === 1){
        let bodyRate = Math.floor(10000 / fp_sett_js.list_plans[ind_plan].freezing_days) / 100;
        text += ' + ' + bodyRate + '%(' + fp_sett_js.lang['plan_body'] + ') = <b>' + (earn_rate + bodyRate) + '%</b> ';
    }
    text += '<br/> ';
    text += fp_sett_js.lang['plan_source_balance'] + ': <b>' + (plan.only_for_bonus == 1 ? fp_sett_js.lang['plan_type_bonus'] : fp_sett_js.lang['plan_type_main']) + '</b><br/> ';
    text += " " + fp_sett_js.lang['v1'] + " ";
    var return_deposit = fp_sett_js.list_plans[ind_plan].return_deposit === 1 ? 'yes' : 'no';
    if(fp_sett_js.list_plans[ind_plan].return_deposit > 1){
        return_deposit = 'cancel';
    }
    var return_close = fp_sett_js.list_plans[ind_plan].return_earn_close === 1 ? 'yes' : 'no';
    // var only_for_bonus = fp_sett_js.list_plans[ind_plan].only_for_bonus === 1 ? 'yes' : 'no';

    text += "<b>";
    if (return_close === 'yes') {
        text += fp_sett_js.lang['plan_return_close_yes'];
    } else {
        if(return_deposit === 'cancel'){
            text += fp_sett_js.lang['plan_bonus_main_deposit_close'];
        } else if(return_deposit == 'yes'){
            text += fp_sett_js.lang['plan_return_deposit_yes'];
        } else {
            text += fp_sett_js.lang['plan_return_deposit_no'];
        }
    }
    text += "</b></p></div>";

    $('#desc_plan').html(text);

    // $('#bloc_confirm_deposit_new').hide(600);

    /**
     *
     */
    var depField = $('.deposits-balance');
    depField.children('div').removeClass('active');
    var checkBoxPromocode = $('#use_promocode');

    if (plan.only_for_bonus === 1) {
        depField.children('.is-bonus').addClass('active');

        //
        if(checkBoxPromocode.prop('checked')){
            checkBoxPromocode.trigger('click');
        }
        checkBoxPromocode.next('label').hide();
    } else {
        depField.children(':not(.is-bonus)').addClass('active');

        //
        checkBoxPromocode.next('label').show();
    }
}

function getBalances(callback)
{
    $.post('/ajax', {
        go: 'balances'
    })
        .done(function(data){
            if(typeof callback === 'function' && data.status === true){
                callback(data);
            }
        });
}

function load_earn_money_want() {
    $('.result_want_earn').html('');
    $('#load_earn_want').show();
    var suma = $('#amountdeposit').val();

    $.post('/ajax', {
        go: 'want_earn_plan',
        suma: suma
    }).done(function (data) {
        $('#load_earn_want').hide();

        if (data.status == true) {

            if (data.list.length > 0)
                $.each(data.list, function (k, v) {

                    var icon = (v.plan_type_code == 'simple') ? '&#xe043;' : '&#xe047;';

                    $('.result_want_earn').append('<div class="table-row reset_weight clearfix">' +
                        '<div class="table-cell map-cell" style="text-align: left; padding-left: 4px;"><div class="fs1" aria-hidden="true" data-icon="' + icon + '" title="' + v.plan_type_name + '"></div> ' + v.plan_name + '</div>' +
                        '<div class="table-cell deposit-cell">' + addCommas(Math.round(v.deposited)) + ' $</div>' +
                        '<div class="table-cell precent-cell" style="font-size: 11px;">' + v.earn_rate + '</div>' +
                        '<div class="table-cell freezing-cell">' + v.freezing_days +
                        '</div>' +
                        '<div class="table-cell earnings-cell">' + addCommas(Math.round(v.earned)) + ' $</div>' +
                        '<div class="table-cell button-cell">' +
                        '<a href="/deposits/add/' + v.plan_type_code + '/' + v.plan_code + '/' + suma + '#account" class="button table-button"><span>Вклад</span></a>' +
                        '</div>' +
                        '</div>');
                });

        } else alert(data.error);
    });
}

function view_seconds(pause) {
    return false;
    var price_sec = 13;
    var money = 0;

    if (pause == false) {
        money = fp_sett_js.second_site * price_sec;
        jQuery("#digit").text(Math.round(money));
        return false;
    }

    var time = clock.getTime().getSeconds();
    money = time * price_sec;

    setTimeout(function () {
        jQuery("#digit").text(Math.round(money));
    }, 300);
}

function jq(tag) {
    return tag.replace(/(:|\.|\[|\]|,|=)/g, "\\$1");
}

function bloc_confirm_deposit_hide() {
    var blockNewDeposit = $('#bloc_confirm_deposit_new');
    if (blockNewDeposit.css('display') === 'block') {
        blockNewDeposit.hide(600);
    }
}

function verifyPromocodeNewDeposit(promocode, plan_id, callback) {
    if (promocode === '') {
        return;
    }
    var div = $('#promocode_verify');

    div.html('<div class="promocode_loading">' + global_params.lang_promocode_verify + ' <b>' + promocode + '</b> ...</div>');
    div.removeClass('hide');

    $.post('/ajax', {
        go: 'promocode_verify',
        promocode: promocode
    }).done(function (data) {
        var result = '<div class="check_promocode">' + global_params.lang_promocode_status + ' <b>' + promocode + '</b>: ';

        if (data.status) {
            var validPlan = true;
            if (data.status.plans.length > 0) {
                if ($.inArray(plan_id, data.status.plans) < 0) {
                    validPlan = false;
                }
            }

            //
            if(typeof callback === 'function'){
                callback(validPlan);
            }

            //
            if (validPlan) {
                result += '<b class="text-success">' + global_params.lang_promocode_valid + '</b><br>';
                result += global_params.lang_promocode_mindep+': <b>' + data.status.offer.deposit_min.toFixed(2) + ' $</b>';

                result += '<br><div class="promocode_info">'+global_params.lang_promocode_view+': <ol>';

                if (data.status.offer.balance > 0) {
                    result += '<li>' + global_params.lang_promocode_bonus_main + ': ' + data.status.offer.balance + ' $</li>';
                }
                if (data.status.offer.balance_rate > 0) {
                    result += '<li>' + global_params.lang_promocode_bonus_main_rate + ': ' + data.status.offer.balance_rate + ' %</li>';
                }
                if (data.status.offer.balance_bonus > 0) {
                    result += '<li>' + global_params.lang_promocode_bonus_bonus + ': ' + data.status.offer.balance_bonus + ' $</li>';
                }
                if (data.status.offer.balance_bonus_rate > 0) {
                    result += '<li>' + global_params.lang_promocode_bonus_bonus_rate + ': ' + data.status.offer.balance_bonus_rate + ' %</li>';
                }
                if (data.status.offer.deposit_bonus > 0 || data.status.offer.deposit_bonus_rate > 0) {
                    result += '<li>' + global_params.lang_promocode_bonus_deposit + ': ';
                    if(data.status.offer.deposit_bonus > 0) {
                        result += ' +' + data.status.offer.deposit_bonus + ' $';
                    }
                    if(data.status.offer.deposit_bonus_rate > 0) {
                        result += ' +' + data.status.offer.deposit_bonus_rate + ' %';
                    }
                    result += '</li>';
                }
                if (data.status.offer.deposit_rate_days > 0) {
                    result += '<li>' + global_params.lang_promocode_upprocent + ': ' +
                        data.status.offer.deposit_add_rate + '% ' + global_params.lang_promocode_first + ' ' +
                        data.status.offer.deposit_rate_days + ' ' + global_params.lang_promocode_periods + '</li>';
                }

                result += '</ol></div>';
            } else {
                result += '<b class="text-danger">'+global_params.lang_promocode_invalid_for_plan+'</b>';
            }
        } else {
            result += '<b class="text-danger">'+global_params.lang_promocode_invalid + '</b>';
        }
        result += '</div>';

        $('#promocode_verify').html(result);
    });
}

function checkBalanceGames()
{
    $.post('/ajax', {
        go: 'balance_games'
    }).done(function(data){
        let item = $('.balance_games');
        let text = item.data('text-loading');
        item.text(text);

        if(data.status){
            if(data.exist_user){
                item.text(data.balance + ' Credits');
                item.attr('data-balance', data.balance);
            } else {
                text = item.data('text-nouser');
                item.text(text);
            }
        } else {
            text = item.data('text-errorsys');
            item.text(text);
        }
    }).fail(function(){
        let item = $('.balance_games');
        let text = item.data('text-errorsys');

        item.text(text);
    });
}