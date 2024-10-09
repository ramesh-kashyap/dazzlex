@include('layouts.mainsite.header')

<main class="netmi-content"><div class="netmi-header-page contacts">
<div class="netmi-inner">
<ul class="netmi-breadcrumbs">
<li class="netmi-breadcrumbs__item"><a href="index.html">Home</a></li>
<li class="netmi-breadcrumbs__item netmi-breadcrumbs__item--active">Contacts</li>
</ul>
</div>
</div>
<div class="netmi-static">
<div class="netmi-inner"><h1 >Contacts</h1>
<div class="netmi-contact-rows netmi-page-box">
<div class="netmi-col-1" >
<p class="netmi-contacts-big">Dazzlex Limited keeps developing business relationship all over the world.</p>
<p class="netmi-contacts-silver">Before creating a ticket, please, make sure your question is not covered in <a href="faq.html">FAQ section</a>. If you still have questions, we'll be always happy to help you!</p>    
<h6 class="netmi-first">Contact Us</h6>
<div style="margin-bottom:10px">
<i class="flaticon-email" style="position:relative; top:3px;  color: #aa72ce; margin-right:5px;"></i> <a href="mailto:info@netmi.org" target="_blank" style="color: #9093ab;">info@Dazzlex.org</a></div>
<div><i class="flaticon-soc-tg" style="position:relative; top:3px;  color: #2c9bc0; margin-right:5px;"></i> <a href="http://t.me/netmi_support" target="_blank" style="color: #9093ab;">@Dazzlex_support</a></div>
<h6>Branch office</h6>
<ol class="netmi-contacts-small"><li>Company Number (UK): <b>14815179</b></li><li>106 Thingwall Road, Liverpool, England, L15 7LB</li></ol>
<a href="https://find-and-update.company-information.service.gov.uk/company/14815179" target="_blank" class="netmi-btn netmi-ghost-1">Check in the registry</a>
</div>
<div class="netmi-col" >
<h6 class="netmi-form">Contact Form</h6>
<form action="https://netmi.org/en/contact" method="POST" autocomplete="off" class="netmi-contacts-form">
<div class="netmi-loader"></div>
<div class="netmi-fld"><input class="netmi-inp netmi-inp-0" type="text" name="full_name" placeholder="Your name"></div>
<div class="netmi-fld"><input class="netmi-inp netmi-inp-0" type="text" name="email" placeholder="Your e-mail"></div>
<div class="netmi-fld"><input class="netmi-inp netmi-inp-0" type="text" name="title" placeholder="Subject"></div>
<div class="netmi-fld"><textarea class="netmi-textarea netmi-medium" style="margin-bottom:-7px;" name="text" placeholder="Message text"></textarea></div>
<div class="netmi-fld captcha-box"><input class="netmi-inp netmi-inp-0" type="text" name="captcha" placeholder="Security Code" maxlength="4">
<div class="captcha-row" ><img src="../captch5672.png?t=1727338253470" class="capcha-img" alt=""></div>
</div>
<div class="netmi-fld" style="margin-top:15px"><button class="netmi-btn netmi-blue" type="submit" name="send" onclick="submit_message();">Send</button></div>
</form>
</div>
</div>
</div>
</div>
</main>
@include('layouts.mainsite.footer')
