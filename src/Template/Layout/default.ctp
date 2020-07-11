<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
?>
<style><style>
        .pace {
            -webkit-pointer-events: none;
            pointer-events: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        .pace-inactive {
            display: none;
        }

        .pace .pace-progress {
            background: #29d;
            position: fixed;
            z-index: 2000;
            top: 0;
            right: 100%;
            width: 100%;
            height: 2px;
        }

        .pace .pace-progress-inner {
            display: block;
            position: absolute;
            right: 0px;
            width: 100px;
            height: 100%;
            box-shadow: 0 0 10px #29d, 0 0 5px #29d;
            opacity: 1.0;
            -webkit-transform: rotate(3deg) translate(0px, -4px);
            -moz-transform: rotate(3deg) translate(0px, -4px);
            -ms-transform: rotate(3deg) translate(0px, -4px);
            -o-transform: rotate(3deg) translate(0px, -4px);
            transform: rotate(3deg) translate(0px, -4px);
        }

        .pace .pace-activity {
            display: block;
            position: fixed;
            z-index: 2000;
            top: 15px;
            right: 15px;
            width: 14px;
            height: 14px;
            border: solid 2px transparent;
            border-top-color: #29d;
            border-left-color: #29d;
            border-radius: 10px;
            -webkit-animation: pace-spinner 400ms linear infinite;
            -moz-animation: pace-spinner 400ms linear infinite;
            -ms-animation: pace-spinner 400ms linear infinite;
            -o-animation: pace-spinner 400ms linear infinite;
            animation: pace-spinner 400ms linear infinite;
        }

        @-webkit-keyframes pace-spinner {
            0% { -webkit-transform: rotate(0deg); transform: rotate(0deg); }
            100% { -webkit-transform: rotate(360deg); transform: rotate(360deg); }
        }
        @-moz-keyframes pace-spinner {
            0% { -moz-transform: rotate(0deg); transform: rotate(0deg); }
            100% { -moz-transform: rotate(360deg); transform: rotate(360deg); }
        }
        @-o-keyframes pace-spinner {
            0% { -o-transform: rotate(0deg); transform: rotate(0deg); }
            100% { -o-transform: rotate(360deg); transform: rotate(360deg); }
        }
        @-ms-keyframes pace-spinner {
            0% { -ms-transform: rotate(0deg); transform: rotate(0deg); }
            100% { -ms-transform: rotate(360deg); transform: rotate(360deg); }
        }
        @keyframes pace-spinner {
            0% { transform: rotate(0deg); transform: rotate(0deg); }
            100% { transform: rotate(360deg); transform: rotate(360deg); }
        }

</style>
<script src="https://raw.github.com/HubSpot/pace/v1.0.0/pace.min.js">
<?php
echo $this->Element('header');
echo $this->Element('navbar');

?>
</script>
<div class="content">
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-auto">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        você está em
                    </div>
                    <h2 class="page-title">
                        <?php echo $this->fetch('title', $title) ;?>
                    </h2>
                </div>
                <!-- Page title actions -->
<?php echo $this->element('page_actions');?>
            </div>
        </div>
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
    </div>
    <?php echo $this->element('footer');?>

</div>
