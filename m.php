<?
	session_start();
	$id = $_SESSION["id"];
	echo "id = ".$id;
	print "<br>";
	?>

<html style="font-size: 12px;">
<head>
<!--	<title>관리 페이지 VER:2025-04-25</title> -->
<!-- <title>관리 페이지 VER:2025-09-30</title> -->
<!--<title>관리 페이지 VER:2025-11-28</title> </head>-->
<!--<title>관리 페이지 VER : 2025-12-12</title> </head>

background-color: #54539e
color: #f9f9f9;
background-color: #0085e7
-->
<title>관리 페이지</title> </head>

</head>

<style>
  
	a {
  	  text-decoration: none;
  }
	a:link, a:visited {
     background-color: #D4D4D3FF;
     color: #152AB4FF; 
     padding: 1px 1px;
     text-align: center;
     text-decoration: none;
     display: inline-block;
 }
 
	a:hover, a:active {
     background-color: #D6F71DFF; 
}


</style>


<body>

[견적 문의 회신시 최초 코드발급]<BR>
<!-- <a href="http://192.168.100.19/ckx_code/1.php" target="_blank"> CKX-CODE 발급 </a>&nbsp; -->
<!--<a href="../ckx_code/1.php" target="_blank"> CKX-CODE 발급 </a>&nbsp;-->
<a href="../ckx_code/1.php" target="right"> CKX-CODE 발급 </a>&nbsp;<br>
<a href="https://www.tradlinx.com/ko/container-terminal-schedule" target="right"> 컨테이너 터미널 스케쥴 </a>&nbsp;<br>
<a href="http://192.168.100.19/bbs/zboard.php?id=work_data" target="_blank"> 업무 자료 저장소 </a>&nbsp;<BR>
<!-- <a href="http://192.168.100.19/port2/1.php" target="_blank"> 선사별 운항 PORT 검색 </a>&nbsp; -->
<a href="https://search.naver.com/search.naver?where=nexearch&sm=top_hty&fbm=1&ie=utf8&query=%ED%99%98%EC%9C%A8%EA%B3%84%EC%82%B0" target="_blank"> 환율(네이버) </a>&nbsp;<BR>
<a href="https://etrans3.klnet.co.kr/" target="_blank"> 이트란스 </a>&nbsp;<BR>
<a href="http://www.bts24.co.kr/uat/uia/plism3Sub.do?menu_no=233" target="_blank"> 모선별 서류마감일 조회(프리즘) </a>&nbsp;<BR>
<a href="https://www.logisview.com/svc/expTracking" target="_blank"> 로지스뷰(컨추적) </a>&nbsp;<BR>
<a href="https://www.forwarder.kr/tariff/?quarter=2022_3&chg_type=%EC%95%88%EC%A0%84%EC%9A%B4%EC%86%A1%EC%9A%B4%EC%9E%84&stitle=%EB%B6%80%EC%82%B0%EC%8B%A0%ED%95%AD%EA%B8%B0%EC%A0%90&Send_region1=%EA%B2%BD%EC%83%81%EB%82%A8%EB%8F%84&Send_region2=&Send_region3=&tariff_region=&extra9=&extra8=&extra5=&extra10=" target="right"> 운송료 조회(안전운임) </a>&nbsp;<BR>
<a href="https://unipass.customs.go.kr/clip/index.do" target="right"> 한국 HSCODE 조회 </a>&nbsp;<BR>
<a href="https://hts.usitc.gov/search?query=4008.21" target="_blank"> 미국 HSCODE 조회 </a>&nbsp;<BR>
<a href="https://www.windy.com/?37.287,127.012,5" target="_blank"> 날씨 지도 보기 </a>&nbsp;<BR>
<a href="http://192.168.100.19/myadmin/index.php?lang=ko-euc-kr&server=1&db=ckx&table=line_surcharge&" target="_blank"> MYSQL DB 로그인 </a>&nbsp;<BR>
<a href="https://www.google.com/maps/?authuser=0&entry=ttu" target="_blank"> 구글 지도 </a>&nbsp;<BR>
<a href="https://www.kebhana.com/cont/mall/mall15/mall1501/index.jsp?_menuNo=23100" target="_blank"> 환율(하나은행) </a>&nbsp;<BR>
<a href="https://www.forwarder.kr/curr/index.php?curr=cbm" target="_blank"> CBM 계산기, 컨사이즈 </a>&nbsp;<BR>
<a href="https://dict.naver.com/" target="right"> 네이버 사전 </a>&nbsp;<BR>

