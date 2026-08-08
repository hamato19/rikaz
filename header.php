<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <!-- استدعاء خط IBM Plex Sans Arabic للواجهات التقنية -->
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@400;600;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header class="site-header">
        <div class="container navbar-container">
            <div class="logo-area">
                <h1 class="site-title">
                    <a href="<?php echo esc_url(home_url('/')); ?>">رِكاز <span>Rikaz</span></a>
                </h1>
            </div>
            <div class="header-badge">
                <span class="saudi-badge">منصة سعودية 🇸🇦</span>
            </div>
        </div>
    </header>

