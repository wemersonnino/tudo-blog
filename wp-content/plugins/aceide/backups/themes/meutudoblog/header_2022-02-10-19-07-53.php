<?php /* start AceIDE restore code */
if ( $_POST["restorewpnonce"] === "3b02b8d09ade54f37356fb8b291a3fa1df1ea5b6e9" ) {
if ( file_put_contents ( "/var/www/site/blog/wp-content/themes/meutudoblog/header.php" ,  preg_replace( "#<\?php /\* start AceIDE restore code(.*)end AceIDE restore code \* \?>/#s", "", file_get_contents( "/var/www/site/blog/wp-content/plugins/aceide/backups/themes/meutudoblog/header_2022-02-10-19-07-53.php" ) ) ) ) {
	echo __( "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file." );
}
} else {
echo "-1";
}
die();
/* end AceIDE restore code */ ?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="theme-color" content="#D22688">
  <meta property="fb:app_id" content="1715926341798059" />
  
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-NXWTS32');</script>
  <!-- End Google Tag Manager -->

  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,700" rel="stylesheet">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXWTS32"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- Facebook SDK -->
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v10.0&appId=1715926341798059&autoLogAppEvents=1" nonce="70NAl51R"></script>
  
  <!-- Facebook Pixel Code -->
  <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '{your-pixel-id-goes-here}');
    fbq('track', 'PageView');
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" 
         src="https://www.facebook.com/tr?id=363860657681051&ev=PageView&noscript=1"/>
  </noscript>
  <!-- End Facebook Pixel Code -->

  <div id="wrapper">