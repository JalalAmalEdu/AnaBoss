<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnaBoss - Plateforme d'accompagnement pour auto-entrepreneurs marocains</title>
    <meta name="description" content="AnaBoss aide les jeunes entrepreneurs marocains à lancer leur activité d'auto-entrepreneur avec des outils simples : guide d'inscription CNSS, facturation conforme, gestion simplifiée. Support en arabe, darija et français.">
    <meta name="keywords" content="auto-entrepreneur maroc, cnss, facturation maroc, entrepreneur marocain, startup maroc, freelance maroc">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://anaboss.ma/">
    <meta property="og:title" content="AnaBoss - Ton assistant pour devenir auto-entrepreneur au Maroc">
    <meta property="og:description" content="Guide complet, facturation conforme, gestion simplifiée - tout pour réussir ton business au Maroc">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://anaboss.ma/">
    <meta property="twitter:title" content="AnaBoss - Plateforme pour auto-entrepreneurs marocains">
    <meta property="twitter:description" content="Deviens auto-entrepreneur au Maroc en toute simplicité avec AnaBoss">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'red': {
                            50: '#fef2f2',
                            100: '#fee2e2',
                            500: '#ef4444',
                            600: '#dc2626',
                            700: '#b91c1c'
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-white">
    <?php include 'components/header.php'; ?>
    
    <main>
        <?php include 'components/hero.php'; ?>
        <?php include 'components/features.php'; ?>
        <?php include 'components/guide.php'; ?>
        <?php include 'components/testimonials.php'; ?>
        <?php include 'components/contact.php'; ?>
    </main>
    
    <?php include 'components/footer.php'; ?>
    
    <script src="js/main.js"></script>
</body>
</html>