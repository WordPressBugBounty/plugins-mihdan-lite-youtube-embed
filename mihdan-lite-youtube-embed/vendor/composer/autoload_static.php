<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0045c64d56786606710ae3e6fe598ad4
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mihdan\\LiteYouTubeEmbed\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mihdan\\LiteYouTubeEmbed\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Mihdan\\LiteYouTubeEmbed\\Elementor' => __DIR__ . '/../..' . '/src/Elementor.php',
        'Mihdan\\LiteYouTubeEmbed\\Main' => __DIR__ . '/../..' . '/src/Main.php',
        'Mihdan\\LiteYouTubeEmbed\\Options' => __DIR__ . '/../..' . '/src/Options.php',
        'Mihdan\\LiteYouTubeEmbed\\Provider' => __DIR__ . '/../..' . '/src/Provider.php',
        'Mihdan\\LiteYouTubeEmbed\\Providers\\RuTube' => __DIR__ . '/../..' . '/src/Providers/RuTube.php',
        'Mihdan\\LiteYouTubeEmbed\\Providers\\YouTube' => __DIR__ . '/../..' . '/src/Providers/YouTube.php',
        'Mihdan\\LiteYouTubeEmbed\\Settings' => __DIR__ . '/../..' . '/src/Settings.php',
        'Mihdan\\LiteYouTubeEmbed\\ThirdParty\\CreativeMotionClearfy' => __DIR__ . '/../..' . '/src/ThirdParty/CreativeMotionClearfy.php',
        'Mihdan\\LiteYouTubeEmbed\\Utils' => __DIR__ . '/../..' . '/src/Utils.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0045c64d56786606710ae3e6fe598ad4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0045c64d56786606710ae3e6fe598ad4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0045c64d56786606710ae3e6fe598ad4::$classMap;

        }, null, ClassLoader::class);
    }
}
