<!-- Top Bar
============================================= -->
<div id="top-bar" class="transparent-topbar">
    <div class="container clearfix">
        <div class="col_half fright col_last clearfix nobottommargin">
            <!-- Top Links
            ============================================= -->
            <div class="top-links">
                <ul>
                    <li class="d-md-none d-lg-block"><a href="#"><i class="icon-call"></i> +62 812-3456-789</a></li>
                    <!-- <li><a href="#"><i class="icon-download-alt"></i> Download App</a></li> -->
                    <?php
                        if ($this->session->has_userdata('logged_in')) {
                            ?>
                            <li class="top-bar-highlight"><a href="<?=base_url('admin')?>" ><?=$this->session->userdata['logged_in']->nama?></a></li>
                            <?php
                        } else {
                            ?>
                            <li class="top-bar-highlight"><a href="#" class="side-panel-trigger">Masuk/Daftar</a></li>
                            <?php
                        }
                    ?>
                    
                    
                </ul>
            </div><!-- .top-links end -->

        </div>

    </div>

</div><!-- #top-bar end -->