<BR><BR>
[POD별 운항 선사 찾기]<BR>
<a href="https://www.forwarder.kr/shipping/link.php" target="right"> 쉬핑링크 </a>&nbsp;<BR>
<a href="1.php" target="right"> CKX 선사별 운항 PORT 검색 </a>&nbsp;<BR>
<a href="https://www.bigschedules.com/tou" target="right"> bigschedules.com </a>&nbsp;<BR>
<a href="https://www.tradlinx.com/schedule?tab=fcl" target="right"> FCL 해상 스케쥴 </a>&nbsp;<BR>
<a href="https://www.searates.com/maritime" target="right"> 전세계 PORT </a>&nbsp;<BR>

<BR><BR>
[업체별 관리 시트]<BR>
<a href="https://docs.google.com/spreadsheets/d/1zQnF5yL2kPOInF-Mjbbwu97ez3YghTdTfA3T-6vdjgw/edit?gid=0#gid=0" target="right"> 동서콘솔 </a>&nbsp;
<a href="https://docs.google.com/spreadsheets/d/1UEIQB6eaVqmb9ZKbWNcg_iF4yRu0Hicp5O4beywmZtc/edit?pli=1&gid=0#gid=0" target="right"> 진양 </a>&nbsp;
<a href="https://docs.google.com/spreadsheets/d/1dDW97xPgDb3Jy2sMLYGI83gN7ih-OiYeZqmL6W_rrng/edit?pli=1&gid=0#gid=0" target="right"> 레오나 </a>&nbsp;
<a href="https://docs.google.com/spreadsheets/d/1j7Uy7Oon09C-cPKcQDWiSxQXOdrVrka_o99lSUkOFtI/edit?pli=1&gid=0#gid=0" target="right"> 메버릭 </a>&nbsp;
<a href="https://docs.google.com/spreadsheets/d/1y2-whAI2YAFl4WFhe8ttO6C7qKM9X6rpeFZC5-7jcOM/edit?gid=0#gid=0" target="right"> 화승 </a>&nbsp;
<a href="https://docs.google.com/spreadsheets/d/1lNk6eXaeKLh2lhrruGZcxFIJgAXr92e2LdmQggfeMzQ/edit?gid=0#gid=0" target="right"> 우진 </a>&nbsp;
<a href="https://docs.google.com/spreadsheets/d/12pJ0hs0SD5yNxgiElVUj3ysSuaFqOP_JkbrOig8L7Rs/edit?gid=0#gid=0" target="right"> JBG </a>&nbsp;
<a href="https://docs.google.com/spreadsheets/d/1tyC3X5r4lNl41o7Y11rw9DdVRY6VBLF18jW1zyGw9yM/edit?gid=0#gid=0" target="right"> 호산 </a>&nbsp;


<BR><BR>
[터미널정보, 화물 추적]<BR>
<a href="https://www.searates.com/kr/container/tracking/" target="right"> 컨넘버 추적 </a>&nbsp;
<a href="http://www.hyojinlogis.com/?page_id=3302" target="_blank"> 터미널 정보 </a>&nbsp;
<a href="http://www.eunsan.co.kr/business/sea/cfs" target="_blank"> 반입지 CODE </a>&nbsp;
<a href="https://www.searates.com/kr/container/tracking/" target="right"> 화물추적1(searates) </a>&nbsp;
<a href="https://svc.pncport.com/info/CMS/Ship/Info.pnc?mCode=MN014" target="right"> PNC </a>&nbsp;
<a href="https://info.bct2-4.com/infoservice/index.html" target="_blank"> BCT(부산신항) </a>&nbsp;
<a href="https://info.kitl.com/jsp/T05/banchul_allow.jsp" target="_blank"> 허치슨(광양) </a>&nbsp;

<BR><BR>
[정보 조회]<BR>
<a href="https://unipass.customs.go.kr/csp/index.do" target="right"> 유니패스-화물운송 주선업자 코드 조회-CKXX </a>&nbsp;
<a href="http://www.hyojinlogis.com/?page_id=3075/" target="_blank"> 컨테이너 규격표 </a>&nbsp;
<a href="https://www.chainportal.co.kr/portinfo/nexacro/index.html?screenid=screen_info" target="_blank"> (IIS)통합정보조회 서비스 - 체인포털 </a>&nbsp;
<a href="https://calendar.online/calendar-weeks/2025/48" target="right"> 달력 몇주차 검색 </a>&nbsp;
<a href="https://onlinealarmkur.com/date/ko/#subtract-date" target="right"> 날짜 계산기 </a>&nbsp;
<a href="https://www.oocl.com/KOREA/eng/localinformation/ddfreetime/Pages/default.aspx" target="_blank"> OOCL/DEM/DET </a>&nbsp;
<a href="https://vivoldi.com/tools/html-color-picker" target="_blank"> HTML 색상 코드 검색 </a>&nbsp;
<a href="https://github.com/" target="_blank"> GITHUB </a>&nbsp;

