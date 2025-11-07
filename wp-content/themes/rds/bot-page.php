<?php
/**
Template Name: Bot Page - LawnBot
Template By : Lawnbot
Template designed By : Erik Alburg<erik@lawnbot.biz>
URL : https://lawnbot.biz
 */
?>

<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title><?php echo get_option( 'lawnbot_botpage_title') ?></title>
    <style>
            .LawnBotFullPage, .LawnBotFullPage-container {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                z-index: 1000;
            }
        </style>
</head>
<body>

        <script>
            const botConfig = {
                customerId: '<?php echo get_option( 'lawnbot_company_id') ?>',
                botId: '<?php echo get_option( 'lawnbot_bot_id') ?>'
            }
        </script>
        <script>
           function loadBot() {
               const search = window.location.search;
                const body = document.getElementsByTagName('body')[0];
                body.innerHTML = `
                <div class="LawnBotFullPage">
                    <div class="LawnBotFullPage-container">
                        <iframe frameborder="0" width="100%" height="100%"
                        sandbox="allow-popups allow-top-navigation allow-scripts allow-same-origin allow-modals"
                        src="https://sales.lawnbot.biz/${botConfig.customerId}/${botConfig.botId}/${search}" />
                    </div>
                </div>
                `;
            }
            setTimeout(() => {
                loadBot();
            }, 500);
           
        </script>




</body>
</html>
