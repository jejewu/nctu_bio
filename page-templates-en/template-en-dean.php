<?php
/*
 *Template Name:en-dean
 */
?>
<?php get_header('en_header'); ?>
<div class="page-dean">
    <div class="container">
        <div id="vice_dean-container" class="mobilehidden">
            <div class="intro-littleTitle">02  The Dean</div>
            <div class="dean-bigTitle">Prof. LI, YAW-KUEN</div>
            <div class="dean-littleTitle">(2014.8~)</div>
            <a target="_blank" href="<?php bloginfo('template_url');?>/files/Prof_Yaw-Kuen_Li-CV.pdf"><div class="dean-cv_icon"></div></a>
            <div class="clear_both"></div>
            <hr class="dean_hr mobilehidden">
            <div class="dean-option-wrapper dean-height1">
                <div class="dean-option">Education</div>
                <div class="dean-discript dean-width1">1987 - 1991 PhD, Department of Chemistry, Tulane University, USA<br>1985 - 1987 MS, Department of Chemistry, National Cheng Kung University, Taiwan<br>1977 - 1981 BS, Department of Chemistry, National Tsing Hua University, Taiwan</div>
            </div>
            <div class="dean-option-wrapper dean-height2">
                <div class="dean-option">Experience</div>
                <div class="dean-discript dean-width2">
			<div class="dean-width2-1">2014 -<br>2014<br>2011 - 2013<br>2007<br>2007<br>2005<br>2004 - 2005<br>2004 - 2006<br>2002<br>2001<br>1993 - 2001<br>1991 - 1993</div>
                	<div class="dean-width2-2">Dean, College of Science, NCTU<br>Visiting Scholar, NMI, University of Tubingen, Germany<br>Director of Chemistry division, National Science Council, Taiwan<br>Visiting Scholar, Linkoping University, Sweden<br>Dean of Student Affair, NCTU<br>Panel of Biochemistry Division, National Science Council, Taiwan<br>Panel of Biochemistry Division, National Science Council, Taiwan<br>Chair, Department of Applied Chemistry, NCTU<br>Present Professor, Department of Applied Chemistry, NCTU<br>Visiting Scholar, University of British Columbia, Canada<br>Associate professor, Department of Applied Chemistry, NCTU<br>Post-doctoral Fellow, Pharmacology and Molecular Science Department,School of Medicine, Johns Hopkins University, USA</div>
		</div>
            </div>
            <div class="dean-option-wrapper dean-height3">
                <div class="dean-option">Contact</div>
                <div class="dean-discript dean-width3">E-mail:&nbsp;ykl@cc.nctu.edu.tw<br>Phone:&nbsp;886 - 3 - 5712121 # 31985<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;886 - 3 - 5712121 # 56545</div>
            </div>
            <div class="dean-block">
                <div class="dean-block-text"><p>Education is not only the training of their own proficiency, it is also the temperament and tolerance training.</p></div>
            </div>
	</div>
<!--formobile-->
	<div id="vice_dean-container" class="formobile">
            <div class="dean-option-wrapper dean-height3 formobile">
                <div class="intro-littleTitle formobile">02 院長簡介(2014.8-)</div>
                <div class="dean-bigTitle">李  耀坤</div>
                <div class="dean-littleTitle">教授</div>
                <div class="notes dean-width3">ykl@cc.nctu.edu.tw<br>886-3-5712121 # 31985<br> 886-3-5712121 # 56545</div>
            </div>
	    <div class="dean-triangle"></div>
	    <div class="dean-rectangle"></div>
	</div>
    </div>
		<a class="icon_up"href="<?php echo site_url(); ?>/intro" style="opacity:1; transform: matrix(1,0,0,1,0,0);"><div class="left_icon"></div></a>
                <a class="icon_down"href="<?php echo site_url(); ?>/vice_dean" style="opacity:1; transform: matrix(1,0,0,1,0,0);"><div class="right_icon_w"></div></a>
</div>
<script>
    $(".dean-option-wrapper").hover(
        function() {
            $(".dean-block").hide();
        }, function() {
            $(".dean-block").show();
        }
    );
    $(document).ready(function() {
        $(".nav_menu").on("click",function(){});
    });
</script>


<?php wp_nav_menu (array('theme_location' => 'Menu2','container_class' => 'nav_menu','container_id' => 'nav_menu_2')); ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
