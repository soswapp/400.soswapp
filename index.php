<?php
namespace TymFrontiers;
require_once ".appinit.php";
require_once APP_BASE_INC;
$gen = new Generic;
$params = $gen->requestParam([
  "request" => ["request","text",3,0],
  "message" => ["message","text",3,0]
],'get',[]);
if (!empty($params['message'])) $params['message'] = \urldecode($params['message']);
$page_name = "400";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr" manifest="/site.webmanifest">
  <head>
    <meta charset="utf-8">
    <title>400 - Bad Request</title>
    <?php include PRJ_INC_ICONSET; ?>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
    <meta name="keywords" content="7, seven, os, operating, system, template">
    <meta name="description" content="7 OS Web - app template">
    <meta name="author" content="Your developer">
    <meta name="creator" content="7 OS">
    <meta name="publisher" content="Your company">
    <meta name="robots" content='index'>
    <!-- Theming styles -->
    <link rel="stylesheet" href="/app/soswapp/font-awesome.soswapp/css/font-awesome.min.css">
    <link rel="stylesheet" href="/app/soswapp/theme.soswapp/css/theme.min.css">
    <link rel="stylesheet" href="/app/soswapp/theme.soswapp/css/theme-<?php echo PRJ_THEME; ?>.min.css">
    <!-- optional plugin -->
    <link rel="stylesheet" href="/app/soswapp/plugin.soswapp/css/plugin.min.css">
    <link rel="stylesheet" href="/app/soswapp/dnav.soswapp/css/dnav.min.css">
    <link rel="stylesheet" href="/app/soswapp/faderbox.soswapp/css/faderbox.min.css">
    <!-- Project styling -->
    <link rel="stylesheet" href="<?php echo \html_style("base.css"); ?>">
  </head>
  <body>
    <?php \TymFrontiers\Helper\setup_page('400','base', true, PRJ_HEADER_HEIGHT); ?>
    <?php include PRJ_INC_HEADER; ?>
    <section id="main-content">

      <div class="view-space">
        <div class="grid-8-tablet grid-6-desktop center-tablet">
          <div class="sec-div padding -p20 align-c">
            <p class="align-c">
              <span class="fa-stack fa-2x">
                <i class="fas fa-cloud fa-stack-2x"></i>
                <i class="fas fa-frown fa-stack-1x fa-inverse"></i>
              </span>
            </p>
            <h1>That was a bad request.</h1>
            <?php if (!empty($params['request'])): ?>
              <blockquote>
                <p><?php echo $params['request']; ?></p>
              </blockquote>
            <?php endif; ?>
            <p>
              <?php if (!empty($params["message"])){
                echo $params['message'];
              } else {
                echo "This request is inappropriate, confirm it's not your fault.";
              } ?>
            </p>
            <p> <i class="fas fa-angle-double-left"></i> <a href="<?php echo WHOST; ?>"><b>Go back home</b></a> </p>
            <br class="c-f">
          </div>
        </div>
        <br class="c-f">

      </div>
    </section>
    <?php include PRJ_INC_FOOTER; ?>
    <!-- Required scripts -->
    <script src="/app/soswapp/jquery.soswapp/js/jquery.min.js">  </script>
    <script src="/app/soswapp/js-generic.soswapp/js/js-generic.min.js">  </script>
    <script src="/app/soswapp/theme.soswapp/js/theme.min.js" ></script>
    <!-- optional plugins -->
    <script src="/app/soswapp/plugin.soswapp/js/plugin.min.js" ></script>
    <script src="/app/soswapp/dnav.soswapp/js/dnav.min.js" ></script>
    <script src="/app/soswapp/faderbox.soswapp/js/faderbox.min.js" ></script>
    <!-- project scripts -->
    <script src="<?php echo \html_script ("base.min.js"); ?>" ></script>
  </body>
</html>
