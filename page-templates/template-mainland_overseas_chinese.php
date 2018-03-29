<?php
/*
 *Template Name:mainland_overseas_chinese
 */
?>
<?php get_header(); ?>
<div class="page-admissions">
		<a class="icon_up"href="<?php echo site_url(); ?>/international_admissions" style="opacity:1; transform: matrix(1,0,0,1,0,0);"><div class="left_icon"></div></a>
                <a class="icon_down"href="<?php echo site_url(); ?>/admissions" style="opacity:1; transform: matrix(1,0,0,1,0,0);"><div class="right_icon"></div></a>
    <div class="container">
        <div class="adm-container adm-container0">
            <div class="subtitled adm-l_title">03  華文地區招生</div>
            <div class="subtitle adm-b_title">陸生及僑生港澳生</div>
	    <div class="adm-line"></div>
            <div class="adm-chinese_text_block text">本校學士、碩士、博士亦招收大陸地區學生，陸生招生窗口為大學校院招收大陸地區學生聯合招生委員會。報名者應設籍在北京、上海、浙江、江蘇、福建、廣東、湖北及遼寧8省市，報名碩、博士班報考資格應符合教育部認可名冊之學校學歷。本校系所相關諮詢請洽各系所，其他業務聯絡：教務處綜合組。</div>
            <table class="adm-chinese_table mobilehidden">
                <tr class="adm-tr1"><td colspan="2"><p class="text adm-box1">教務處綜合組</p></td><td class="adm-td3"><p class="text adm-box2">e-mail：exam@nctu.edu.tw<br>Tel：+886-3-5131391</p></td></tr>
                <tr class="adm-tr2">
			<td class="adm-td1">
				<a href="http://depart.moe.edu.tw/ED2200/News_Content.aspx?n=5E9ABCBC24AC1122&sms=C227CFDC4553F3D5&s=2690D12DF5118DE0">
					<div class="adm-box5"></div>
				</a>
			</td>
			<td colspan="2">
				<p class="text adm-box4">教育部大陸地區大學及高等教育機構認可名冊(105.4)</p>
			</td>
		</tr>
                <tr class="adm-tr3">
			<td>
				<a href="http://www.ia.nctu.edu.tw/ezfiles/0/1000/img/3/139884016.pdf">
					<div class="adm-box3"></div>
				</a>
			</td>
			<td colspan="2">
				<p class="text adm-box6">國立交通大學大陸學生獎學金作業要點</p>
			</td>
		</tr>
            </table>
            
	    <div class="adm-table_container formobile">
                <p class="text adm-box1">教務處綜合組</p>
 		<p class="text adm-box2">E-mail：exam@nctu.edu.tw<br>Tel：+886-3-5131391</p>
                <a href="http://depart.moe.edu.tw/ED2200/News_Content.aspx?n=5E9ABCBC24AC1122&sms=C227CFDC4553F3D5&s=2690D12DF5118DE0">
                	<p class="text adm-box3">教育部大陸地區大學及高等教育機構認可名冊(105.4)</p>
		</a>
                <a href="http://www.ia.nctu.edu.tw/ezfiles/0/1000/img/3/139884016.pdf">
                        <p class="text adm-box4">國立交通大學大陸學生獎學金作業要點</p>
            	</a>
	    </div>    
            
        	<div class="mobile-space"></div>
        	<div class= "adm-mobile_info adm-mobile_info_mainland formobile">
            		<div class="adm-mobile_info_container">
            		    <a target="_blank" href="http://exam.nctu.edu.tw/stut.htm">
                		<p class="text adm-mobile_text" style="margin-left: calc( 33vw - 85px);">陸生招生訊息</p>
            	   	    </a>
            		    <div class="adm-mobile_info_line"></div>
            		    <a target="_blank" href="http://exam.nctu.edu.tw/cosa.htm">
                	        <p class="text adm-mobile_text">僑生港澳生招生</p>
            		    </a>
        	</div>

        </div>

        <div onclick="" class="adm-bottom_info adm-bottom_info0 mobilehidden">
            <p class="subtitled adm-bottom_title">交通大學招生訊息</p>
            <div class="adm-bottom_info_container">
                <div class="adm-bottom_info_line"></div>
	    <a target="_blank" href="http://exam.nctu.edu.tw/stut.htm" >
                <p class="text adm-bottom_text adm-bottom_text4">陸生招生訊息</p>
	    </a>
 	    <a target="_blank" href="http://exam.nctu.edu.tw/cosa.htm">
		<p class="text adm-bottom_text">僑生港澳生招生訊息</p>
	    </a>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $(".nav_menu").on("click",function(){});
    });
</script>

<?php wp_nav_menu (array('theme_location' => 'Menu6','container_class' => 'nav_menu','container_id' => 'nav_menu_3')); ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