<BR><BR>
[구글 시트]<BR>
<a href="https://docs.google.com/spreadsheets/d/1U4EOGPBmPYqPqcXnOVXv8ESGtkDPT2t5CHLDDAv-JFM/edit?gid=906028204#gid=906028204" target="right"> 견적서용-창고료-관부가세-선사별 서차지 </a>&nbsp;
<a href="https://docs.google.com/spreadsheets/d/1JKoaEYEDwwFR9nLpr8d7PcOaiExhmnztgAIl5p-9aKM/edit?gid=0#gid=0" target="right"> FNS 미주 운송료 리스트 </a>&nbsp;
<a href="https://docs.google.com/spreadsheets/d/1JrasosUfs5f92AxHEw5Ef6QzeDUO1fSqhguMOqEr4LM/edit?gid=880754564#gid=880754564" target="right"> 아프리카운임 </a>&nbsp;
<a href="https://docs.google.com/spreadsheets/d/1p5FvI-Yo38su7KP9MnCWbMPkJbykipsuBXoefvA2EAc/edit?gid=0#gid=0" target="right"> CKX 계좌번호 </a>&nbsp;
<a href="https://docs.google.com/spreadsheets/d/1-2QeEyQn01zxoR-22cqaXiJGBoKiybeF9Xnlp3_beBQ/edit?gid=684931413#gid=684931413" target="right">MEXICO TRUCKING</a>&nbsp;
<a href="https://docs.google.com/spreadsheets/d/1ER-YCnPg-4Xpe6giFrPqrtj0Rt2iTT1xrKz0Wl7Ecdo/edit?gid=851128972#gid=851128972" target="right">수출 업체명 공유</a>&nbsp;
<a href="https://docs.google.com/spreadsheets/d/1Fa1eyd-Pt1jZ-o2Q-m-9jx584BgMCilSy5CfHk9H5RM/edit?gid=2120252017#gid=2120252017" target="right">수출의 탑</a>&nbsp;
<a href="https://docs.google.com/spreadsheets/d/12yQUze_N8MoatX07d8RlBGHvBIo3PC6HFq0MSXNSXMU/edit?pli=1&gid=1331352308#gid=1331352308" target="right">미국 운임과 지도</a>&nbsp;
<a href="https://docs.google.com/spreadsheets/d/1hjYfNLGjgfrxBEAitIQWfkHWLffqvs4OlBoEHyAOqCY/edit?gid=1070108048#gid=1070108048" target="right">CKX 김차장 월별 실적</a>&nbsp;

<BR><BR>
[해상 견적시 참고 페이지]<BR>
<a href="http://192.168.100.19/port2/f.php" target="_blank"> 포딩용 견적 양식 </a>&nbsp;
<a href="https://www.hmm21.com/e-service/general/DashBoard.do" target="_blank"> 항구 3코드 검색(HMM) </a>&nbsp;
<a href="https://www.marinetraffic.com/en/ais/details/ports/87?name=LOS-ANGELES&country=USA" target="_blank"> 마린트래픽(배,항구,지도 보기) </a>&nbsp;

<BR><BR>
[선사 스케쥴 조회]<BR>
<a href="https://www.cma-cgm.com/ebusiness/schedules" target="_blank"> CMA </a>&nbsp;
<a href="https://info.bnctkorea.com/esvc" target="_blank"> BNCT(부산신항) </a>&nbsp;
<a href="https://www.e.zim.com/login" target="_blank"> ZIM </a>&nbsp;
<a href="https://www.oocl.com/eng/ourservices/eservices/sailingschedule/Pages/default.aspx" target="_blank"> OOCL </a>&nbsp;
<a href="https://www.yml.co.kr/intro" target="_blank"> YML </a>&nbsp;
<a href="https://www.hmm21.com/e-service/hiquote/quotationNew.do" target="_blank"> HMM </a>&nbsp;
<a href="https://esvc.smlines.com/smline/CUP_HOM_3001.do?sessLocale=ko" target="_blank"> SM </a>&nbsp;
<a href="http://www.tslines.co.kr/web_bk/index.asp" target="_blank"> TS LINE ( USLGB ) </a>&nbsp;
<a href="https://ecomm.one-line.com/one-ecom/prices/one-quote" target="_blank"> ONE </a>&nbsp;
<a href="https://elines.coscoshipping.com/ebusiness/sailingSchedule/searchByCity" target="_blank"> COSCO </a>&nbsp;
<a href="https://www.ekmtc.com/index.html#/main" target="_blank"> KMTC </a>&nbsp;
<a href="https://ebiz.heungaline.com/Schedule" target="_blank"> 흥아 </a>&nbsp;
<a href="https://www.tradlinx.com/container-terminal-schedule" target="_blank"> 컨테이너 터미널 스케줄 </a>&nbsp;

