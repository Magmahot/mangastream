<!DOCTYPE html>
<html>
    <head>
        <title>      
            <?php wp_title( '|', true, 'right' ); ?>
            <?php bloginfo( 'name' ); ?>
        </title>
        
        <meta name="viewport" content="width=device-width,initial-scale=1">
    
    <?php wp_head() ?>

    </head>
    <body class="wrap wider">
        <div class="header">
            <div class="grid">
                <div class="unit one-third">
                    <a href="<?php echo site_url(); ?>">
                        <div class="logo">
                        </div>
                    </a>
                </div>
                <div class="unit two-thirds">
                    <div class="block_leader float-right">
                    </div>
                </div>
            </div>
            <div class="grid">
                <div class="unit whole">
                    <div class="nav">
                        <ul class="nav-ul">
                            <li class="nav-li pull-right">
                                <a href="javascript:void(0);" class="nav-a">Settings</a>
                            </li><li class="nav-li">
                                <a href="<?php echo site_url(); ?>" class="nav-a active">Home</a>
                            </li><li class="nav-li">
                                <a href="javascript:void(0);" class="nav-a">Read Manga <i class="fa fa-caret-down"></i></a>
                            </li><li class="nav-li">
                                <a href="javascript:void(0);" class="nav-a">Recruitment</a>
                            </li><li class="nav-li">
                                <a href="javascript:void(0);" class="nav-a">Submit a Color Page</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