<BR><BR>
[항공 견적시 참고 페이지]<BR>
<a href="https://www.airportal.go.kr/airline/airCompanyInfo.do" target="_blank"> 항공사코드 조회 2( 2자리 영문 ) </a>&nbsp;
<a href="https://www.airportal.go.kr/airport/airport.do" target="_blank"> 공항 코드 조회 ( 3자리 영문 ) </a>&nbsp;
<a href="https://www.world-airport-codes.com/" target="right"> 공항 코드 조회 ( 3자리 영문 ) (2)</a>&nbsp;


<br><br>
[견적서 작성]<BR>
<a href="http://192.168.100.19/cargo_check/login.php" target="_blank"> 견적서 작성시 로그인 페이지 </a>&nbsp;
<a href="http://192.168.100.19/quatation/register_in.php" target="_blank"> 견적서 작성 페이지 </a>&nbsp;
<a href="help.php" target="right"> 견적시 참고 페이지 </a>&nbsp;



<br><br>
[컨반입 체크]<BR>
<a href="https://sea.ulogishub.com/index.jsp?sso=ok" target="right"> 유로지스허브 </a>&nbsp;
<a href="http://192.168.100.19/cargo_check/status.php" target="_blank"> 컨반입 체크(전체보기) </a>&nbsp;
<a href="http://192.168.100.19/cargo_check/status2.php" target="_blank"> 컨반입 체크(개인보기) </a>&nbsp;
<a href="http://192.168.100.19/cargo_check/input.php" target="_blank"> 컨반입 체크 - 컨번호입력 </a>&nbsp;

<BR><BR>
<a href="https://translate.google.co.kr/?hl=ko&sl=en&tl=ko&op=translate" target="_blank"> 구글번역 </a>&nbsp;
<a href="https://docs.google.com/spreadsheets/u/0/" target="_blank"> 구글시트 메인 </a>&nbsp;
<a href="https://chatgpt.com/" target="_blank"> ChatGPT </a>&nbsp;
<a href="https://www.forwarder.kr/curr/truck_info.php" target="right"> 화물차량 제원조회 </a>&nbsp;
<a href="https://www.logishop.co.kr/ps_s" target="_blank"> 컨테이너 파렛 적재수량 계산기 </a>&nbsp;
<a href="https://www.bestro-logix.co.kr/inc/side_menu_cbm_popup.html" target="_blank"> CBM CALCULATOR </a>&nbsp;


<BR><BR>
<a href="terminal.php" target="right"> 터미널-모선 조회 </a>&nbsp;
<a href="ddp.php" target="right"> DDP 관리 페이지 </a>&nbsp;
<a href="in.php" target="right"> 수입 관리 페이지 </a>&nbsp;
<a href="http://192.168.100.19/bbs/zboard.php?id=request_freight" target="_blank"> 운임문의, 견적문의 </a>&nbsp;
<a href="oceanfreight.php" target="right"> 운임 관리 페이지 </a>&nbsp;
<a href="oceanfreight_usa.php" target="right"> 미주 운임 관리 페이지 </a>&nbsp;
<a href="http://192.168.100.19/bbs/zboard.php?id=sales" target="_blank"> sales </a>&nbsp;
<a href="http://192.168.100.19/bbs/zboard.php?id=phone" target="_blank"> 업체연락 </a>&nbsp;

<BR><BR>
<a href="fr.php" target="right"> FR </a>&nbsp;
<a href="shuttle.php" target="right"> 상하차료/셔틀료/보관료 </a>&nbsp;

<BR><BR>
<a href='1.php'>처음 화면으로</a>
<a href="logout.php"> 로그아웃 </a>
<BR><BR>
관리 페이지 VER : 2026-1-7
</body>
</html>


<!--

251128 / 컨넘버로 추척 조회 링크 추가
251128 / 항공사코드 조회 2( 2자리 영문 ) / 링크 수정
251128 / 공항 코드 조회 ( 3자리 영문 ) / 링크 수정
251128 / 공항 코드 조회 ( 3자리 영문 ) (2) / 링크 추가
251212 / https://www.bigschedules.com/tou , 쉬핑링크 - Shipping Link / 추가		
251215 / 견적서용-창고료-관부가세-선사별 서차지 - 구글 시트 주소 추가
251216 / 정보 조회 탭 위로 올림
251222 / 하나은행 고시환율 추가
260107 / 프레임 분리
260109 / 링크 수정, 추가

-->