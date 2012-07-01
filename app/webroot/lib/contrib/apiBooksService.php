



<!DOCTYPE html>
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
 
 <meta name="ROBOTS" content="NOARCHIVE">
 
 <link rel="icon" type="image/vnd.microsoft.icon" href="http://www.gstatic.com/codesite/ph/images/phosting.ico">
 
 
 <script type="text/javascript">
 
 
 
 
 var codesite_token = "30nLN8RGTALbZO0AUCq077ltq0o:1341000486596";
 
 
 var CS_env = {"profileUrl":["/u/104358089135791898513/"],"token":"30nLN8RGTALbZO0AUCq077ltq0o:1341000486596","assetHostPath":"http://www.gstatic.com/codesite/ph","domainName":null,"assetVersionPath":"http://www.gstatic.com/codesite/ph/16696656050152905794","projectHomeUrl":"/p/google-api-php-client","relativeBaseUrl":"","projectName":"google-api-php-client","loggedInUserEmail":"enzopecorari@gmail.com"};
 var _gaq = _gaq || [];
 _gaq.push(
 ['siteTracker._setAccount', 'UA-18071-1'],
 ['siteTracker._trackPageview']);
 
 _gaq.push(
 ['projectTracker._setAccount', 'UA-18058-13'],
 ['projectTracker._trackPageview']);
 
 (function() {
 var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
 ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
 (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga);
 })();
 
 </script>
 
 
 <title>apiBooksService.php - 
 google-api-php-client -
 
 
 Google APIs Client Library for PHP - Google Project Hosting
 </title>
 <link type="text/css" rel="stylesheet" href="http://www.gstatic.com/codesite/ph/16696656050152905794/css/core.css">
 
 <link type="text/css" rel="stylesheet" href="http://www.gstatic.com/codesite/ph/16696656050152905794/css/ph_detail.css" >
 
 
 <link type="text/css" rel="stylesheet" href="http://www.gstatic.com/codesite/ph/16696656050152905794/css/d_sb.css" >
 
 
 
<!--[if IE]>
 <link type="text/css" rel="stylesheet" href="http://www.gstatic.com/codesite/ph/16696656050152905794/css/d_ie.css" >
<![endif]-->
 <style type="text/css">
 .menuIcon.off { background: no-repeat url(http://www.gstatic.com/codesite/ph/images/dropdown_sprite.gif) 0 -42px }
 .menuIcon.on { background: no-repeat url(http://www.gstatic.com/codesite/ph/images/dropdown_sprite.gif) 0 -28px }
 .menuIcon.down { background: no-repeat url(http://www.gstatic.com/codesite/ph/images/dropdown_sprite.gif) 0 0; }
 
 
 
  tr.inline_comment {
 background: #fff;
 vertical-align: top;
 }
 div.draft, div.published {
 padding: .3em;
 border: 1px solid #999; 
 margin-bottom: .1em;
 font-family: arial, sans-serif;
 max-width: 60em;
 }
 div.draft {
 background: #ffa;
 } 
 div.published {
 background: #e5ecf9;
 }
 div.published .body, div.draft .body {
 padding: .5em .1em .1em .1em;
 max-width: 60em;
 white-space: pre-wrap;
 white-space: -moz-pre-wrap;
 white-space: -pre-wrap;
 white-space: -o-pre-wrap;
 word-wrap: break-word;
 font-size: 1em;
 }
 div.draft .actions {
 margin-left: 1em;
 font-size: 90%;
 }
 div.draft form {
 padding: .5em .5em .5em 0;
 }
 div.draft textarea, div.published textarea {
 width: 95%;
 height: 10em;
 font-family: arial, sans-serif;
 margin-bottom: .5em;
 }

 
 .nocursor, .nocursor td, .cursor_hidden, .cursor_hidden td {
 background-color: white;
 height: 2px;
 }
 .cursor, .cursor td {
 background-color: darkblue;
 height: 2px;
 display: '';
 }
 
 
.list {
 border: 1px solid white;
 border-bottom: 0;
}

 
 </style>
</head>
<body class="t4">
<script type="text/javascript">
 window.___gcfg = {lang: 'en'};
 (function() 
 {var po = document.createElement("script");
 po.type = "text/javascript"; po.async = true;po.src = "https://apis.google.com/js/plusone.js";
 var s = document.getElementsByTagName("script")[0];
 s.parentNode.insertBefore(po, s);
 })();
</script>
<div class="headbg">

 <div id="gaia">
 

 <span>
 
 
 <b>enzopecorari@gmail.com</b>
 
 
 | <a href="/u/104358089135791898513/" id="projects-dropdown" onclick="return false;"
 ><u>My favorites</u> <small>&#9660;</small></a>
 | <a href="/u/104358089135791898513/" onclick="_CS_click('/gb/ph/profile');"
 title="Profile, Updates, and Settings"
 ><u>Profile</u></a>
 | <a href="https://www.google.com/accounts/Logout?continue=http%3A%2F%2Fcode.google.com%2Fp%2Fgoogle-api-php-client%2Fsource%2Fbrowse%2Ftrunk%2Fsrc%2Fcontrib%2FapiBooksService.php" 
 onclick="_CS_click('/gb/ph/signout');"
 ><u>Sign out</u></a>
 
 </span>

 </div>

 <div class="gbh" style="left: 0pt;"></div>
 <div class="gbh" style="right: 0pt;"></div>
 
 
 <div style="height: 1px"></div>
<!--[if lte IE 7]>
<div style="text-align:center;">
Your version of Internet Explorer is not supported. Try a browser that
contributes to open source, such as <a href="http://www.firefox.com">Firefox</a>,
<a href="http://www.google.com/chrome">Google Chrome</a>, or
<a href="http://code.google.com/chrome/chromeframe/">Google Chrome Frame</a>.
</div>
<![endif]-->



 <table style="padding:0px; margin: 0px 0px 10px 0px; width:100%" cellpadding="0" cellspacing="0"
 itemscope itemtype="http://schema.org/CreativeWork">
 <tr style="height: 58px;">
 
 <td id="plogo">
 <link itemprop="url" href="/p/google-api-php-client">
 <a href="/p/google-api-php-client/">
 
 <img src="http://www.gstatic.com/codesite/ph/images/search-48.gif" alt="Logo" itemprop="image">
 
 </a>
 </td>
 
 <td style="padding-left: 0.5em">
 
 <div id="pname">
 <a href="/p/google-api-php-client/"><span itemprop="name">google-api-php-client</span></a>
 </div>
 
 <div id="psum">
 <a id="project_summary_link"
 href="/p/google-api-php-client/"><span itemprop="description">Google APIs Client Library for PHP</span></a>
 
 </div>
 
 
 </td>
 <td style="white-space:nowrap;text-align:right; vertical-align:bottom;">
 
 <form action="/hosting/search">
 <input size="30" name="q" value="" type="text">
 
 <input type="submit" name="projectsearch" value="Search projects" >
 </form>
 
 </tr>
 </table>

</div>

 
<div id="mt" class="gtb"> 
 <a href="/p/google-api-php-client/" class="tab ">Project&nbsp;Home</a>
 
 
 
 
 <a href="/p/google-api-php-client/downloads/list" class="tab ">Downloads</a>
 
 
 
 
 
 <a href="/p/google-api-php-client/w/list" class="tab ">Wiki</a>
 
 
 
 
 
 <a href="/p/google-api-php-client/issues/list"
 class="tab ">Issues</a>
 
 
 
 
 
 <a href="/p/google-api-php-client/source/checkout"
 class="tab active">Source</a>
 
 
 
 
 
 
 
 <div class=gtbc></div>
</div>
<table cellspacing="0" cellpadding="0" width="100%" align="center" border="0" class="st">
 <tr>
 
 
 
 
 
 
 
 <td class="subt">
 <div class="st2">
 <div class="isf">
 
 


 <span class="inst1"><a href="/p/google-api-php-client/source/checkout">Checkout</a></span> &nbsp;
 <span class="inst2"><a href="/p/google-api-php-client/source/browse/">Browse</a></span> &nbsp;
 <span class="inst3"><a href="/p/google-api-php-client/source/list">Changes</a></span> &nbsp;
 
 &nbsp;
 
 
 <form action="/p/google-api-php-client/source/search" method="get" style="display:inline"
 onsubmit="document.getElementById('codesearchq').value = document.getElementById('origq').value">
 <input type="hidden" name="q" id="codesearchq" value="">
 <input type="text" maxlength="2048" size="38" id="origq" name="origq" value="" title="Google Code Search" style="font-size:92%">&nbsp;<input type="submit" value="Search Trunk" name="btnG" style="font-size:92%">
 
 
 
 
 
 
 </form>
 <script type="text/javascript">
 
 function codesearchQuery(form) {
 var query = document.getElementById('q').value;
 if (query) { form.action += '%20' + query; }
 }
 </script>
 </div>
</div>

 </td>
 
 
 
 <td align="right" valign="top" class="bevel-right"></td>
 </tr>
</table>


<script type="text/javascript">
 var cancelBubble = false;
 function _go(url) { document.location = url; }
</script>
<div id="maincol"
 
>

 
<!-- IE -->




<div class="expand">
<div id="colcontrol">
<style type="text/css">
 #file_flipper { white-space: nowrap; padding-right: 2em; }
 #file_flipper.hidden { display: none; }
 #file_flipper .pagelink { color: #0000CC; text-decoration: underline; }
 #file_flipper #visiblefiles { padding-left: 0.5em; padding-right: 0.5em; }
</style>
<table id="nav_and_rev" class="list"
 cellpadding="0" cellspacing="0" width="100%">
 <tr>
 
 <td nowrap="nowrap" class="src_crumbs src_nav" width="33%">
 <strong class="src_nav">Source path:&nbsp;</strong>
 <span id="crumb_root">
 
 <a href="/p/google-api-php-client/source/browse/">svn</a>/&nbsp;</span>
 <span id="crumb_links" class="ifClosed"><a href="/p/google-api-php-client/source/browse/trunk/">trunk</a><span class="sp">/&nbsp;</span><a href="/p/google-api-php-client/source/browse/trunk/src/">src</a><span class="sp">/&nbsp;</span><a href="/p/google-api-php-client/source/browse/trunk/src/contrib/">contrib</a><span class="sp">/&nbsp;</span>apiBooksService.php</span>
 
 

 </td>
 
 
 <td nowrap="nowrap" width="33%" align="center">
 <a href="/p/google-api-php-client/source/browse/trunk/src/contrib/apiBooksService.php?edit=1"
 ><img src="http://www.gstatic.com/codesite/ph/images/pencil-y14.png"
 class="edit_icon">Edit file</a>
 </td>
 
 
 <td nowrap="nowrap" width="33%" align="right">
 <table cellpadding="0" cellspacing="0" style="font-size: 100%"><tr>
 
 
 <td class="flipper">
 <ul class="leftside">
 
 <li><a href="/p/google-api-php-client/source/browse/trunk/src/contrib/apiBooksService.php?r=292" title="Previous">&lsaquo;r292</a></li>
 
 </ul>
 </td>
 
 <td class="flipper"><b>r445</b></td>
 
 </tr></table>
 </td> 
 </tr>
</table>

<div class="fc">
 
 
 
<style type="text/css">
.undermouse span {
 background-image: url(http://www.gstatic.com/codesite/ph/images/comments.gif); }
</style>
<table class="opened" id="review_comment_area"
><tr>
<td id="nums">
<pre><table width="100%"><tr class="nocursor"><td></td></tr></table></pre>
<pre><table width="100%" id="nums_table_0"><tr id="gr_svn445_1"

><td id="1"><a href="#1">1</a></td></tr
><tr id="gr_svn445_2"

><td id="2"><a href="#2">2</a></td></tr
><tr id="gr_svn445_3"

><td id="3"><a href="#3">3</a></td></tr
><tr id="gr_svn445_4"

><td id="4"><a href="#4">4</a></td></tr
><tr id="gr_svn445_5"

><td id="5"><a href="#5">5</a></td></tr
><tr id="gr_svn445_6"

><td id="6"><a href="#6">6</a></td></tr
><tr id="gr_svn445_7"

><td id="7"><a href="#7">7</a></td></tr
><tr id="gr_svn445_8"

><td id="8"><a href="#8">8</a></td></tr
><tr id="gr_svn445_9"

><td id="9"><a href="#9">9</a></td></tr
><tr id="gr_svn445_10"

><td id="10"><a href="#10">10</a></td></tr
><tr id="gr_svn445_11"

><td id="11"><a href="#11">11</a></td></tr
><tr id="gr_svn445_12"

><td id="12"><a href="#12">12</a></td></tr
><tr id="gr_svn445_13"

><td id="13"><a href="#13">13</a></td></tr
><tr id="gr_svn445_14"

><td id="14"><a href="#14">14</a></td></tr
><tr id="gr_svn445_15"

><td id="15"><a href="#15">15</a></td></tr
><tr id="gr_svn445_16"

><td id="16"><a href="#16">16</a></td></tr
><tr id="gr_svn445_17"

><td id="17"><a href="#17">17</a></td></tr
><tr id="gr_svn445_18"

><td id="18"><a href="#18">18</a></td></tr
><tr id="gr_svn445_19"

><td id="19"><a href="#19">19</a></td></tr
><tr id="gr_svn445_20"

><td id="20"><a href="#20">20</a></td></tr
><tr id="gr_svn445_21"

><td id="21"><a href="#21">21</a></td></tr
><tr id="gr_svn445_22"

><td id="22"><a href="#22">22</a></td></tr
><tr id="gr_svn445_23"

><td id="23"><a href="#23">23</a></td></tr
><tr id="gr_svn445_24"

><td id="24"><a href="#24">24</a></td></tr
><tr id="gr_svn445_25"

><td id="25"><a href="#25">25</a></td></tr
><tr id="gr_svn445_26"

><td id="26"><a href="#26">26</a></td></tr
><tr id="gr_svn445_27"

><td id="27"><a href="#27">27</a></td></tr
><tr id="gr_svn445_28"

><td id="28"><a href="#28">28</a></td></tr
><tr id="gr_svn445_29"

><td id="29"><a href="#29">29</a></td></tr
><tr id="gr_svn445_30"

><td id="30"><a href="#30">30</a></td></tr
><tr id="gr_svn445_31"

><td id="31"><a href="#31">31</a></td></tr
><tr id="gr_svn445_32"

><td id="32"><a href="#32">32</a></td></tr
><tr id="gr_svn445_33"

><td id="33"><a href="#33">33</a></td></tr
><tr id="gr_svn445_34"

><td id="34"><a href="#34">34</a></td></tr
><tr id="gr_svn445_35"

><td id="35"><a href="#35">35</a></td></tr
><tr id="gr_svn445_36"

><td id="36"><a href="#36">36</a></td></tr
><tr id="gr_svn445_37"

><td id="37"><a href="#37">37</a></td></tr
><tr id="gr_svn445_38"

><td id="38"><a href="#38">38</a></td></tr
><tr id="gr_svn445_39"

><td id="39"><a href="#39">39</a></td></tr
><tr id="gr_svn445_40"

><td id="40"><a href="#40">40</a></td></tr
><tr id="gr_svn445_41"

><td id="41"><a href="#41">41</a></td></tr
><tr id="gr_svn445_42"

><td id="42"><a href="#42">42</a></td></tr
><tr id="gr_svn445_43"

><td id="43"><a href="#43">43</a></td></tr
><tr id="gr_svn445_44"

><td id="44"><a href="#44">44</a></td></tr
><tr id="gr_svn445_45"

><td id="45"><a href="#45">45</a></td></tr
><tr id="gr_svn445_46"

><td id="46"><a href="#46">46</a></td></tr
><tr id="gr_svn445_47"

><td id="47"><a href="#47">47</a></td></tr
><tr id="gr_svn445_48"

><td id="48"><a href="#48">48</a></td></tr
><tr id="gr_svn445_49"

><td id="49"><a href="#49">49</a></td></tr
><tr id="gr_svn445_50"

><td id="50"><a href="#50">50</a></td></tr
><tr id="gr_svn445_51"

><td id="51"><a href="#51">51</a></td></tr
><tr id="gr_svn445_52"

><td id="52"><a href="#52">52</a></td></tr
><tr id="gr_svn445_53"

><td id="53"><a href="#53">53</a></td></tr
><tr id="gr_svn445_54"

><td id="54"><a href="#54">54</a></td></tr
><tr id="gr_svn445_55"

><td id="55"><a href="#55">55</a></td></tr
><tr id="gr_svn445_56"

><td id="56"><a href="#56">56</a></td></tr
><tr id="gr_svn445_57"

><td id="57"><a href="#57">57</a></td></tr
><tr id="gr_svn445_58"

><td id="58"><a href="#58">58</a></td></tr
><tr id="gr_svn445_59"

><td id="59"><a href="#59">59</a></td></tr
><tr id="gr_svn445_60"

><td id="60"><a href="#60">60</a></td></tr
><tr id="gr_svn445_61"

><td id="61"><a href="#61">61</a></td></tr
><tr id="gr_svn445_62"

><td id="62"><a href="#62">62</a></td></tr
><tr id="gr_svn445_63"

><td id="63"><a href="#63">63</a></td></tr
><tr id="gr_svn445_64"

><td id="64"><a href="#64">64</a></td></tr
><tr id="gr_svn445_65"

><td id="65"><a href="#65">65</a></td></tr
><tr id="gr_svn445_66"

><td id="66"><a href="#66">66</a></td></tr
><tr id="gr_svn445_67"

><td id="67"><a href="#67">67</a></td></tr
><tr id="gr_svn445_68"

><td id="68"><a href="#68">68</a></td></tr
><tr id="gr_svn445_69"

><td id="69"><a href="#69">69</a></td></tr
><tr id="gr_svn445_70"

><td id="70"><a href="#70">70</a></td></tr
><tr id="gr_svn445_71"

><td id="71"><a href="#71">71</a></td></tr
><tr id="gr_svn445_72"

><td id="72"><a href="#72">72</a></td></tr
><tr id="gr_svn445_73"

><td id="73"><a href="#73">73</a></td></tr
><tr id="gr_svn445_74"

><td id="74"><a href="#74">74</a></td></tr
><tr id="gr_svn445_75"

><td id="75"><a href="#75">75</a></td></tr
><tr id="gr_svn445_76"

><td id="76"><a href="#76">76</a></td></tr
><tr id="gr_svn445_77"

><td id="77"><a href="#77">77</a></td></tr
><tr id="gr_svn445_78"

><td id="78"><a href="#78">78</a></td></tr
><tr id="gr_svn445_79"

><td id="79"><a href="#79">79</a></td></tr
><tr id="gr_svn445_80"

><td id="80"><a href="#80">80</a></td></tr
><tr id="gr_svn445_81"

><td id="81"><a href="#81">81</a></td></tr
><tr id="gr_svn445_82"

><td id="82"><a href="#82">82</a></td></tr
><tr id="gr_svn445_83"

><td id="83"><a href="#83">83</a></td></tr
><tr id="gr_svn445_84"

><td id="84"><a href="#84">84</a></td></tr
><tr id="gr_svn445_85"

><td id="85"><a href="#85">85</a></td></tr
><tr id="gr_svn445_86"

><td id="86"><a href="#86">86</a></td></tr
><tr id="gr_svn445_87"

><td id="87"><a href="#87">87</a></td></tr
><tr id="gr_svn445_88"

><td id="88"><a href="#88">88</a></td></tr
><tr id="gr_svn445_89"

><td id="89"><a href="#89">89</a></td></tr
><tr id="gr_svn445_90"

><td id="90"><a href="#90">90</a></td></tr
><tr id="gr_svn445_91"

><td id="91"><a href="#91">91</a></td></tr
><tr id="gr_svn445_92"

><td id="92"><a href="#92">92</a></td></tr
><tr id="gr_svn445_93"

><td id="93"><a href="#93">93</a></td></tr
><tr id="gr_svn445_94"

><td id="94"><a href="#94">94</a></td></tr
><tr id="gr_svn445_95"

><td id="95"><a href="#95">95</a></td></tr
><tr id="gr_svn445_96"

><td id="96"><a href="#96">96</a></td></tr
><tr id="gr_svn445_97"

><td id="97"><a href="#97">97</a></td></tr
><tr id="gr_svn445_98"

><td id="98"><a href="#98">98</a></td></tr
><tr id="gr_svn445_99"

><td id="99"><a href="#99">99</a></td></tr
><tr id="gr_svn445_100"

><td id="100"><a href="#100">100</a></td></tr
><tr id="gr_svn445_101"

><td id="101"><a href="#101">101</a></td></tr
><tr id="gr_svn445_102"

><td id="102"><a href="#102">102</a></td></tr
><tr id="gr_svn445_103"

><td id="103"><a href="#103">103</a></td></tr
><tr id="gr_svn445_104"

><td id="104"><a href="#104">104</a></td></tr
><tr id="gr_svn445_105"

><td id="105"><a href="#105">105</a></td></tr
><tr id="gr_svn445_106"

><td id="106"><a href="#106">106</a></td></tr
><tr id="gr_svn445_107"

><td id="107"><a href="#107">107</a></td></tr
><tr id="gr_svn445_108"

><td id="108"><a href="#108">108</a></td></tr
><tr id="gr_svn445_109"

><td id="109"><a href="#109">109</a></td></tr
><tr id="gr_svn445_110"

><td id="110"><a href="#110">110</a></td></tr
><tr id="gr_svn445_111"

><td id="111"><a href="#111">111</a></td></tr
><tr id="gr_svn445_112"

><td id="112"><a href="#112">112</a></td></tr
><tr id="gr_svn445_113"

><td id="113"><a href="#113">113</a></td></tr
><tr id="gr_svn445_114"

><td id="114"><a href="#114">114</a></td></tr
><tr id="gr_svn445_115"

><td id="115"><a href="#115">115</a></td></tr
><tr id="gr_svn445_116"

><td id="116"><a href="#116">116</a></td></tr
><tr id="gr_svn445_117"

><td id="117"><a href="#117">117</a></td></tr
><tr id="gr_svn445_118"

><td id="118"><a href="#118">118</a></td></tr
><tr id="gr_svn445_119"

><td id="119"><a href="#119">119</a></td></tr
><tr id="gr_svn445_120"

><td id="120"><a href="#120">120</a></td></tr
><tr id="gr_svn445_121"

><td id="121"><a href="#121">121</a></td></tr
><tr id="gr_svn445_122"

><td id="122"><a href="#122">122</a></td></tr
><tr id="gr_svn445_123"

><td id="123"><a href="#123">123</a></td></tr
><tr id="gr_svn445_124"

><td id="124"><a href="#124">124</a></td></tr
><tr id="gr_svn445_125"

><td id="125"><a href="#125">125</a></td></tr
><tr id="gr_svn445_126"

><td id="126"><a href="#126">126</a></td></tr
><tr id="gr_svn445_127"

><td id="127"><a href="#127">127</a></td></tr
><tr id="gr_svn445_128"

><td id="128"><a href="#128">128</a></td></tr
><tr id="gr_svn445_129"

><td id="129"><a href="#129">129</a></td></tr
><tr id="gr_svn445_130"

><td id="130"><a href="#130">130</a></td></tr
><tr id="gr_svn445_131"

><td id="131"><a href="#131">131</a></td></tr
><tr id="gr_svn445_132"

><td id="132"><a href="#132">132</a></td></tr
><tr id="gr_svn445_133"

><td id="133"><a href="#133">133</a></td></tr
><tr id="gr_svn445_134"

><td id="134"><a href="#134">134</a></td></tr
><tr id="gr_svn445_135"

><td id="135"><a href="#135">135</a></td></tr
><tr id="gr_svn445_136"

><td id="136"><a href="#136">136</a></td></tr
><tr id="gr_svn445_137"

><td id="137"><a href="#137">137</a></td></tr
><tr id="gr_svn445_138"

><td id="138"><a href="#138">138</a></td></tr
><tr id="gr_svn445_139"

><td id="139"><a href="#139">139</a></td></tr
><tr id="gr_svn445_140"

><td id="140"><a href="#140">140</a></td></tr
><tr id="gr_svn445_141"

><td id="141"><a href="#141">141</a></td></tr
><tr id="gr_svn445_142"

><td id="142"><a href="#142">142</a></td></tr
><tr id="gr_svn445_143"

><td id="143"><a href="#143">143</a></td></tr
><tr id="gr_svn445_144"

><td id="144"><a href="#144">144</a></td></tr
><tr id="gr_svn445_145"

><td id="145"><a href="#145">145</a></td></tr
><tr id="gr_svn445_146"

><td id="146"><a href="#146">146</a></td></tr
><tr id="gr_svn445_147"

><td id="147"><a href="#147">147</a></td></tr
><tr id="gr_svn445_148"

><td id="148"><a href="#148">148</a></td></tr
><tr id="gr_svn445_149"

><td id="149"><a href="#149">149</a></td></tr
><tr id="gr_svn445_150"

><td id="150"><a href="#150">150</a></td></tr
><tr id="gr_svn445_151"

><td id="151"><a href="#151">151</a></td></tr
><tr id="gr_svn445_152"

><td id="152"><a href="#152">152</a></td></tr
><tr id="gr_svn445_153"

><td id="153"><a href="#153">153</a></td></tr
><tr id="gr_svn445_154"

><td id="154"><a href="#154">154</a></td></tr
><tr id="gr_svn445_155"

><td id="155"><a href="#155">155</a></td></tr
><tr id="gr_svn445_156"

><td id="156"><a href="#156">156</a></td></tr
><tr id="gr_svn445_157"

><td id="157"><a href="#157">157</a></td></tr
><tr id="gr_svn445_158"

><td id="158"><a href="#158">158</a></td></tr
><tr id="gr_svn445_159"

><td id="159"><a href="#159">159</a></td></tr
><tr id="gr_svn445_160"

><td id="160"><a href="#160">160</a></td></tr
><tr id="gr_svn445_161"

><td id="161"><a href="#161">161</a></td></tr
><tr id="gr_svn445_162"

><td id="162"><a href="#162">162</a></td></tr
><tr id="gr_svn445_163"

><td id="163"><a href="#163">163</a></td></tr
><tr id="gr_svn445_164"

><td id="164"><a href="#164">164</a></td></tr
><tr id="gr_svn445_165"

><td id="165"><a href="#165">165</a></td></tr
><tr id="gr_svn445_166"

><td id="166"><a href="#166">166</a></td></tr
><tr id="gr_svn445_167"

><td id="167"><a href="#167">167</a></td></tr
><tr id="gr_svn445_168"

><td id="168"><a href="#168">168</a></td></tr
><tr id="gr_svn445_169"

><td id="169"><a href="#169">169</a></td></tr
><tr id="gr_svn445_170"

><td id="170"><a href="#170">170</a></td></tr
><tr id="gr_svn445_171"

><td id="171"><a href="#171">171</a></td></tr
><tr id="gr_svn445_172"

><td id="172"><a href="#172">172</a></td></tr
><tr id="gr_svn445_173"

><td id="173"><a href="#173">173</a></td></tr
><tr id="gr_svn445_174"

><td id="174"><a href="#174">174</a></td></tr
><tr id="gr_svn445_175"

><td id="175"><a href="#175">175</a></td></tr
><tr id="gr_svn445_176"

><td id="176"><a href="#176">176</a></td></tr
><tr id="gr_svn445_177"

><td id="177"><a href="#177">177</a></td></tr
><tr id="gr_svn445_178"

><td id="178"><a href="#178">178</a></td></tr
><tr id="gr_svn445_179"

><td id="179"><a href="#179">179</a></td></tr
><tr id="gr_svn445_180"

><td id="180"><a href="#180">180</a></td></tr
><tr id="gr_svn445_181"

><td id="181"><a href="#181">181</a></td></tr
><tr id="gr_svn445_182"

><td id="182"><a href="#182">182</a></td></tr
><tr id="gr_svn445_183"

><td id="183"><a href="#183">183</a></td></tr
><tr id="gr_svn445_184"

><td id="184"><a href="#184">184</a></td></tr
><tr id="gr_svn445_185"

><td id="185"><a href="#185">185</a></td></tr
><tr id="gr_svn445_186"

><td id="186"><a href="#186">186</a></td></tr
><tr id="gr_svn445_187"

><td id="187"><a href="#187">187</a></td></tr
><tr id="gr_svn445_188"

><td id="188"><a href="#188">188</a></td></tr
><tr id="gr_svn445_189"

><td id="189"><a href="#189">189</a></td></tr
><tr id="gr_svn445_190"

><td id="190"><a href="#190">190</a></td></tr
><tr id="gr_svn445_191"

><td id="191"><a href="#191">191</a></td></tr
><tr id="gr_svn445_192"

><td id="192"><a href="#192">192</a></td></tr
><tr id="gr_svn445_193"

><td id="193"><a href="#193">193</a></td></tr
><tr id="gr_svn445_194"

><td id="194"><a href="#194">194</a></td></tr
><tr id="gr_svn445_195"

><td id="195"><a href="#195">195</a></td></tr
><tr id="gr_svn445_196"

><td id="196"><a href="#196">196</a></td></tr
><tr id="gr_svn445_197"

><td id="197"><a href="#197">197</a></td></tr
><tr id="gr_svn445_198"

><td id="198"><a href="#198">198</a></td></tr
><tr id="gr_svn445_199"

><td id="199"><a href="#199">199</a></td></tr
><tr id="gr_svn445_200"

><td id="200"><a href="#200">200</a></td></tr
><tr id="gr_svn445_201"

><td id="201"><a href="#201">201</a></td></tr
><tr id="gr_svn445_202"

><td id="202"><a href="#202">202</a></td></tr
><tr id="gr_svn445_203"

><td id="203"><a href="#203">203</a></td></tr
><tr id="gr_svn445_204"

><td id="204"><a href="#204">204</a></td></tr
><tr id="gr_svn445_205"

><td id="205"><a href="#205">205</a></td></tr
><tr id="gr_svn445_206"

><td id="206"><a href="#206">206</a></td></tr
><tr id="gr_svn445_207"

><td id="207"><a href="#207">207</a></td></tr
><tr id="gr_svn445_208"

><td id="208"><a href="#208">208</a></td></tr
><tr id="gr_svn445_209"

><td id="209"><a href="#209">209</a></td></tr
><tr id="gr_svn445_210"

><td id="210"><a href="#210">210</a></td></tr
><tr id="gr_svn445_211"

><td id="211"><a href="#211">211</a></td></tr
><tr id="gr_svn445_212"

><td id="212"><a href="#212">212</a></td></tr
><tr id="gr_svn445_213"

><td id="213"><a href="#213">213</a></td></tr
><tr id="gr_svn445_214"

><td id="214"><a href="#214">214</a></td></tr
><tr id="gr_svn445_215"

><td id="215"><a href="#215">215</a></td></tr
><tr id="gr_svn445_216"

><td id="216"><a href="#216">216</a></td></tr
><tr id="gr_svn445_217"

><td id="217"><a href="#217">217</a></td></tr
><tr id="gr_svn445_218"

><td id="218"><a href="#218">218</a></td></tr
><tr id="gr_svn445_219"

><td id="219"><a href="#219">219</a></td></tr
><tr id="gr_svn445_220"

><td id="220"><a href="#220">220</a></td></tr
><tr id="gr_svn445_221"

><td id="221"><a href="#221">221</a></td></tr
><tr id="gr_svn445_222"

><td id="222"><a href="#222">222</a></td></tr
><tr id="gr_svn445_223"

><td id="223"><a href="#223">223</a></td></tr
><tr id="gr_svn445_224"

><td id="224"><a href="#224">224</a></td></tr
><tr id="gr_svn445_225"

><td id="225"><a href="#225">225</a></td></tr
><tr id="gr_svn445_226"

><td id="226"><a href="#226">226</a></td></tr
><tr id="gr_svn445_227"

><td id="227"><a href="#227">227</a></td></tr
><tr id="gr_svn445_228"

><td id="228"><a href="#228">228</a></td></tr
><tr id="gr_svn445_229"

><td id="229"><a href="#229">229</a></td></tr
><tr id="gr_svn445_230"

><td id="230"><a href="#230">230</a></td></tr
><tr id="gr_svn445_231"

><td id="231"><a href="#231">231</a></td></tr
><tr id="gr_svn445_232"

><td id="232"><a href="#232">232</a></td></tr
><tr id="gr_svn445_233"

><td id="233"><a href="#233">233</a></td></tr
><tr id="gr_svn445_234"

><td id="234"><a href="#234">234</a></td></tr
><tr id="gr_svn445_235"

><td id="235"><a href="#235">235</a></td></tr
><tr id="gr_svn445_236"

><td id="236"><a href="#236">236</a></td></tr
><tr id="gr_svn445_237"

><td id="237"><a href="#237">237</a></td></tr
><tr id="gr_svn445_238"

><td id="238"><a href="#238">238</a></td></tr
><tr id="gr_svn445_239"

><td id="239"><a href="#239">239</a></td></tr
><tr id="gr_svn445_240"

><td id="240"><a href="#240">240</a></td></tr
><tr id="gr_svn445_241"

><td id="241"><a href="#241">241</a></td></tr
><tr id="gr_svn445_242"

><td id="242"><a href="#242">242</a></td></tr
><tr id="gr_svn445_243"

><td id="243"><a href="#243">243</a></td></tr
><tr id="gr_svn445_244"

><td id="244"><a href="#244">244</a></td></tr
><tr id="gr_svn445_245"

><td id="245"><a href="#245">245</a></td></tr
><tr id="gr_svn445_246"

><td id="246"><a href="#246">246</a></td></tr
><tr id="gr_svn445_247"

><td id="247"><a href="#247">247</a></td></tr
><tr id="gr_svn445_248"

><td id="248"><a href="#248">248</a></td></tr
><tr id="gr_svn445_249"

><td id="249"><a href="#249">249</a></td></tr
><tr id="gr_svn445_250"

><td id="250"><a href="#250">250</a></td></tr
><tr id="gr_svn445_251"

><td id="251"><a href="#251">251</a></td></tr
><tr id="gr_svn445_252"

><td id="252"><a href="#252">252</a></td></tr
><tr id="gr_svn445_253"

><td id="253"><a href="#253">253</a></td></tr
><tr id="gr_svn445_254"

><td id="254"><a href="#254">254</a></td></tr
><tr id="gr_svn445_255"

><td id="255"><a href="#255">255</a></td></tr
><tr id="gr_svn445_256"

><td id="256"><a href="#256">256</a></td></tr
><tr id="gr_svn445_257"

><td id="257"><a href="#257">257</a></td></tr
><tr id="gr_svn445_258"

><td id="258"><a href="#258">258</a></td></tr
><tr id="gr_svn445_259"

><td id="259"><a href="#259">259</a></td></tr
><tr id="gr_svn445_260"

><td id="260"><a href="#260">260</a></td></tr
><tr id="gr_svn445_261"

><td id="261"><a href="#261">261</a></td></tr
><tr id="gr_svn445_262"

><td id="262"><a href="#262">262</a></td></tr
><tr id="gr_svn445_263"

><td id="263"><a href="#263">263</a></td></tr
><tr id="gr_svn445_264"

><td id="264"><a href="#264">264</a></td></tr
><tr id="gr_svn445_265"

><td id="265"><a href="#265">265</a></td></tr
><tr id="gr_svn445_266"

><td id="266"><a href="#266">266</a></td></tr
><tr id="gr_svn445_267"

><td id="267"><a href="#267">267</a></td></tr
><tr id="gr_svn445_268"

><td id="268"><a href="#268">268</a></td></tr
><tr id="gr_svn445_269"

><td id="269"><a href="#269">269</a></td></tr
><tr id="gr_svn445_270"

><td id="270"><a href="#270">270</a></td></tr
><tr id="gr_svn445_271"

><td id="271"><a href="#271">271</a></td></tr
><tr id="gr_svn445_272"

><td id="272"><a href="#272">272</a></td></tr
><tr id="gr_svn445_273"

><td id="273"><a href="#273">273</a></td></tr
><tr id="gr_svn445_274"

><td id="274"><a href="#274">274</a></td></tr
><tr id="gr_svn445_275"

><td id="275"><a href="#275">275</a></td></tr
><tr id="gr_svn445_276"

><td id="276"><a href="#276">276</a></td></tr
><tr id="gr_svn445_277"

><td id="277"><a href="#277">277</a></td></tr
><tr id="gr_svn445_278"

><td id="278"><a href="#278">278</a></td></tr
><tr id="gr_svn445_279"

><td id="279"><a href="#279">279</a></td></tr
><tr id="gr_svn445_280"

><td id="280"><a href="#280">280</a></td></tr
><tr id="gr_svn445_281"

><td id="281"><a href="#281">281</a></td></tr
><tr id="gr_svn445_282"

><td id="282"><a href="#282">282</a></td></tr
><tr id="gr_svn445_283"

><td id="283"><a href="#283">283</a></td></tr
><tr id="gr_svn445_284"

><td id="284"><a href="#284">284</a></td></tr
><tr id="gr_svn445_285"

><td id="285"><a href="#285">285</a></td></tr
><tr id="gr_svn445_286"

><td id="286"><a href="#286">286</a></td></tr
><tr id="gr_svn445_287"

><td id="287"><a href="#287">287</a></td></tr
><tr id="gr_svn445_288"

><td id="288"><a href="#288">288</a></td></tr
><tr id="gr_svn445_289"

><td id="289"><a href="#289">289</a></td></tr
><tr id="gr_svn445_290"

><td id="290"><a href="#290">290</a></td></tr
><tr id="gr_svn445_291"

><td id="291"><a href="#291">291</a></td></tr
><tr id="gr_svn445_292"

><td id="292"><a href="#292">292</a></td></tr
><tr id="gr_svn445_293"

><td id="293"><a href="#293">293</a></td></tr
><tr id="gr_svn445_294"

><td id="294"><a href="#294">294</a></td></tr
><tr id="gr_svn445_295"

><td id="295"><a href="#295">295</a></td></tr
><tr id="gr_svn445_296"

><td id="296"><a href="#296">296</a></td></tr
><tr id="gr_svn445_297"

><td id="297"><a href="#297">297</a></td></tr
><tr id="gr_svn445_298"

><td id="298"><a href="#298">298</a></td></tr
><tr id="gr_svn445_299"

><td id="299"><a href="#299">299</a></td></tr
><tr id="gr_svn445_300"

><td id="300"><a href="#300">300</a></td></tr
><tr id="gr_svn445_301"

><td id="301"><a href="#301">301</a></td></tr
><tr id="gr_svn445_302"

><td id="302"><a href="#302">302</a></td></tr
><tr id="gr_svn445_303"

><td id="303"><a href="#303">303</a></td></tr
><tr id="gr_svn445_304"

><td id="304"><a href="#304">304</a></td></tr
><tr id="gr_svn445_305"

><td id="305"><a href="#305">305</a></td></tr
><tr id="gr_svn445_306"

><td id="306"><a href="#306">306</a></td></tr
><tr id="gr_svn445_307"

><td id="307"><a href="#307">307</a></td></tr
><tr id="gr_svn445_308"

><td id="308"><a href="#308">308</a></td></tr
><tr id="gr_svn445_309"

><td id="309"><a href="#309">309</a></td></tr
><tr id="gr_svn445_310"

><td id="310"><a href="#310">310</a></td></tr
><tr id="gr_svn445_311"

><td id="311"><a href="#311">311</a></td></tr
><tr id="gr_svn445_312"

><td id="312"><a href="#312">312</a></td></tr
><tr id="gr_svn445_313"

><td id="313"><a href="#313">313</a></td></tr
><tr id="gr_svn445_314"

><td id="314"><a href="#314">314</a></td></tr
><tr id="gr_svn445_315"

><td id="315"><a href="#315">315</a></td></tr
><tr id="gr_svn445_316"

><td id="316"><a href="#316">316</a></td></tr
><tr id="gr_svn445_317"

><td id="317"><a href="#317">317</a></td></tr
><tr id="gr_svn445_318"

><td id="318"><a href="#318">318</a></td></tr
><tr id="gr_svn445_319"

><td id="319"><a href="#319">319</a></td></tr
><tr id="gr_svn445_320"

><td id="320"><a href="#320">320</a></td></tr
><tr id="gr_svn445_321"

><td id="321"><a href="#321">321</a></td></tr
><tr id="gr_svn445_322"

><td id="322"><a href="#322">322</a></td></tr
><tr id="gr_svn445_323"

><td id="323"><a href="#323">323</a></td></tr
><tr id="gr_svn445_324"

><td id="324"><a href="#324">324</a></td></tr
><tr id="gr_svn445_325"

><td id="325"><a href="#325">325</a></td></tr
><tr id="gr_svn445_326"

><td id="326"><a href="#326">326</a></td></tr
><tr id="gr_svn445_327"

><td id="327"><a href="#327">327</a></td></tr
><tr id="gr_svn445_328"

><td id="328"><a href="#328">328</a></td></tr
><tr id="gr_svn445_329"

><td id="329"><a href="#329">329</a></td></tr
><tr id="gr_svn445_330"

><td id="330"><a href="#330">330</a></td></tr
><tr id="gr_svn445_331"

><td id="331"><a href="#331">331</a></td></tr
><tr id="gr_svn445_332"

><td id="332"><a href="#332">332</a></td></tr
><tr id="gr_svn445_333"

><td id="333"><a href="#333">333</a></td></tr
><tr id="gr_svn445_334"

><td id="334"><a href="#334">334</a></td></tr
><tr id="gr_svn445_335"

><td id="335"><a href="#335">335</a></td></tr
><tr id="gr_svn445_336"

><td id="336"><a href="#336">336</a></td></tr
><tr id="gr_svn445_337"

><td id="337"><a href="#337">337</a></td></tr
><tr id="gr_svn445_338"

><td id="338"><a href="#338">338</a></td></tr
><tr id="gr_svn445_339"

><td id="339"><a href="#339">339</a></td></tr
><tr id="gr_svn445_340"

><td id="340"><a href="#340">340</a></td></tr
><tr id="gr_svn445_341"

><td id="341"><a href="#341">341</a></td></tr
><tr id="gr_svn445_342"

><td id="342"><a href="#342">342</a></td></tr
><tr id="gr_svn445_343"

><td id="343"><a href="#343">343</a></td></tr
><tr id="gr_svn445_344"

><td id="344"><a href="#344">344</a></td></tr
><tr id="gr_svn445_345"

><td id="345"><a href="#345">345</a></td></tr
><tr id="gr_svn445_346"

><td id="346"><a href="#346">346</a></td></tr
><tr id="gr_svn445_347"

><td id="347"><a href="#347">347</a></td></tr
><tr id="gr_svn445_348"

><td id="348"><a href="#348">348</a></td></tr
><tr id="gr_svn445_349"

><td id="349"><a href="#349">349</a></td></tr
><tr id="gr_svn445_350"

><td id="350"><a href="#350">350</a></td></tr
><tr id="gr_svn445_351"

><td id="351"><a href="#351">351</a></td></tr
><tr id="gr_svn445_352"

><td id="352"><a href="#352">352</a></td></tr
><tr id="gr_svn445_353"

><td id="353"><a href="#353">353</a></td></tr
><tr id="gr_svn445_354"

><td id="354"><a href="#354">354</a></td></tr
><tr id="gr_svn445_355"

><td id="355"><a href="#355">355</a></td></tr
><tr id="gr_svn445_356"

><td id="356"><a href="#356">356</a></td></tr
><tr id="gr_svn445_357"

><td id="357"><a href="#357">357</a></td></tr
><tr id="gr_svn445_358"

><td id="358"><a href="#358">358</a></td></tr
><tr id="gr_svn445_359"

><td id="359"><a href="#359">359</a></td></tr
><tr id="gr_svn445_360"

><td id="360"><a href="#360">360</a></td></tr
><tr id="gr_svn445_361"

><td id="361"><a href="#361">361</a></td></tr
><tr id="gr_svn445_362"

><td id="362"><a href="#362">362</a></td></tr
><tr id="gr_svn445_363"

><td id="363"><a href="#363">363</a></td></tr
><tr id="gr_svn445_364"

><td id="364"><a href="#364">364</a></td></tr
><tr id="gr_svn445_365"

><td id="365"><a href="#365">365</a></td></tr
><tr id="gr_svn445_366"

><td id="366"><a href="#366">366</a></td></tr
><tr id="gr_svn445_367"

><td id="367"><a href="#367">367</a></td></tr
><tr id="gr_svn445_368"

><td id="368"><a href="#368">368</a></td></tr
><tr id="gr_svn445_369"

><td id="369"><a href="#369">369</a></td></tr
><tr id="gr_svn445_370"

><td id="370"><a href="#370">370</a></td></tr
><tr id="gr_svn445_371"

><td id="371"><a href="#371">371</a></td></tr
><tr id="gr_svn445_372"

><td id="372"><a href="#372">372</a></td></tr
><tr id="gr_svn445_373"

><td id="373"><a href="#373">373</a></td></tr
><tr id="gr_svn445_374"

><td id="374"><a href="#374">374</a></td></tr
><tr id="gr_svn445_375"

><td id="375"><a href="#375">375</a></td></tr
><tr id="gr_svn445_376"

><td id="376"><a href="#376">376</a></td></tr
><tr id="gr_svn445_377"

><td id="377"><a href="#377">377</a></td></tr
><tr id="gr_svn445_378"

><td id="378"><a href="#378">378</a></td></tr
><tr id="gr_svn445_379"

><td id="379"><a href="#379">379</a></td></tr
><tr id="gr_svn445_380"

><td id="380"><a href="#380">380</a></td></tr
><tr id="gr_svn445_381"

><td id="381"><a href="#381">381</a></td></tr
><tr id="gr_svn445_382"

><td id="382"><a href="#382">382</a></td></tr
><tr id="gr_svn445_383"

><td id="383"><a href="#383">383</a></td></tr
><tr id="gr_svn445_384"

><td id="384"><a href="#384">384</a></td></tr
><tr id="gr_svn445_385"

><td id="385"><a href="#385">385</a></td></tr
><tr id="gr_svn445_386"

><td id="386"><a href="#386">386</a></td></tr
><tr id="gr_svn445_387"

><td id="387"><a href="#387">387</a></td></tr
><tr id="gr_svn445_388"

><td id="388"><a href="#388">388</a></td></tr
><tr id="gr_svn445_389"

><td id="389"><a href="#389">389</a></td></tr
><tr id="gr_svn445_390"

><td id="390"><a href="#390">390</a></td></tr
><tr id="gr_svn445_391"

><td id="391"><a href="#391">391</a></td></tr
><tr id="gr_svn445_392"

><td id="392"><a href="#392">392</a></td></tr
><tr id="gr_svn445_393"

><td id="393"><a href="#393">393</a></td></tr
><tr id="gr_svn445_394"

><td id="394"><a href="#394">394</a></td></tr
><tr id="gr_svn445_395"

><td id="395"><a href="#395">395</a></td></tr
><tr id="gr_svn445_396"

><td id="396"><a href="#396">396</a></td></tr
><tr id="gr_svn445_397"

><td id="397"><a href="#397">397</a></td></tr
><tr id="gr_svn445_398"

><td id="398"><a href="#398">398</a></td></tr
><tr id="gr_svn445_399"

><td id="399"><a href="#399">399</a></td></tr
><tr id="gr_svn445_400"

><td id="400"><a href="#400">400</a></td></tr
><tr id="gr_svn445_401"

><td id="401"><a href="#401">401</a></td></tr
><tr id="gr_svn445_402"

><td id="402"><a href="#402">402</a></td></tr
><tr id="gr_svn445_403"

><td id="403"><a href="#403">403</a></td></tr
><tr id="gr_svn445_404"

><td id="404"><a href="#404">404</a></td></tr
><tr id="gr_svn445_405"

><td id="405"><a href="#405">405</a></td></tr
><tr id="gr_svn445_406"

><td id="406"><a href="#406">406</a></td></tr
><tr id="gr_svn445_407"

><td id="407"><a href="#407">407</a></td></tr
><tr id="gr_svn445_408"

><td id="408"><a href="#408">408</a></td></tr
><tr id="gr_svn445_409"

><td id="409"><a href="#409">409</a></td></tr
><tr id="gr_svn445_410"

><td id="410"><a href="#410">410</a></td></tr
><tr id="gr_svn445_411"

><td id="411"><a href="#411">411</a></td></tr
><tr id="gr_svn445_412"

><td id="412"><a href="#412">412</a></td></tr
><tr id="gr_svn445_413"

><td id="413"><a href="#413">413</a></td></tr
><tr id="gr_svn445_414"

><td id="414"><a href="#414">414</a></td></tr
><tr id="gr_svn445_415"

><td id="415"><a href="#415">415</a></td></tr
><tr id="gr_svn445_416"

><td id="416"><a href="#416">416</a></td></tr
><tr id="gr_svn445_417"

><td id="417"><a href="#417">417</a></td></tr
><tr id="gr_svn445_418"

><td id="418"><a href="#418">418</a></td></tr
><tr id="gr_svn445_419"

><td id="419"><a href="#419">419</a></td></tr
><tr id="gr_svn445_420"

><td id="420"><a href="#420">420</a></td></tr
><tr id="gr_svn445_421"

><td id="421"><a href="#421">421</a></td></tr
><tr id="gr_svn445_422"

><td id="422"><a href="#422">422</a></td></tr
><tr id="gr_svn445_423"

><td id="423"><a href="#423">423</a></td></tr
><tr id="gr_svn445_424"

><td id="424"><a href="#424">424</a></td></tr
><tr id="gr_svn445_425"

><td id="425"><a href="#425">425</a></td></tr
><tr id="gr_svn445_426"

><td id="426"><a href="#426">426</a></td></tr
><tr id="gr_svn445_427"

><td id="427"><a href="#427">427</a></td></tr
><tr id="gr_svn445_428"

><td id="428"><a href="#428">428</a></td></tr
><tr id="gr_svn445_429"

><td id="429"><a href="#429">429</a></td></tr
><tr id="gr_svn445_430"

><td id="430"><a href="#430">430</a></td></tr
><tr id="gr_svn445_431"

><td id="431"><a href="#431">431</a></td></tr
><tr id="gr_svn445_432"

><td id="432"><a href="#432">432</a></td></tr
><tr id="gr_svn445_433"

><td id="433"><a href="#433">433</a></td></tr
><tr id="gr_svn445_434"

><td id="434"><a href="#434">434</a></td></tr
><tr id="gr_svn445_435"

><td id="435"><a href="#435">435</a></td></tr
><tr id="gr_svn445_436"

><td id="436"><a href="#436">436</a></td></tr
><tr id="gr_svn445_437"

><td id="437"><a href="#437">437</a></td></tr
><tr id="gr_svn445_438"

><td id="438"><a href="#438">438</a></td></tr
><tr id="gr_svn445_439"

><td id="439"><a href="#439">439</a></td></tr
><tr id="gr_svn445_440"

><td id="440"><a href="#440">440</a></td></tr
><tr id="gr_svn445_441"

><td id="441"><a href="#441">441</a></td></tr
><tr id="gr_svn445_442"

><td id="442"><a href="#442">442</a></td></tr
><tr id="gr_svn445_443"

><td id="443"><a href="#443">443</a></td></tr
><tr id="gr_svn445_444"

><td id="444"><a href="#444">444</a></td></tr
><tr id="gr_svn445_445"

><td id="445"><a href="#445">445</a></td></tr
><tr id="gr_svn445_446"

><td id="446"><a href="#446">446</a></td></tr
><tr id="gr_svn445_447"

><td id="447"><a href="#447">447</a></td></tr
><tr id="gr_svn445_448"

><td id="448"><a href="#448">448</a></td></tr
><tr id="gr_svn445_449"

><td id="449"><a href="#449">449</a></td></tr
><tr id="gr_svn445_450"

><td id="450"><a href="#450">450</a></td></tr
><tr id="gr_svn445_451"

><td id="451"><a href="#451">451</a></td></tr
><tr id="gr_svn445_452"

><td id="452"><a href="#452">452</a></td></tr
><tr id="gr_svn445_453"

><td id="453"><a href="#453">453</a></td></tr
><tr id="gr_svn445_454"

><td id="454"><a href="#454">454</a></td></tr
><tr id="gr_svn445_455"

><td id="455"><a href="#455">455</a></td></tr
><tr id="gr_svn445_456"

><td id="456"><a href="#456">456</a></td></tr
><tr id="gr_svn445_457"

><td id="457"><a href="#457">457</a></td></tr
><tr id="gr_svn445_458"

><td id="458"><a href="#458">458</a></td></tr
><tr id="gr_svn445_459"

><td id="459"><a href="#459">459</a></td></tr
><tr id="gr_svn445_460"

><td id="460"><a href="#460">460</a></td></tr
><tr id="gr_svn445_461"

><td id="461"><a href="#461">461</a></td></tr
><tr id="gr_svn445_462"

><td id="462"><a href="#462">462</a></td></tr
><tr id="gr_svn445_463"

><td id="463"><a href="#463">463</a></td></tr
><tr id="gr_svn445_464"

><td id="464"><a href="#464">464</a></td></tr
><tr id="gr_svn445_465"

><td id="465"><a href="#465">465</a></td></tr
><tr id="gr_svn445_466"

><td id="466"><a href="#466">466</a></td></tr
><tr id="gr_svn445_467"

><td id="467"><a href="#467">467</a></td></tr
><tr id="gr_svn445_468"

><td id="468"><a href="#468">468</a></td></tr
><tr id="gr_svn445_469"

><td id="469"><a href="#469">469</a></td></tr
><tr id="gr_svn445_470"

><td id="470"><a href="#470">470</a></td></tr
><tr id="gr_svn445_471"

><td id="471"><a href="#471">471</a></td></tr
><tr id="gr_svn445_472"

><td id="472"><a href="#472">472</a></td></tr
><tr id="gr_svn445_473"

><td id="473"><a href="#473">473</a></td></tr
><tr id="gr_svn445_474"

><td id="474"><a href="#474">474</a></td></tr
><tr id="gr_svn445_475"

><td id="475"><a href="#475">475</a></td></tr
><tr id="gr_svn445_476"

><td id="476"><a href="#476">476</a></td></tr
><tr id="gr_svn445_477"

><td id="477"><a href="#477">477</a></td></tr
><tr id="gr_svn445_478"

><td id="478"><a href="#478">478</a></td></tr
><tr id="gr_svn445_479"

><td id="479"><a href="#479">479</a></td></tr
><tr id="gr_svn445_480"

><td id="480"><a href="#480">480</a></td></tr
><tr id="gr_svn445_481"

><td id="481"><a href="#481">481</a></td></tr
><tr id="gr_svn445_482"

><td id="482"><a href="#482">482</a></td></tr
><tr id="gr_svn445_483"

><td id="483"><a href="#483">483</a></td></tr
><tr id="gr_svn445_484"

><td id="484"><a href="#484">484</a></td></tr
><tr id="gr_svn445_485"

><td id="485"><a href="#485">485</a></td></tr
><tr id="gr_svn445_486"

><td id="486"><a href="#486">486</a></td></tr
><tr id="gr_svn445_487"

><td id="487"><a href="#487">487</a></td></tr
><tr id="gr_svn445_488"

><td id="488"><a href="#488">488</a></td></tr
><tr id="gr_svn445_489"

><td id="489"><a href="#489">489</a></td></tr
><tr id="gr_svn445_490"

><td id="490"><a href="#490">490</a></td></tr
><tr id="gr_svn445_491"

><td id="491"><a href="#491">491</a></td></tr
><tr id="gr_svn445_492"

><td id="492"><a href="#492">492</a></td></tr
><tr id="gr_svn445_493"

><td id="493"><a href="#493">493</a></td></tr
><tr id="gr_svn445_494"

><td id="494"><a href="#494">494</a></td></tr
><tr id="gr_svn445_495"

><td id="495"><a href="#495">495</a></td></tr
><tr id="gr_svn445_496"

><td id="496"><a href="#496">496</a></td></tr
><tr id="gr_svn445_497"

><td id="497"><a href="#497">497</a></td></tr
><tr id="gr_svn445_498"

><td id="498"><a href="#498">498</a></td></tr
><tr id="gr_svn445_499"

><td id="499"><a href="#499">499</a></td></tr
><tr id="gr_svn445_500"

><td id="500"><a href="#500">500</a></td></tr
><tr id="gr_svn445_501"

><td id="501"><a href="#501">501</a></td></tr
><tr id="gr_svn445_502"

><td id="502"><a href="#502">502</a></td></tr
><tr id="gr_svn445_503"

><td id="503"><a href="#503">503</a></td></tr
><tr id="gr_svn445_504"

><td id="504"><a href="#504">504</a></td></tr
><tr id="gr_svn445_505"

><td id="505"><a href="#505">505</a></td></tr
><tr id="gr_svn445_506"

><td id="506"><a href="#506">506</a></td></tr
><tr id="gr_svn445_507"

><td id="507"><a href="#507">507</a></td></tr
><tr id="gr_svn445_508"

><td id="508"><a href="#508">508</a></td></tr
><tr id="gr_svn445_509"

><td id="509"><a href="#509">509</a></td></tr
><tr id="gr_svn445_510"

><td id="510"><a href="#510">510</a></td></tr
><tr id="gr_svn445_511"

><td id="511"><a href="#511">511</a></td></tr
><tr id="gr_svn445_512"

><td id="512"><a href="#512">512</a></td></tr
><tr id="gr_svn445_513"

><td id="513"><a href="#513">513</a></td></tr
><tr id="gr_svn445_514"

><td id="514"><a href="#514">514</a></td></tr
><tr id="gr_svn445_515"

><td id="515"><a href="#515">515</a></td></tr
><tr id="gr_svn445_516"

><td id="516"><a href="#516">516</a></td></tr
><tr id="gr_svn445_517"

><td id="517"><a href="#517">517</a></td></tr
><tr id="gr_svn445_518"

><td id="518"><a href="#518">518</a></td></tr
><tr id="gr_svn445_519"

><td id="519"><a href="#519">519</a></td></tr
><tr id="gr_svn445_520"

><td id="520"><a href="#520">520</a></td></tr
><tr id="gr_svn445_521"

><td id="521"><a href="#521">521</a></td></tr
><tr id="gr_svn445_522"

><td id="522"><a href="#522">522</a></td></tr
><tr id="gr_svn445_523"

><td id="523"><a href="#523">523</a></td></tr
><tr id="gr_svn445_524"

><td id="524"><a href="#524">524</a></td></tr
><tr id="gr_svn445_525"

><td id="525"><a href="#525">525</a></td></tr
><tr id="gr_svn445_526"

><td id="526"><a href="#526">526</a></td></tr
><tr id="gr_svn445_527"

><td id="527"><a href="#527">527</a></td></tr
><tr id="gr_svn445_528"

><td id="528"><a href="#528">528</a></td></tr
><tr id="gr_svn445_529"

><td id="529"><a href="#529">529</a></td></tr
><tr id="gr_svn445_530"

><td id="530"><a href="#530">530</a></td></tr
><tr id="gr_svn445_531"

><td id="531"><a href="#531">531</a></td></tr
><tr id="gr_svn445_532"

><td id="532"><a href="#532">532</a></td></tr
><tr id="gr_svn445_533"

><td id="533"><a href="#533">533</a></td></tr
><tr id="gr_svn445_534"

><td id="534"><a href="#534">534</a></td></tr
><tr id="gr_svn445_535"

><td id="535"><a href="#535">535</a></td></tr
><tr id="gr_svn445_536"

><td id="536"><a href="#536">536</a></td></tr
><tr id="gr_svn445_537"

><td id="537"><a href="#537">537</a></td></tr
><tr id="gr_svn445_538"

><td id="538"><a href="#538">538</a></td></tr
><tr id="gr_svn445_539"

><td id="539"><a href="#539">539</a></td></tr
><tr id="gr_svn445_540"

><td id="540"><a href="#540">540</a></td></tr
><tr id="gr_svn445_541"

><td id="541"><a href="#541">541</a></td></tr
><tr id="gr_svn445_542"

><td id="542"><a href="#542">542</a></td></tr
><tr id="gr_svn445_543"

><td id="543"><a href="#543">543</a></td></tr
><tr id="gr_svn445_544"

><td id="544"><a href="#544">544</a></td></tr
><tr id="gr_svn445_545"

><td id="545"><a href="#545">545</a></td></tr
><tr id="gr_svn445_546"

><td id="546"><a href="#546">546</a></td></tr
><tr id="gr_svn445_547"

><td id="547"><a href="#547">547</a></td></tr
><tr id="gr_svn445_548"

><td id="548"><a href="#548">548</a></td></tr
><tr id="gr_svn445_549"

><td id="549"><a href="#549">549</a></td></tr
><tr id="gr_svn445_550"

><td id="550"><a href="#550">550</a></td></tr
><tr id="gr_svn445_551"

><td id="551"><a href="#551">551</a></td></tr
><tr id="gr_svn445_552"

><td id="552"><a href="#552">552</a></td></tr
><tr id="gr_svn445_553"

><td id="553"><a href="#553">553</a></td></tr
><tr id="gr_svn445_554"

><td id="554"><a href="#554">554</a></td></tr
><tr id="gr_svn445_555"

><td id="555"><a href="#555">555</a></td></tr
><tr id="gr_svn445_556"

><td id="556"><a href="#556">556</a></td></tr
><tr id="gr_svn445_557"

><td id="557"><a href="#557">557</a></td></tr
><tr id="gr_svn445_558"

><td id="558"><a href="#558">558</a></td></tr
><tr id="gr_svn445_559"

><td id="559"><a href="#559">559</a></td></tr
><tr id="gr_svn445_560"

><td id="560"><a href="#560">560</a></td></tr
><tr id="gr_svn445_561"

><td id="561"><a href="#561">561</a></td></tr
><tr id="gr_svn445_562"

><td id="562"><a href="#562">562</a></td></tr
><tr id="gr_svn445_563"

><td id="563"><a href="#563">563</a></td></tr
><tr id="gr_svn445_564"

><td id="564"><a href="#564">564</a></td></tr
><tr id="gr_svn445_565"

><td id="565"><a href="#565">565</a></td></tr
><tr id="gr_svn445_566"

><td id="566"><a href="#566">566</a></td></tr
><tr id="gr_svn445_567"

><td id="567"><a href="#567">567</a></td></tr
><tr id="gr_svn445_568"

><td id="568"><a href="#568">568</a></td></tr
><tr id="gr_svn445_569"

><td id="569"><a href="#569">569</a></td></tr
><tr id="gr_svn445_570"

><td id="570"><a href="#570">570</a></td></tr
><tr id="gr_svn445_571"

><td id="571"><a href="#571">571</a></td></tr
><tr id="gr_svn445_572"

><td id="572"><a href="#572">572</a></td></tr
><tr id="gr_svn445_573"

><td id="573"><a href="#573">573</a></td></tr
><tr id="gr_svn445_574"

><td id="574"><a href="#574">574</a></td></tr
><tr id="gr_svn445_575"

><td id="575"><a href="#575">575</a></td></tr
><tr id="gr_svn445_576"

><td id="576"><a href="#576">576</a></td></tr
><tr id="gr_svn445_577"

><td id="577"><a href="#577">577</a></td></tr
><tr id="gr_svn445_578"

><td id="578"><a href="#578">578</a></td></tr
><tr id="gr_svn445_579"

><td id="579"><a href="#579">579</a></td></tr
><tr id="gr_svn445_580"

><td id="580"><a href="#580">580</a></td></tr
><tr id="gr_svn445_581"

><td id="581"><a href="#581">581</a></td></tr
><tr id="gr_svn445_582"

><td id="582"><a href="#582">582</a></td></tr
><tr id="gr_svn445_583"

><td id="583"><a href="#583">583</a></td></tr
><tr id="gr_svn445_584"

><td id="584"><a href="#584">584</a></td></tr
><tr id="gr_svn445_585"

><td id="585"><a href="#585">585</a></td></tr
><tr id="gr_svn445_586"

><td id="586"><a href="#586">586</a></td></tr
><tr id="gr_svn445_587"

><td id="587"><a href="#587">587</a></td></tr
><tr id="gr_svn445_588"

><td id="588"><a href="#588">588</a></td></tr
><tr id="gr_svn445_589"

><td id="589"><a href="#589">589</a></td></tr
><tr id="gr_svn445_590"

><td id="590"><a href="#590">590</a></td></tr
><tr id="gr_svn445_591"

><td id="591"><a href="#591">591</a></td></tr
><tr id="gr_svn445_592"

><td id="592"><a href="#592">592</a></td></tr
><tr id="gr_svn445_593"

><td id="593"><a href="#593">593</a></td></tr
><tr id="gr_svn445_594"

><td id="594"><a href="#594">594</a></td></tr
><tr id="gr_svn445_595"

><td id="595"><a href="#595">595</a></td></tr
><tr id="gr_svn445_596"

><td id="596"><a href="#596">596</a></td></tr
><tr id="gr_svn445_597"

><td id="597"><a href="#597">597</a></td></tr
><tr id="gr_svn445_598"

><td id="598"><a href="#598">598</a></td></tr
><tr id="gr_svn445_599"

><td id="599"><a href="#599">599</a></td></tr
><tr id="gr_svn445_600"

><td id="600"><a href="#600">600</a></td></tr
><tr id="gr_svn445_601"

><td id="601"><a href="#601">601</a></td></tr
><tr id="gr_svn445_602"

><td id="602"><a href="#602">602</a></td></tr
><tr id="gr_svn445_603"

><td id="603"><a href="#603">603</a></td></tr
><tr id="gr_svn445_604"

><td id="604"><a href="#604">604</a></td></tr
><tr id="gr_svn445_605"

><td id="605"><a href="#605">605</a></td></tr
><tr id="gr_svn445_606"

><td id="606"><a href="#606">606</a></td></tr
><tr id="gr_svn445_607"

><td id="607"><a href="#607">607</a></td></tr
><tr id="gr_svn445_608"

><td id="608"><a href="#608">608</a></td></tr
><tr id="gr_svn445_609"

><td id="609"><a href="#609">609</a></td></tr
><tr id="gr_svn445_610"

><td id="610"><a href="#610">610</a></td></tr
><tr id="gr_svn445_611"

><td id="611"><a href="#611">611</a></td></tr
><tr id="gr_svn445_612"

><td id="612"><a href="#612">612</a></td></tr
><tr id="gr_svn445_613"

><td id="613"><a href="#613">613</a></td></tr
><tr id="gr_svn445_614"

><td id="614"><a href="#614">614</a></td></tr
><tr id="gr_svn445_615"

><td id="615"><a href="#615">615</a></td></tr
><tr id="gr_svn445_616"

><td id="616"><a href="#616">616</a></td></tr
><tr id="gr_svn445_617"

><td id="617"><a href="#617">617</a></td></tr
><tr id="gr_svn445_618"

><td id="618"><a href="#618">618</a></td></tr
><tr id="gr_svn445_619"

><td id="619"><a href="#619">619</a></td></tr
><tr id="gr_svn445_620"

><td id="620"><a href="#620">620</a></td></tr
><tr id="gr_svn445_621"

><td id="621"><a href="#621">621</a></td></tr
><tr id="gr_svn445_622"

><td id="622"><a href="#622">622</a></td></tr
><tr id="gr_svn445_623"

><td id="623"><a href="#623">623</a></td></tr
><tr id="gr_svn445_624"

><td id="624"><a href="#624">624</a></td></tr
><tr id="gr_svn445_625"

><td id="625"><a href="#625">625</a></td></tr
><tr id="gr_svn445_626"

><td id="626"><a href="#626">626</a></td></tr
><tr id="gr_svn445_627"

><td id="627"><a href="#627">627</a></td></tr
><tr id="gr_svn445_628"

><td id="628"><a href="#628">628</a></td></tr
><tr id="gr_svn445_629"

><td id="629"><a href="#629">629</a></td></tr
><tr id="gr_svn445_630"

><td id="630"><a href="#630">630</a></td></tr
><tr id="gr_svn445_631"

><td id="631"><a href="#631">631</a></td></tr
><tr id="gr_svn445_632"

><td id="632"><a href="#632">632</a></td></tr
><tr id="gr_svn445_633"

><td id="633"><a href="#633">633</a></td></tr
><tr id="gr_svn445_634"

><td id="634"><a href="#634">634</a></td></tr
><tr id="gr_svn445_635"

><td id="635"><a href="#635">635</a></td></tr
><tr id="gr_svn445_636"

><td id="636"><a href="#636">636</a></td></tr
><tr id="gr_svn445_637"

><td id="637"><a href="#637">637</a></td></tr
><tr id="gr_svn445_638"

><td id="638"><a href="#638">638</a></td></tr
><tr id="gr_svn445_639"

><td id="639"><a href="#639">639</a></td></tr
><tr id="gr_svn445_640"

><td id="640"><a href="#640">640</a></td></tr
><tr id="gr_svn445_641"

><td id="641"><a href="#641">641</a></td></tr
><tr id="gr_svn445_642"

><td id="642"><a href="#642">642</a></td></tr
><tr id="gr_svn445_643"

><td id="643"><a href="#643">643</a></td></tr
><tr id="gr_svn445_644"

><td id="644"><a href="#644">644</a></td></tr
><tr id="gr_svn445_645"

><td id="645"><a href="#645">645</a></td></tr
><tr id="gr_svn445_646"

><td id="646"><a href="#646">646</a></td></tr
><tr id="gr_svn445_647"

><td id="647"><a href="#647">647</a></td></tr
><tr id="gr_svn445_648"

><td id="648"><a href="#648">648</a></td></tr
><tr id="gr_svn445_649"

><td id="649"><a href="#649">649</a></td></tr
><tr id="gr_svn445_650"

><td id="650"><a href="#650">650</a></td></tr
><tr id="gr_svn445_651"

><td id="651"><a href="#651">651</a></td></tr
><tr id="gr_svn445_652"

><td id="652"><a href="#652">652</a></td></tr
><tr id="gr_svn445_653"

><td id="653"><a href="#653">653</a></td></tr
><tr id="gr_svn445_654"

><td id="654"><a href="#654">654</a></td></tr
><tr id="gr_svn445_655"

><td id="655"><a href="#655">655</a></td></tr
><tr id="gr_svn445_656"

><td id="656"><a href="#656">656</a></td></tr
><tr id="gr_svn445_657"

><td id="657"><a href="#657">657</a></td></tr
><tr id="gr_svn445_658"

><td id="658"><a href="#658">658</a></td></tr
><tr id="gr_svn445_659"

><td id="659"><a href="#659">659</a></td></tr
><tr id="gr_svn445_660"

><td id="660"><a href="#660">660</a></td></tr
><tr id="gr_svn445_661"

><td id="661"><a href="#661">661</a></td></tr
><tr id="gr_svn445_662"

><td id="662"><a href="#662">662</a></td></tr
><tr id="gr_svn445_663"

><td id="663"><a href="#663">663</a></td></tr
><tr id="gr_svn445_664"

><td id="664"><a href="#664">664</a></td></tr
><tr id="gr_svn445_665"

><td id="665"><a href="#665">665</a></td></tr
><tr id="gr_svn445_666"

><td id="666"><a href="#666">666</a></td></tr
><tr id="gr_svn445_667"

><td id="667"><a href="#667">667</a></td></tr
><tr id="gr_svn445_668"

><td id="668"><a href="#668">668</a></td></tr
><tr id="gr_svn445_669"

><td id="669"><a href="#669">669</a></td></tr
><tr id="gr_svn445_670"

><td id="670"><a href="#670">670</a></td></tr
><tr id="gr_svn445_671"

><td id="671"><a href="#671">671</a></td></tr
><tr id="gr_svn445_672"

><td id="672"><a href="#672">672</a></td></tr
><tr id="gr_svn445_673"

><td id="673"><a href="#673">673</a></td></tr
><tr id="gr_svn445_674"

><td id="674"><a href="#674">674</a></td></tr
><tr id="gr_svn445_675"

><td id="675"><a href="#675">675</a></td></tr
><tr id="gr_svn445_676"

><td id="676"><a href="#676">676</a></td></tr
><tr id="gr_svn445_677"

><td id="677"><a href="#677">677</a></td></tr
><tr id="gr_svn445_678"

><td id="678"><a href="#678">678</a></td></tr
><tr id="gr_svn445_679"

><td id="679"><a href="#679">679</a></td></tr
><tr id="gr_svn445_680"

><td id="680"><a href="#680">680</a></td></tr
><tr id="gr_svn445_681"

><td id="681"><a href="#681">681</a></td></tr
><tr id="gr_svn445_682"

><td id="682"><a href="#682">682</a></td></tr
><tr id="gr_svn445_683"

><td id="683"><a href="#683">683</a></td></tr
><tr id="gr_svn445_684"

><td id="684"><a href="#684">684</a></td></tr
><tr id="gr_svn445_685"

><td id="685"><a href="#685">685</a></td></tr
><tr id="gr_svn445_686"

><td id="686"><a href="#686">686</a></td></tr
><tr id="gr_svn445_687"

><td id="687"><a href="#687">687</a></td></tr
><tr id="gr_svn445_688"

><td id="688"><a href="#688">688</a></td></tr
><tr id="gr_svn445_689"

><td id="689"><a href="#689">689</a></td></tr
><tr id="gr_svn445_690"

><td id="690"><a href="#690">690</a></td></tr
><tr id="gr_svn445_691"

><td id="691"><a href="#691">691</a></td></tr
><tr id="gr_svn445_692"

><td id="692"><a href="#692">692</a></td></tr
><tr id="gr_svn445_693"

><td id="693"><a href="#693">693</a></td></tr
><tr id="gr_svn445_694"

><td id="694"><a href="#694">694</a></td></tr
><tr id="gr_svn445_695"

><td id="695"><a href="#695">695</a></td></tr
><tr id="gr_svn445_696"

><td id="696"><a href="#696">696</a></td></tr
><tr id="gr_svn445_697"

><td id="697"><a href="#697">697</a></td></tr
><tr id="gr_svn445_698"

><td id="698"><a href="#698">698</a></td></tr
><tr id="gr_svn445_699"

><td id="699"><a href="#699">699</a></td></tr
><tr id="gr_svn445_700"

><td id="700"><a href="#700">700</a></td></tr
><tr id="gr_svn445_701"

><td id="701"><a href="#701">701</a></td></tr
><tr id="gr_svn445_702"

><td id="702"><a href="#702">702</a></td></tr
><tr id="gr_svn445_703"

><td id="703"><a href="#703">703</a></td></tr
><tr id="gr_svn445_704"

><td id="704"><a href="#704">704</a></td></tr
><tr id="gr_svn445_705"

><td id="705"><a href="#705">705</a></td></tr
><tr id="gr_svn445_706"

><td id="706"><a href="#706">706</a></td></tr
><tr id="gr_svn445_707"

><td id="707"><a href="#707">707</a></td></tr
><tr id="gr_svn445_708"

><td id="708"><a href="#708">708</a></td></tr
><tr id="gr_svn445_709"

><td id="709"><a href="#709">709</a></td></tr
><tr id="gr_svn445_710"

><td id="710"><a href="#710">710</a></td></tr
><tr id="gr_svn445_711"

><td id="711"><a href="#711">711</a></td></tr
><tr id="gr_svn445_712"

><td id="712"><a href="#712">712</a></td></tr
><tr id="gr_svn445_713"

><td id="713"><a href="#713">713</a></td></tr
><tr id="gr_svn445_714"

><td id="714"><a href="#714">714</a></td></tr
><tr id="gr_svn445_715"

><td id="715"><a href="#715">715</a></td></tr
><tr id="gr_svn445_716"

><td id="716"><a href="#716">716</a></td></tr
><tr id="gr_svn445_717"

><td id="717"><a href="#717">717</a></td></tr
><tr id="gr_svn445_718"

><td id="718"><a href="#718">718</a></td></tr
><tr id="gr_svn445_719"

><td id="719"><a href="#719">719</a></td></tr
><tr id="gr_svn445_720"

><td id="720"><a href="#720">720</a></td></tr
><tr id="gr_svn445_721"

><td id="721"><a href="#721">721</a></td></tr
><tr id="gr_svn445_722"

><td id="722"><a href="#722">722</a></td></tr
><tr id="gr_svn445_723"

><td id="723"><a href="#723">723</a></td></tr
><tr id="gr_svn445_724"

><td id="724"><a href="#724">724</a></td></tr
><tr id="gr_svn445_725"

><td id="725"><a href="#725">725</a></td></tr
><tr id="gr_svn445_726"

><td id="726"><a href="#726">726</a></td></tr
><tr id="gr_svn445_727"

><td id="727"><a href="#727">727</a></td></tr
><tr id="gr_svn445_728"

><td id="728"><a href="#728">728</a></td></tr
><tr id="gr_svn445_729"

><td id="729"><a href="#729">729</a></td></tr
><tr id="gr_svn445_730"

><td id="730"><a href="#730">730</a></td></tr
><tr id="gr_svn445_731"

><td id="731"><a href="#731">731</a></td></tr
><tr id="gr_svn445_732"

><td id="732"><a href="#732">732</a></td></tr
><tr id="gr_svn445_733"

><td id="733"><a href="#733">733</a></td></tr
><tr id="gr_svn445_734"

><td id="734"><a href="#734">734</a></td></tr
><tr id="gr_svn445_735"

><td id="735"><a href="#735">735</a></td></tr
><tr id="gr_svn445_736"

><td id="736"><a href="#736">736</a></td></tr
><tr id="gr_svn445_737"

><td id="737"><a href="#737">737</a></td></tr
><tr id="gr_svn445_738"

><td id="738"><a href="#738">738</a></td></tr
><tr id="gr_svn445_739"

><td id="739"><a href="#739">739</a></td></tr
><tr id="gr_svn445_740"

><td id="740"><a href="#740">740</a></td></tr
><tr id="gr_svn445_741"

><td id="741"><a href="#741">741</a></td></tr
><tr id="gr_svn445_742"

><td id="742"><a href="#742">742</a></td></tr
><tr id="gr_svn445_743"

><td id="743"><a href="#743">743</a></td></tr
><tr id="gr_svn445_744"

><td id="744"><a href="#744">744</a></td></tr
><tr id="gr_svn445_745"

><td id="745"><a href="#745">745</a></td></tr
><tr id="gr_svn445_746"

><td id="746"><a href="#746">746</a></td></tr
><tr id="gr_svn445_747"

><td id="747"><a href="#747">747</a></td></tr
><tr id="gr_svn445_748"

><td id="748"><a href="#748">748</a></td></tr
><tr id="gr_svn445_749"

><td id="749"><a href="#749">749</a></td></tr
><tr id="gr_svn445_750"

><td id="750"><a href="#750">750</a></td></tr
><tr id="gr_svn445_751"

><td id="751"><a href="#751">751</a></td></tr
><tr id="gr_svn445_752"

><td id="752"><a href="#752">752</a></td></tr
><tr id="gr_svn445_753"

><td id="753"><a href="#753">753</a></td></tr
><tr id="gr_svn445_754"

><td id="754"><a href="#754">754</a></td></tr
><tr id="gr_svn445_755"

><td id="755"><a href="#755">755</a></td></tr
><tr id="gr_svn445_756"

><td id="756"><a href="#756">756</a></td></tr
><tr id="gr_svn445_757"

><td id="757"><a href="#757">757</a></td></tr
><tr id="gr_svn445_758"

><td id="758"><a href="#758">758</a></td></tr
><tr id="gr_svn445_759"

><td id="759"><a href="#759">759</a></td></tr
><tr id="gr_svn445_760"

><td id="760"><a href="#760">760</a></td></tr
><tr id="gr_svn445_761"

><td id="761"><a href="#761">761</a></td></tr
><tr id="gr_svn445_762"

><td id="762"><a href="#762">762</a></td></tr
><tr id="gr_svn445_763"

><td id="763"><a href="#763">763</a></td></tr
><tr id="gr_svn445_764"

><td id="764"><a href="#764">764</a></td></tr
><tr id="gr_svn445_765"

><td id="765"><a href="#765">765</a></td></tr
><tr id="gr_svn445_766"

><td id="766"><a href="#766">766</a></td></tr
><tr id="gr_svn445_767"

><td id="767"><a href="#767">767</a></td></tr
><tr id="gr_svn445_768"

><td id="768"><a href="#768">768</a></td></tr
><tr id="gr_svn445_769"

><td id="769"><a href="#769">769</a></td></tr
><tr id="gr_svn445_770"

><td id="770"><a href="#770">770</a></td></tr
><tr id="gr_svn445_771"

><td id="771"><a href="#771">771</a></td></tr
><tr id="gr_svn445_772"

><td id="772"><a href="#772">772</a></td></tr
><tr id="gr_svn445_773"

><td id="773"><a href="#773">773</a></td></tr
><tr id="gr_svn445_774"

><td id="774"><a href="#774">774</a></td></tr
><tr id="gr_svn445_775"

><td id="775"><a href="#775">775</a></td></tr
><tr id="gr_svn445_776"

><td id="776"><a href="#776">776</a></td></tr
><tr id="gr_svn445_777"

><td id="777"><a href="#777">777</a></td></tr
><tr id="gr_svn445_778"

><td id="778"><a href="#778">778</a></td></tr
><tr id="gr_svn445_779"

><td id="779"><a href="#779">779</a></td></tr
><tr id="gr_svn445_780"

><td id="780"><a href="#780">780</a></td></tr
><tr id="gr_svn445_781"

><td id="781"><a href="#781">781</a></td></tr
><tr id="gr_svn445_782"

><td id="782"><a href="#782">782</a></td></tr
><tr id="gr_svn445_783"

><td id="783"><a href="#783">783</a></td></tr
><tr id="gr_svn445_784"

><td id="784"><a href="#784">784</a></td></tr
><tr id="gr_svn445_785"

><td id="785"><a href="#785">785</a></td></tr
><tr id="gr_svn445_786"

><td id="786"><a href="#786">786</a></td></tr
><tr id="gr_svn445_787"

><td id="787"><a href="#787">787</a></td></tr
><tr id="gr_svn445_788"

><td id="788"><a href="#788">788</a></td></tr
><tr id="gr_svn445_789"

><td id="789"><a href="#789">789</a></td></tr
><tr id="gr_svn445_790"

><td id="790"><a href="#790">790</a></td></tr
><tr id="gr_svn445_791"

><td id="791"><a href="#791">791</a></td></tr
><tr id="gr_svn445_792"

><td id="792"><a href="#792">792</a></td></tr
><tr id="gr_svn445_793"

><td id="793"><a href="#793">793</a></td></tr
><tr id="gr_svn445_794"

><td id="794"><a href="#794">794</a></td></tr
><tr id="gr_svn445_795"

><td id="795"><a href="#795">795</a></td></tr
><tr id="gr_svn445_796"

><td id="796"><a href="#796">796</a></td></tr
><tr id="gr_svn445_797"

><td id="797"><a href="#797">797</a></td></tr
><tr id="gr_svn445_798"

><td id="798"><a href="#798">798</a></td></tr
><tr id="gr_svn445_799"

><td id="799"><a href="#799">799</a></td></tr
><tr id="gr_svn445_800"

><td id="800"><a href="#800">800</a></td></tr
><tr id="gr_svn445_801"

><td id="801"><a href="#801">801</a></td></tr
><tr id="gr_svn445_802"

><td id="802"><a href="#802">802</a></td></tr
><tr id="gr_svn445_803"

><td id="803"><a href="#803">803</a></td></tr
><tr id="gr_svn445_804"

><td id="804"><a href="#804">804</a></td></tr
><tr id="gr_svn445_805"

><td id="805"><a href="#805">805</a></td></tr
><tr id="gr_svn445_806"

><td id="806"><a href="#806">806</a></td></tr
><tr id="gr_svn445_807"

><td id="807"><a href="#807">807</a></td></tr
><tr id="gr_svn445_808"

><td id="808"><a href="#808">808</a></td></tr
><tr id="gr_svn445_809"

><td id="809"><a href="#809">809</a></td></tr
><tr id="gr_svn445_810"

><td id="810"><a href="#810">810</a></td></tr
><tr id="gr_svn445_811"

><td id="811"><a href="#811">811</a></td></tr
><tr id="gr_svn445_812"

><td id="812"><a href="#812">812</a></td></tr
><tr id="gr_svn445_813"

><td id="813"><a href="#813">813</a></td></tr
><tr id="gr_svn445_814"

><td id="814"><a href="#814">814</a></td></tr
><tr id="gr_svn445_815"

><td id="815"><a href="#815">815</a></td></tr
><tr id="gr_svn445_816"

><td id="816"><a href="#816">816</a></td></tr
><tr id="gr_svn445_817"

><td id="817"><a href="#817">817</a></td></tr
><tr id="gr_svn445_818"

><td id="818"><a href="#818">818</a></td></tr
><tr id="gr_svn445_819"

><td id="819"><a href="#819">819</a></td></tr
><tr id="gr_svn445_820"

><td id="820"><a href="#820">820</a></td></tr
><tr id="gr_svn445_821"

><td id="821"><a href="#821">821</a></td></tr
><tr id="gr_svn445_822"

><td id="822"><a href="#822">822</a></td></tr
><tr id="gr_svn445_823"

><td id="823"><a href="#823">823</a></td></tr
><tr id="gr_svn445_824"

><td id="824"><a href="#824">824</a></td></tr
><tr id="gr_svn445_825"

><td id="825"><a href="#825">825</a></td></tr
><tr id="gr_svn445_826"

><td id="826"><a href="#826">826</a></td></tr
><tr id="gr_svn445_827"

><td id="827"><a href="#827">827</a></td></tr
><tr id="gr_svn445_828"

><td id="828"><a href="#828">828</a></td></tr
><tr id="gr_svn445_829"

><td id="829"><a href="#829">829</a></td></tr
><tr id="gr_svn445_830"

><td id="830"><a href="#830">830</a></td></tr
><tr id="gr_svn445_831"

><td id="831"><a href="#831">831</a></td></tr
><tr id="gr_svn445_832"

><td id="832"><a href="#832">832</a></td></tr
><tr id="gr_svn445_833"

><td id="833"><a href="#833">833</a></td></tr
><tr id="gr_svn445_834"

><td id="834"><a href="#834">834</a></td></tr
><tr id="gr_svn445_835"

><td id="835"><a href="#835">835</a></td></tr
><tr id="gr_svn445_836"

><td id="836"><a href="#836">836</a></td></tr
><tr id="gr_svn445_837"

><td id="837"><a href="#837">837</a></td></tr
><tr id="gr_svn445_838"

><td id="838"><a href="#838">838</a></td></tr
><tr id="gr_svn445_839"

><td id="839"><a href="#839">839</a></td></tr
><tr id="gr_svn445_840"

><td id="840"><a href="#840">840</a></td></tr
><tr id="gr_svn445_841"

><td id="841"><a href="#841">841</a></td></tr
><tr id="gr_svn445_842"

><td id="842"><a href="#842">842</a></td></tr
><tr id="gr_svn445_843"

><td id="843"><a href="#843">843</a></td></tr
><tr id="gr_svn445_844"

><td id="844"><a href="#844">844</a></td></tr
><tr id="gr_svn445_845"

><td id="845"><a href="#845">845</a></td></tr
><tr id="gr_svn445_846"

><td id="846"><a href="#846">846</a></td></tr
><tr id="gr_svn445_847"

><td id="847"><a href="#847">847</a></td></tr
><tr id="gr_svn445_848"

><td id="848"><a href="#848">848</a></td></tr
><tr id="gr_svn445_849"

><td id="849"><a href="#849">849</a></td></tr
><tr id="gr_svn445_850"

><td id="850"><a href="#850">850</a></td></tr
><tr id="gr_svn445_851"

><td id="851"><a href="#851">851</a></td></tr
><tr id="gr_svn445_852"

><td id="852"><a href="#852">852</a></td></tr
><tr id="gr_svn445_853"

><td id="853"><a href="#853">853</a></td></tr
><tr id="gr_svn445_854"

><td id="854"><a href="#854">854</a></td></tr
><tr id="gr_svn445_855"

><td id="855"><a href="#855">855</a></td></tr
><tr id="gr_svn445_856"

><td id="856"><a href="#856">856</a></td></tr
><tr id="gr_svn445_857"

><td id="857"><a href="#857">857</a></td></tr
><tr id="gr_svn445_858"

><td id="858"><a href="#858">858</a></td></tr
><tr id="gr_svn445_859"

><td id="859"><a href="#859">859</a></td></tr
><tr id="gr_svn445_860"

><td id="860"><a href="#860">860</a></td></tr
><tr id="gr_svn445_861"

><td id="861"><a href="#861">861</a></td></tr
><tr id="gr_svn445_862"

><td id="862"><a href="#862">862</a></td></tr
><tr id="gr_svn445_863"

><td id="863"><a href="#863">863</a></td></tr
><tr id="gr_svn445_864"

><td id="864"><a href="#864">864</a></td></tr
><tr id="gr_svn445_865"

><td id="865"><a href="#865">865</a></td></tr
><tr id="gr_svn445_866"

><td id="866"><a href="#866">866</a></td></tr
><tr id="gr_svn445_867"

><td id="867"><a href="#867">867</a></td></tr
><tr id="gr_svn445_868"

><td id="868"><a href="#868">868</a></td></tr
><tr id="gr_svn445_869"

><td id="869"><a href="#869">869</a></td></tr
><tr id="gr_svn445_870"

><td id="870"><a href="#870">870</a></td></tr
><tr id="gr_svn445_871"

><td id="871"><a href="#871">871</a></td></tr
><tr id="gr_svn445_872"

><td id="872"><a href="#872">872</a></td></tr
><tr id="gr_svn445_873"

><td id="873"><a href="#873">873</a></td></tr
><tr id="gr_svn445_874"

><td id="874"><a href="#874">874</a></td></tr
><tr id="gr_svn445_875"

><td id="875"><a href="#875">875</a></td></tr
><tr id="gr_svn445_876"

><td id="876"><a href="#876">876</a></td></tr
><tr id="gr_svn445_877"

><td id="877"><a href="#877">877</a></td></tr
><tr id="gr_svn445_878"

><td id="878"><a href="#878">878</a></td></tr
><tr id="gr_svn445_879"

><td id="879"><a href="#879">879</a></td></tr
><tr id="gr_svn445_880"

><td id="880"><a href="#880">880</a></td></tr
><tr id="gr_svn445_881"

><td id="881"><a href="#881">881</a></td></tr
><tr id="gr_svn445_882"

><td id="882"><a href="#882">882</a></td></tr
><tr id="gr_svn445_883"

><td id="883"><a href="#883">883</a></td></tr
><tr id="gr_svn445_884"

><td id="884"><a href="#884">884</a></td></tr
><tr id="gr_svn445_885"

><td id="885"><a href="#885">885</a></td></tr
><tr id="gr_svn445_886"

><td id="886"><a href="#886">886</a></td></tr
><tr id="gr_svn445_887"

><td id="887"><a href="#887">887</a></td></tr
><tr id="gr_svn445_888"

><td id="888"><a href="#888">888</a></td></tr
><tr id="gr_svn445_889"

><td id="889"><a href="#889">889</a></td></tr
><tr id="gr_svn445_890"

><td id="890"><a href="#890">890</a></td></tr
><tr id="gr_svn445_891"

><td id="891"><a href="#891">891</a></td></tr
><tr id="gr_svn445_892"

><td id="892"><a href="#892">892</a></td></tr
><tr id="gr_svn445_893"

><td id="893"><a href="#893">893</a></td></tr
><tr id="gr_svn445_894"

><td id="894"><a href="#894">894</a></td></tr
><tr id="gr_svn445_895"

><td id="895"><a href="#895">895</a></td></tr
><tr id="gr_svn445_896"

><td id="896"><a href="#896">896</a></td></tr
><tr id="gr_svn445_897"

><td id="897"><a href="#897">897</a></td></tr
><tr id="gr_svn445_898"

><td id="898"><a href="#898">898</a></td></tr
><tr id="gr_svn445_899"

><td id="899"><a href="#899">899</a></td></tr
><tr id="gr_svn445_900"

><td id="900"><a href="#900">900</a></td></tr
><tr id="gr_svn445_901"

><td id="901"><a href="#901">901</a></td></tr
><tr id="gr_svn445_902"

><td id="902"><a href="#902">902</a></td></tr
><tr id="gr_svn445_903"

><td id="903"><a href="#903">903</a></td></tr
><tr id="gr_svn445_904"

><td id="904"><a href="#904">904</a></td></tr
><tr id="gr_svn445_905"

><td id="905"><a href="#905">905</a></td></tr
><tr id="gr_svn445_906"

><td id="906"><a href="#906">906</a></td></tr
><tr id="gr_svn445_907"

><td id="907"><a href="#907">907</a></td></tr
><tr id="gr_svn445_908"

><td id="908"><a href="#908">908</a></td></tr
><tr id="gr_svn445_909"

><td id="909"><a href="#909">909</a></td></tr
><tr id="gr_svn445_910"

><td id="910"><a href="#910">910</a></td></tr
><tr id="gr_svn445_911"

><td id="911"><a href="#911">911</a></td></tr
><tr id="gr_svn445_912"

><td id="912"><a href="#912">912</a></td></tr
><tr id="gr_svn445_913"

><td id="913"><a href="#913">913</a></td></tr
><tr id="gr_svn445_914"

><td id="914"><a href="#914">914</a></td></tr
><tr id="gr_svn445_915"

><td id="915"><a href="#915">915</a></td></tr
><tr id="gr_svn445_916"

><td id="916"><a href="#916">916</a></td></tr
><tr id="gr_svn445_917"

><td id="917"><a href="#917">917</a></td></tr
><tr id="gr_svn445_918"

><td id="918"><a href="#918">918</a></td></tr
><tr id="gr_svn445_919"

><td id="919"><a href="#919">919</a></td></tr
><tr id="gr_svn445_920"

><td id="920"><a href="#920">920</a></td></tr
><tr id="gr_svn445_921"

><td id="921"><a href="#921">921</a></td></tr
><tr id="gr_svn445_922"

><td id="922"><a href="#922">922</a></td></tr
><tr id="gr_svn445_923"

><td id="923"><a href="#923">923</a></td></tr
><tr id="gr_svn445_924"

><td id="924"><a href="#924">924</a></td></tr
><tr id="gr_svn445_925"

><td id="925"><a href="#925">925</a></td></tr
><tr id="gr_svn445_926"

><td id="926"><a href="#926">926</a></td></tr
><tr id="gr_svn445_927"

><td id="927"><a href="#927">927</a></td></tr
><tr id="gr_svn445_928"

><td id="928"><a href="#928">928</a></td></tr
><tr id="gr_svn445_929"

><td id="929"><a href="#929">929</a></td></tr
><tr id="gr_svn445_930"

><td id="930"><a href="#930">930</a></td></tr
><tr id="gr_svn445_931"

><td id="931"><a href="#931">931</a></td></tr
><tr id="gr_svn445_932"

><td id="932"><a href="#932">932</a></td></tr
><tr id="gr_svn445_933"

><td id="933"><a href="#933">933</a></td></tr
><tr id="gr_svn445_934"

><td id="934"><a href="#934">934</a></td></tr
><tr id="gr_svn445_935"

><td id="935"><a href="#935">935</a></td></tr
><tr id="gr_svn445_936"

><td id="936"><a href="#936">936</a></td></tr
><tr id="gr_svn445_937"

><td id="937"><a href="#937">937</a></td></tr
><tr id="gr_svn445_938"

><td id="938"><a href="#938">938</a></td></tr
><tr id="gr_svn445_939"

><td id="939"><a href="#939">939</a></td></tr
><tr id="gr_svn445_940"

><td id="940"><a href="#940">940</a></td></tr
><tr id="gr_svn445_941"

><td id="941"><a href="#941">941</a></td></tr
><tr id="gr_svn445_942"

><td id="942"><a href="#942">942</a></td></tr
><tr id="gr_svn445_943"

><td id="943"><a href="#943">943</a></td></tr
><tr id="gr_svn445_944"

><td id="944"><a href="#944">944</a></td></tr
><tr id="gr_svn445_945"

><td id="945"><a href="#945">945</a></td></tr
><tr id="gr_svn445_946"

><td id="946"><a href="#946">946</a></td></tr
><tr id="gr_svn445_947"

><td id="947"><a href="#947">947</a></td></tr
><tr id="gr_svn445_948"

><td id="948"><a href="#948">948</a></td></tr
><tr id="gr_svn445_949"

><td id="949"><a href="#949">949</a></td></tr
><tr id="gr_svn445_950"

><td id="950"><a href="#950">950</a></td></tr
><tr id="gr_svn445_951"

><td id="951"><a href="#951">951</a></td></tr
><tr id="gr_svn445_952"

><td id="952"><a href="#952">952</a></td></tr
><tr id="gr_svn445_953"

><td id="953"><a href="#953">953</a></td></tr
><tr id="gr_svn445_954"

><td id="954"><a href="#954">954</a></td></tr
><tr id="gr_svn445_955"

><td id="955"><a href="#955">955</a></td></tr
><tr id="gr_svn445_956"

><td id="956"><a href="#956">956</a></td></tr
><tr id="gr_svn445_957"

><td id="957"><a href="#957">957</a></td></tr
><tr id="gr_svn445_958"

><td id="958"><a href="#958">958</a></td></tr
><tr id="gr_svn445_959"

><td id="959"><a href="#959">959</a></td></tr
><tr id="gr_svn445_960"

><td id="960"><a href="#960">960</a></td></tr
><tr id="gr_svn445_961"

><td id="961"><a href="#961">961</a></td></tr
><tr id="gr_svn445_962"

><td id="962"><a href="#962">962</a></td></tr
><tr id="gr_svn445_963"

><td id="963"><a href="#963">963</a></td></tr
><tr id="gr_svn445_964"

><td id="964"><a href="#964">964</a></td></tr
><tr id="gr_svn445_965"

><td id="965"><a href="#965">965</a></td></tr
><tr id="gr_svn445_966"

><td id="966"><a href="#966">966</a></td></tr
><tr id="gr_svn445_967"

><td id="967"><a href="#967">967</a></td></tr
><tr id="gr_svn445_968"

><td id="968"><a href="#968">968</a></td></tr
><tr id="gr_svn445_969"

><td id="969"><a href="#969">969</a></td></tr
><tr id="gr_svn445_970"

><td id="970"><a href="#970">970</a></td></tr
><tr id="gr_svn445_971"

><td id="971"><a href="#971">971</a></td></tr
><tr id="gr_svn445_972"

><td id="972"><a href="#972">972</a></td></tr
><tr id="gr_svn445_973"

><td id="973"><a href="#973">973</a></td></tr
><tr id="gr_svn445_974"

><td id="974"><a href="#974">974</a></td></tr
><tr id="gr_svn445_975"

><td id="975"><a href="#975">975</a></td></tr
><tr id="gr_svn445_976"

><td id="976"><a href="#976">976</a></td></tr
><tr id="gr_svn445_977"

><td id="977"><a href="#977">977</a></td></tr
><tr id="gr_svn445_978"

><td id="978"><a href="#978">978</a></td></tr
><tr id="gr_svn445_979"

><td id="979"><a href="#979">979</a></td></tr
><tr id="gr_svn445_980"

><td id="980"><a href="#980">980</a></td></tr
><tr id="gr_svn445_981"

><td id="981"><a href="#981">981</a></td></tr
><tr id="gr_svn445_982"

><td id="982"><a href="#982">982</a></td></tr
><tr id="gr_svn445_983"

><td id="983"><a href="#983">983</a></td></tr
><tr id="gr_svn445_984"

><td id="984"><a href="#984">984</a></td></tr
><tr id="gr_svn445_985"

><td id="985"><a href="#985">985</a></td></tr
><tr id="gr_svn445_986"

><td id="986"><a href="#986">986</a></td></tr
><tr id="gr_svn445_987"

><td id="987"><a href="#987">987</a></td></tr
><tr id="gr_svn445_988"

><td id="988"><a href="#988">988</a></td></tr
><tr id="gr_svn445_989"

><td id="989"><a href="#989">989</a></td></tr
><tr id="gr_svn445_990"

><td id="990"><a href="#990">990</a></td></tr
><tr id="gr_svn445_991"

><td id="991"><a href="#991">991</a></td></tr
><tr id="gr_svn445_992"

><td id="992"><a href="#992">992</a></td></tr
><tr id="gr_svn445_993"

><td id="993"><a href="#993">993</a></td></tr
><tr id="gr_svn445_994"

><td id="994"><a href="#994">994</a></td></tr
><tr id="gr_svn445_995"

><td id="995"><a href="#995">995</a></td></tr
><tr id="gr_svn445_996"

><td id="996"><a href="#996">996</a></td></tr
><tr id="gr_svn445_997"

><td id="997"><a href="#997">997</a></td></tr
><tr id="gr_svn445_998"

><td id="998"><a href="#998">998</a></td></tr
><tr id="gr_svn445_999"

><td id="999"><a href="#999">999</a></td></tr
><tr id="gr_svn445_1000"

><td id="1000"><a href="#1000">1000</a></td></tr
><tr id="gr_svn445_1001"

><td id="1001"><a href="#1001">1001</a></td></tr
><tr id="gr_svn445_1002"

><td id="1002"><a href="#1002">1002</a></td></tr
><tr id="gr_svn445_1003"

><td id="1003"><a href="#1003">1003</a></td></tr
><tr id="gr_svn445_1004"

><td id="1004"><a href="#1004">1004</a></td></tr
><tr id="gr_svn445_1005"

><td id="1005"><a href="#1005">1005</a></td></tr
><tr id="gr_svn445_1006"

><td id="1006"><a href="#1006">1006</a></td></tr
><tr id="gr_svn445_1007"

><td id="1007"><a href="#1007">1007</a></td></tr
><tr id="gr_svn445_1008"

><td id="1008"><a href="#1008">1008</a></td></tr
><tr id="gr_svn445_1009"

><td id="1009"><a href="#1009">1009</a></td></tr
><tr id="gr_svn445_1010"

><td id="1010"><a href="#1010">1010</a></td></tr
><tr id="gr_svn445_1011"

><td id="1011"><a href="#1011">1011</a></td></tr
><tr id="gr_svn445_1012"

><td id="1012"><a href="#1012">1012</a></td></tr
><tr id="gr_svn445_1013"

><td id="1013"><a href="#1013">1013</a></td></tr
><tr id="gr_svn445_1014"

><td id="1014"><a href="#1014">1014</a></td></tr
><tr id="gr_svn445_1015"

><td id="1015"><a href="#1015">1015</a></td></tr
><tr id="gr_svn445_1016"

><td id="1016"><a href="#1016">1016</a></td></tr
><tr id="gr_svn445_1017"

><td id="1017"><a href="#1017">1017</a></td></tr
><tr id="gr_svn445_1018"

><td id="1018"><a href="#1018">1018</a></td></tr
><tr id="gr_svn445_1019"

><td id="1019"><a href="#1019">1019</a></td></tr
><tr id="gr_svn445_1020"

><td id="1020"><a href="#1020">1020</a></td></tr
><tr id="gr_svn445_1021"

><td id="1021"><a href="#1021">1021</a></td></tr
><tr id="gr_svn445_1022"

><td id="1022"><a href="#1022">1022</a></td></tr
><tr id="gr_svn445_1023"

><td id="1023"><a href="#1023">1023</a></td></tr
><tr id="gr_svn445_1024"

><td id="1024"><a href="#1024">1024</a></td></tr
><tr id="gr_svn445_1025"

><td id="1025"><a href="#1025">1025</a></td></tr
><tr id="gr_svn445_1026"

><td id="1026"><a href="#1026">1026</a></td></tr
><tr id="gr_svn445_1027"

><td id="1027"><a href="#1027">1027</a></td></tr
><tr id="gr_svn445_1028"

><td id="1028"><a href="#1028">1028</a></td></tr
><tr id="gr_svn445_1029"

><td id="1029"><a href="#1029">1029</a></td></tr
><tr id="gr_svn445_1030"

><td id="1030"><a href="#1030">1030</a></td></tr
><tr id="gr_svn445_1031"

><td id="1031"><a href="#1031">1031</a></td></tr
><tr id="gr_svn445_1032"

><td id="1032"><a href="#1032">1032</a></td></tr
><tr id="gr_svn445_1033"

><td id="1033"><a href="#1033">1033</a></td></tr
><tr id="gr_svn445_1034"

><td id="1034"><a href="#1034">1034</a></td></tr
><tr id="gr_svn445_1035"

><td id="1035"><a href="#1035">1035</a></td></tr
><tr id="gr_svn445_1036"

><td id="1036"><a href="#1036">1036</a></td></tr
><tr id="gr_svn445_1037"

><td id="1037"><a href="#1037">1037</a></td></tr
><tr id="gr_svn445_1038"

><td id="1038"><a href="#1038">1038</a></td></tr
><tr id="gr_svn445_1039"

><td id="1039"><a href="#1039">1039</a></td></tr
><tr id="gr_svn445_1040"

><td id="1040"><a href="#1040">1040</a></td></tr
><tr id="gr_svn445_1041"

><td id="1041"><a href="#1041">1041</a></td></tr
><tr id="gr_svn445_1042"

><td id="1042"><a href="#1042">1042</a></td></tr
><tr id="gr_svn445_1043"

><td id="1043"><a href="#1043">1043</a></td></tr
><tr id="gr_svn445_1044"

><td id="1044"><a href="#1044">1044</a></td></tr
><tr id="gr_svn445_1045"

><td id="1045"><a href="#1045">1045</a></td></tr
><tr id="gr_svn445_1046"

><td id="1046"><a href="#1046">1046</a></td></tr
><tr id="gr_svn445_1047"

><td id="1047"><a href="#1047">1047</a></td></tr
><tr id="gr_svn445_1048"

><td id="1048"><a href="#1048">1048</a></td></tr
><tr id="gr_svn445_1049"

><td id="1049"><a href="#1049">1049</a></td></tr
><tr id="gr_svn445_1050"

><td id="1050"><a href="#1050">1050</a></td></tr
><tr id="gr_svn445_1051"

><td id="1051"><a href="#1051">1051</a></td></tr
><tr id="gr_svn445_1052"

><td id="1052"><a href="#1052">1052</a></td></tr
><tr id="gr_svn445_1053"

><td id="1053"><a href="#1053">1053</a></td></tr
><tr id="gr_svn445_1054"

><td id="1054"><a href="#1054">1054</a></td></tr
><tr id="gr_svn445_1055"

><td id="1055"><a href="#1055">1055</a></td></tr
><tr id="gr_svn445_1056"

><td id="1056"><a href="#1056">1056</a></td></tr
><tr id="gr_svn445_1057"

><td id="1057"><a href="#1057">1057</a></td></tr
><tr id="gr_svn445_1058"

><td id="1058"><a href="#1058">1058</a></td></tr
><tr id="gr_svn445_1059"

><td id="1059"><a href="#1059">1059</a></td></tr
><tr id="gr_svn445_1060"

><td id="1060"><a href="#1060">1060</a></td></tr
><tr id="gr_svn445_1061"

><td id="1061"><a href="#1061">1061</a></td></tr
><tr id="gr_svn445_1062"

><td id="1062"><a href="#1062">1062</a></td></tr
><tr id="gr_svn445_1063"

><td id="1063"><a href="#1063">1063</a></td></tr
><tr id="gr_svn445_1064"

><td id="1064"><a href="#1064">1064</a></td></tr
><tr id="gr_svn445_1065"

><td id="1065"><a href="#1065">1065</a></td></tr
><tr id="gr_svn445_1066"

><td id="1066"><a href="#1066">1066</a></td></tr
><tr id="gr_svn445_1067"

><td id="1067"><a href="#1067">1067</a></td></tr
><tr id="gr_svn445_1068"

><td id="1068"><a href="#1068">1068</a></td></tr
><tr id="gr_svn445_1069"

><td id="1069"><a href="#1069">1069</a></td></tr
><tr id="gr_svn445_1070"

><td id="1070"><a href="#1070">1070</a></td></tr
><tr id="gr_svn445_1071"

><td id="1071"><a href="#1071">1071</a></td></tr
><tr id="gr_svn445_1072"

><td id="1072"><a href="#1072">1072</a></td></tr
><tr id="gr_svn445_1073"

><td id="1073"><a href="#1073">1073</a></td></tr
><tr id="gr_svn445_1074"

><td id="1074"><a href="#1074">1074</a></td></tr
><tr id="gr_svn445_1075"

><td id="1075"><a href="#1075">1075</a></td></tr
><tr id="gr_svn445_1076"

><td id="1076"><a href="#1076">1076</a></td></tr
><tr id="gr_svn445_1077"

><td id="1077"><a href="#1077">1077</a></td></tr
><tr id="gr_svn445_1078"

><td id="1078"><a href="#1078">1078</a></td></tr
><tr id="gr_svn445_1079"

><td id="1079"><a href="#1079">1079</a></td></tr
><tr id="gr_svn445_1080"

><td id="1080"><a href="#1080">1080</a></td></tr
><tr id="gr_svn445_1081"

><td id="1081"><a href="#1081">1081</a></td></tr
><tr id="gr_svn445_1082"

><td id="1082"><a href="#1082">1082</a></td></tr
><tr id="gr_svn445_1083"

><td id="1083"><a href="#1083">1083</a></td></tr
><tr id="gr_svn445_1084"

><td id="1084"><a href="#1084">1084</a></td></tr
><tr id="gr_svn445_1085"

><td id="1085"><a href="#1085">1085</a></td></tr
><tr id="gr_svn445_1086"

><td id="1086"><a href="#1086">1086</a></td></tr
><tr id="gr_svn445_1087"

><td id="1087"><a href="#1087">1087</a></td></tr
><tr id="gr_svn445_1088"

><td id="1088"><a href="#1088">1088</a></td></tr
><tr id="gr_svn445_1089"

><td id="1089"><a href="#1089">1089</a></td></tr
><tr id="gr_svn445_1090"

><td id="1090"><a href="#1090">1090</a></td></tr
><tr id="gr_svn445_1091"

><td id="1091"><a href="#1091">1091</a></td></tr
><tr id="gr_svn445_1092"

><td id="1092"><a href="#1092">1092</a></td></tr
><tr id="gr_svn445_1093"

><td id="1093"><a href="#1093">1093</a></td></tr
><tr id="gr_svn445_1094"

><td id="1094"><a href="#1094">1094</a></td></tr
><tr id="gr_svn445_1095"

><td id="1095"><a href="#1095">1095</a></td></tr
><tr id="gr_svn445_1096"

><td id="1096"><a href="#1096">1096</a></td></tr
><tr id="gr_svn445_1097"

><td id="1097"><a href="#1097">1097</a></td></tr
><tr id="gr_svn445_1098"

><td id="1098"><a href="#1098">1098</a></td></tr
><tr id="gr_svn445_1099"

><td id="1099"><a href="#1099">1099</a></td></tr
><tr id="gr_svn445_1100"

><td id="1100"><a href="#1100">1100</a></td></tr
><tr id="gr_svn445_1101"

><td id="1101"><a href="#1101">1101</a></td></tr
><tr id="gr_svn445_1102"

><td id="1102"><a href="#1102">1102</a></td></tr
><tr id="gr_svn445_1103"

><td id="1103"><a href="#1103">1103</a></td></tr
><tr id="gr_svn445_1104"

><td id="1104"><a href="#1104">1104</a></td></tr
><tr id="gr_svn445_1105"

><td id="1105"><a href="#1105">1105</a></td></tr
><tr id="gr_svn445_1106"

><td id="1106"><a href="#1106">1106</a></td></tr
><tr id="gr_svn445_1107"

><td id="1107"><a href="#1107">1107</a></td></tr
><tr id="gr_svn445_1108"

><td id="1108"><a href="#1108">1108</a></td></tr
><tr id="gr_svn445_1109"

><td id="1109"><a href="#1109">1109</a></td></tr
><tr id="gr_svn445_1110"

><td id="1110"><a href="#1110">1110</a></td></tr
><tr id="gr_svn445_1111"

><td id="1111"><a href="#1111">1111</a></td></tr
><tr id="gr_svn445_1112"

><td id="1112"><a href="#1112">1112</a></td></tr
><tr id="gr_svn445_1113"

><td id="1113"><a href="#1113">1113</a></td></tr
><tr id="gr_svn445_1114"

><td id="1114"><a href="#1114">1114</a></td></tr
><tr id="gr_svn445_1115"

><td id="1115"><a href="#1115">1115</a></td></tr
><tr id="gr_svn445_1116"

><td id="1116"><a href="#1116">1116</a></td></tr
><tr id="gr_svn445_1117"

><td id="1117"><a href="#1117">1117</a></td></tr
><tr id="gr_svn445_1118"

><td id="1118"><a href="#1118">1118</a></td></tr
><tr id="gr_svn445_1119"

><td id="1119"><a href="#1119">1119</a></td></tr
><tr id="gr_svn445_1120"

><td id="1120"><a href="#1120">1120</a></td></tr
><tr id="gr_svn445_1121"

><td id="1121"><a href="#1121">1121</a></td></tr
><tr id="gr_svn445_1122"

><td id="1122"><a href="#1122">1122</a></td></tr
><tr id="gr_svn445_1123"

><td id="1123"><a href="#1123">1123</a></td></tr
><tr id="gr_svn445_1124"

><td id="1124"><a href="#1124">1124</a></td></tr
><tr id="gr_svn445_1125"

><td id="1125"><a href="#1125">1125</a></td></tr
><tr id="gr_svn445_1126"

><td id="1126"><a href="#1126">1126</a></td></tr
><tr id="gr_svn445_1127"

><td id="1127"><a href="#1127">1127</a></td></tr
><tr id="gr_svn445_1128"

><td id="1128"><a href="#1128">1128</a></td></tr
><tr id="gr_svn445_1129"

><td id="1129"><a href="#1129">1129</a></td></tr
><tr id="gr_svn445_1130"

><td id="1130"><a href="#1130">1130</a></td></tr
><tr id="gr_svn445_1131"

><td id="1131"><a href="#1131">1131</a></td></tr
><tr id="gr_svn445_1132"

><td id="1132"><a href="#1132">1132</a></td></tr
><tr id="gr_svn445_1133"

><td id="1133"><a href="#1133">1133</a></td></tr
><tr id="gr_svn445_1134"

><td id="1134"><a href="#1134">1134</a></td></tr
><tr id="gr_svn445_1135"

><td id="1135"><a href="#1135">1135</a></td></tr
><tr id="gr_svn445_1136"

><td id="1136"><a href="#1136">1136</a></td></tr
><tr id="gr_svn445_1137"

><td id="1137"><a href="#1137">1137</a></td></tr
><tr id="gr_svn445_1138"

><td id="1138"><a href="#1138">1138</a></td></tr
><tr id="gr_svn445_1139"

><td id="1139"><a href="#1139">1139</a></td></tr
><tr id="gr_svn445_1140"

><td id="1140"><a href="#1140">1140</a></td></tr
><tr id="gr_svn445_1141"

><td id="1141"><a href="#1141">1141</a></td></tr
><tr id="gr_svn445_1142"

><td id="1142"><a href="#1142">1142</a></td></tr
><tr id="gr_svn445_1143"

><td id="1143"><a href="#1143">1143</a></td></tr
><tr id="gr_svn445_1144"

><td id="1144"><a href="#1144">1144</a></td></tr
><tr id="gr_svn445_1145"

><td id="1145"><a href="#1145">1145</a></td></tr
><tr id="gr_svn445_1146"

><td id="1146"><a href="#1146">1146</a></td></tr
><tr id="gr_svn445_1147"

><td id="1147"><a href="#1147">1147</a></td></tr
><tr id="gr_svn445_1148"

><td id="1148"><a href="#1148">1148</a></td></tr
><tr id="gr_svn445_1149"

><td id="1149"><a href="#1149">1149</a></td></tr
><tr id="gr_svn445_1150"

><td id="1150"><a href="#1150">1150</a></td></tr
><tr id="gr_svn445_1151"

><td id="1151"><a href="#1151">1151</a></td></tr
><tr id="gr_svn445_1152"

><td id="1152"><a href="#1152">1152</a></td></tr
><tr id="gr_svn445_1153"

><td id="1153"><a href="#1153">1153</a></td></tr
><tr id="gr_svn445_1154"

><td id="1154"><a href="#1154">1154</a></td></tr
><tr id="gr_svn445_1155"

><td id="1155"><a href="#1155">1155</a></td></tr
><tr id="gr_svn445_1156"

><td id="1156"><a href="#1156">1156</a></td></tr
><tr id="gr_svn445_1157"

><td id="1157"><a href="#1157">1157</a></td></tr
><tr id="gr_svn445_1158"

><td id="1158"><a href="#1158">1158</a></td></tr
><tr id="gr_svn445_1159"

><td id="1159"><a href="#1159">1159</a></td></tr
><tr id="gr_svn445_1160"

><td id="1160"><a href="#1160">1160</a></td></tr
><tr id="gr_svn445_1161"

><td id="1161"><a href="#1161">1161</a></td></tr
><tr id="gr_svn445_1162"

><td id="1162"><a href="#1162">1162</a></td></tr
><tr id="gr_svn445_1163"

><td id="1163"><a href="#1163">1163</a></td></tr
><tr id="gr_svn445_1164"

><td id="1164"><a href="#1164">1164</a></td></tr
><tr id="gr_svn445_1165"

><td id="1165"><a href="#1165">1165</a></td></tr
><tr id="gr_svn445_1166"

><td id="1166"><a href="#1166">1166</a></td></tr
><tr id="gr_svn445_1167"

><td id="1167"><a href="#1167">1167</a></td></tr
><tr id="gr_svn445_1168"

><td id="1168"><a href="#1168">1168</a></td></tr
><tr id="gr_svn445_1169"

><td id="1169"><a href="#1169">1169</a></td></tr
><tr id="gr_svn445_1170"

><td id="1170"><a href="#1170">1170</a></td></tr
><tr id="gr_svn445_1171"

><td id="1171"><a href="#1171">1171</a></td></tr
><tr id="gr_svn445_1172"

><td id="1172"><a href="#1172">1172</a></td></tr
><tr id="gr_svn445_1173"

><td id="1173"><a href="#1173">1173</a></td></tr
><tr id="gr_svn445_1174"

><td id="1174"><a href="#1174">1174</a></td></tr
><tr id="gr_svn445_1175"

><td id="1175"><a href="#1175">1175</a></td></tr
><tr id="gr_svn445_1176"

><td id="1176"><a href="#1176">1176</a></td></tr
><tr id="gr_svn445_1177"

><td id="1177"><a href="#1177">1177</a></td></tr
><tr id="gr_svn445_1178"

><td id="1178"><a href="#1178">1178</a></td></tr
><tr id="gr_svn445_1179"

><td id="1179"><a href="#1179">1179</a></td></tr
><tr id="gr_svn445_1180"

><td id="1180"><a href="#1180">1180</a></td></tr
><tr id="gr_svn445_1181"

><td id="1181"><a href="#1181">1181</a></td></tr
><tr id="gr_svn445_1182"

><td id="1182"><a href="#1182">1182</a></td></tr
><tr id="gr_svn445_1183"

><td id="1183"><a href="#1183">1183</a></td></tr
><tr id="gr_svn445_1184"

><td id="1184"><a href="#1184">1184</a></td></tr
><tr id="gr_svn445_1185"

><td id="1185"><a href="#1185">1185</a></td></tr
><tr id="gr_svn445_1186"

><td id="1186"><a href="#1186">1186</a></td></tr
><tr id="gr_svn445_1187"

><td id="1187"><a href="#1187">1187</a></td></tr
><tr id="gr_svn445_1188"

><td id="1188"><a href="#1188">1188</a></td></tr
><tr id="gr_svn445_1189"

><td id="1189"><a href="#1189">1189</a></td></tr
><tr id="gr_svn445_1190"

><td id="1190"><a href="#1190">1190</a></td></tr
><tr id="gr_svn445_1191"

><td id="1191"><a href="#1191">1191</a></td></tr
><tr id="gr_svn445_1192"

><td id="1192"><a href="#1192">1192</a></td></tr
><tr id="gr_svn445_1193"

><td id="1193"><a href="#1193">1193</a></td></tr
><tr id="gr_svn445_1194"

><td id="1194"><a href="#1194">1194</a></td></tr
><tr id="gr_svn445_1195"

><td id="1195"><a href="#1195">1195</a></td></tr
><tr id="gr_svn445_1196"

><td id="1196"><a href="#1196">1196</a></td></tr
><tr id="gr_svn445_1197"

><td id="1197"><a href="#1197">1197</a></td></tr
><tr id="gr_svn445_1198"

><td id="1198"><a href="#1198">1198</a></td></tr
><tr id="gr_svn445_1199"

><td id="1199"><a href="#1199">1199</a></td></tr
><tr id="gr_svn445_1200"

><td id="1200"><a href="#1200">1200</a></td></tr
><tr id="gr_svn445_1201"

><td id="1201"><a href="#1201">1201</a></td></tr
><tr id="gr_svn445_1202"

><td id="1202"><a href="#1202">1202</a></td></tr
><tr id="gr_svn445_1203"

><td id="1203"><a href="#1203">1203</a></td></tr
><tr id="gr_svn445_1204"

><td id="1204"><a href="#1204">1204</a></td></tr
><tr id="gr_svn445_1205"

><td id="1205"><a href="#1205">1205</a></td></tr
><tr id="gr_svn445_1206"

><td id="1206"><a href="#1206">1206</a></td></tr
><tr id="gr_svn445_1207"

><td id="1207"><a href="#1207">1207</a></td></tr
><tr id="gr_svn445_1208"

><td id="1208"><a href="#1208">1208</a></td></tr
><tr id="gr_svn445_1209"

><td id="1209"><a href="#1209">1209</a></td></tr
><tr id="gr_svn445_1210"

><td id="1210"><a href="#1210">1210</a></td></tr
><tr id="gr_svn445_1211"

><td id="1211"><a href="#1211">1211</a></td></tr
><tr id="gr_svn445_1212"

><td id="1212"><a href="#1212">1212</a></td></tr
><tr id="gr_svn445_1213"

><td id="1213"><a href="#1213">1213</a></td></tr
><tr id="gr_svn445_1214"

><td id="1214"><a href="#1214">1214</a></td></tr
><tr id="gr_svn445_1215"

><td id="1215"><a href="#1215">1215</a></td></tr
><tr id="gr_svn445_1216"

><td id="1216"><a href="#1216">1216</a></td></tr
><tr id="gr_svn445_1217"

><td id="1217"><a href="#1217">1217</a></td></tr
><tr id="gr_svn445_1218"

><td id="1218"><a href="#1218">1218</a></td></tr
><tr id="gr_svn445_1219"

><td id="1219"><a href="#1219">1219</a></td></tr
><tr id="gr_svn445_1220"

><td id="1220"><a href="#1220">1220</a></td></tr
><tr id="gr_svn445_1221"

><td id="1221"><a href="#1221">1221</a></td></tr
><tr id="gr_svn445_1222"

><td id="1222"><a href="#1222">1222</a></td></tr
><tr id="gr_svn445_1223"

><td id="1223"><a href="#1223">1223</a></td></tr
><tr id="gr_svn445_1224"

><td id="1224"><a href="#1224">1224</a></td></tr
><tr id="gr_svn445_1225"

><td id="1225"><a href="#1225">1225</a></td></tr
><tr id="gr_svn445_1226"

><td id="1226"><a href="#1226">1226</a></td></tr
><tr id="gr_svn445_1227"

><td id="1227"><a href="#1227">1227</a></td></tr
><tr id="gr_svn445_1228"

><td id="1228"><a href="#1228">1228</a></td></tr
><tr id="gr_svn445_1229"

><td id="1229"><a href="#1229">1229</a></td></tr
><tr id="gr_svn445_1230"

><td id="1230"><a href="#1230">1230</a></td></tr
><tr id="gr_svn445_1231"

><td id="1231"><a href="#1231">1231</a></td></tr
><tr id="gr_svn445_1232"

><td id="1232"><a href="#1232">1232</a></td></tr
><tr id="gr_svn445_1233"

><td id="1233"><a href="#1233">1233</a></td></tr
><tr id="gr_svn445_1234"

><td id="1234"><a href="#1234">1234</a></td></tr
><tr id="gr_svn445_1235"

><td id="1235"><a href="#1235">1235</a></td></tr
><tr id="gr_svn445_1236"

><td id="1236"><a href="#1236">1236</a></td></tr
><tr id="gr_svn445_1237"

><td id="1237"><a href="#1237">1237</a></td></tr
><tr id="gr_svn445_1238"

><td id="1238"><a href="#1238">1238</a></td></tr
><tr id="gr_svn445_1239"

><td id="1239"><a href="#1239">1239</a></td></tr
><tr id="gr_svn445_1240"

><td id="1240"><a href="#1240">1240</a></td></tr
><tr id="gr_svn445_1241"

><td id="1241"><a href="#1241">1241</a></td></tr
><tr id="gr_svn445_1242"

><td id="1242"><a href="#1242">1242</a></td></tr
><tr id="gr_svn445_1243"

><td id="1243"><a href="#1243">1243</a></td></tr
><tr id="gr_svn445_1244"

><td id="1244"><a href="#1244">1244</a></td></tr
><tr id="gr_svn445_1245"

><td id="1245"><a href="#1245">1245</a></td></tr
><tr id="gr_svn445_1246"

><td id="1246"><a href="#1246">1246</a></td></tr
><tr id="gr_svn445_1247"

><td id="1247"><a href="#1247">1247</a></td></tr
><tr id="gr_svn445_1248"

><td id="1248"><a href="#1248">1248</a></td></tr
><tr id="gr_svn445_1249"

><td id="1249"><a href="#1249">1249</a></td></tr
><tr id="gr_svn445_1250"

><td id="1250"><a href="#1250">1250</a></td></tr
><tr id="gr_svn445_1251"

><td id="1251"><a href="#1251">1251</a></td></tr
><tr id="gr_svn445_1252"

><td id="1252"><a href="#1252">1252</a></td></tr
><tr id="gr_svn445_1253"

><td id="1253"><a href="#1253">1253</a></td></tr
><tr id="gr_svn445_1254"

><td id="1254"><a href="#1254">1254</a></td></tr
><tr id="gr_svn445_1255"

><td id="1255"><a href="#1255">1255</a></td></tr
><tr id="gr_svn445_1256"

><td id="1256"><a href="#1256">1256</a></td></tr
><tr id="gr_svn445_1257"

><td id="1257"><a href="#1257">1257</a></td></tr
><tr id="gr_svn445_1258"

><td id="1258"><a href="#1258">1258</a></td></tr
><tr id="gr_svn445_1259"

><td id="1259"><a href="#1259">1259</a></td></tr
><tr id="gr_svn445_1260"

><td id="1260"><a href="#1260">1260</a></td></tr
><tr id="gr_svn445_1261"

><td id="1261"><a href="#1261">1261</a></td></tr
><tr id="gr_svn445_1262"

><td id="1262"><a href="#1262">1262</a></td></tr
><tr id="gr_svn445_1263"

><td id="1263"><a href="#1263">1263</a></td></tr
><tr id="gr_svn445_1264"

><td id="1264"><a href="#1264">1264</a></td></tr
><tr id="gr_svn445_1265"

><td id="1265"><a href="#1265">1265</a></td></tr
><tr id="gr_svn445_1266"

><td id="1266"><a href="#1266">1266</a></td></tr
><tr id="gr_svn445_1267"

><td id="1267"><a href="#1267">1267</a></td></tr
><tr id="gr_svn445_1268"

><td id="1268"><a href="#1268">1268</a></td></tr
><tr id="gr_svn445_1269"

><td id="1269"><a href="#1269">1269</a></td></tr
><tr id="gr_svn445_1270"

><td id="1270"><a href="#1270">1270</a></td></tr
><tr id="gr_svn445_1271"

><td id="1271"><a href="#1271">1271</a></td></tr
><tr id="gr_svn445_1272"

><td id="1272"><a href="#1272">1272</a></td></tr
><tr id="gr_svn445_1273"

><td id="1273"><a href="#1273">1273</a></td></tr
><tr id="gr_svn445_1274"

><td id="1274"><a href="#1274">1274</a></td></tr
><tr id="gr_svn445_1275"

><td id="1275"><a href="#1275">1275</a></td></tr
><tr id="gr_svn445_1276"

><td id="1276"><a href="#1276">1276</a></td></tr
><tr id="gr_svn445_1277"

><td id="1277"><a href="#1277">1277</a></td></tr
><tr id="gr_svn445_1278"

><td id="1278"><a href="#1278">1278</a></td></tr
><tr id="gr_svn445_1279"

><td id="1279"><a href="#1279">1279</a></td></tr
><tr id="gr_svn445_1280"

><td id="1280"><a href="#1280">1280</a></td></tr
><tr id="gr_svn445_1281"

><td id="1281"><a href="#1281">1281</a></td></tr
><tr id="gr_svn445_1282"

><td id="1282"><a href="#1282">1282</a></td></tr
><tr id="gr_svn445_1283"

><td id="1283"><a href="#1283">1283</a></td></tr
><tr id="gr_svn445_1284"

><td id="1284"><a href="#1284">1284</a></td></tr
><tr id="gr_svn445_1285"

><td id="1285"><a href="#1285">1285</a></td></tr
><tr id="gr_svn445_1286"

><td id="1286"><a href="#1286">1286</a></td></tr
><tr id="gr_svn445_1287"

><td id="1287"><a href="#1287">1287</a></td></tr
><tr id="gr_svn445_1288"

><td id="1288"><a href="#1288">1288</a></td></tr
><tr id="gr_svn445_1289"

><td id="1289"><a href="#1289">1289</a></td></tr
><tr id="gr_svn445_1290"

><td id="1290"><a href="#1290">1290</a></td></tr
><tr id="gr_svn445_1291"

><td id="1291"><a href="#1291">1291</a></td></tr
><tr id="gr_svn445_1292"

><td id="1292"><a href="#1292">1292</a></td></tr
><tr id="gr_svn445_1293"

><td id="1293"><a href="#1293">1293</a></td></tr
><tr id="gr_svn445_1294"

><td id="1294"><a href="#1294">1294</a></td></tr
><tr id="gr_svn445_1295"

><td id="1295"><a href="#1295">1295</a></td></tr
><tr id="gr_svn445_1296"

><td id="1296"><a href="#1296">1296</a></td></tr
><tr id="gr_svn445_1297"

><td id="1297"><a href="#1297">1297</a></td></tr
><tr id="gr_svn445_1298"

><td id="1298"><a href="#1298">1298</a></td></tr
><tr id="gr_svn445_1299"

><td id="1299"><a href="#1299">1299</a></td></tr
><tr id="gr_svn445_1300"

><td id="1300"><a href="#1300">1300</a></td></tr
><tr id="gr_svn445_1301"

><td id="1301"><a href="#1301">1301</a></td></tr
><tr id="gr_svn445_1302"

><td id="1302"><a href="#1302">1302</a></td></tr
><tr id="gr_svn445_1303"

><td id="1303"><a href="#1303">1303</a></td></tr
><tr id="gr_svn445_1304"

><td id="1304"><a href="#1304">1304</a></td></tr
><tr id="gr_svn445_1305"

><td id="1305"><a href="#1305">1305</a></td></tr
><tr id="gr_svn445_1306"

><td id="1306"><a href="#1306">1306</a></td></tr
><tr id="gr_svn445_1307"

><td id="1307"><a href="#1307">1307</a></td></tr
><tr id="gr_svn445_1308"

><td id="1308"><a href="#1308">1308</a></td></tr
><tr id="gr_svn445_1309"

><td id="1309"><a href="#1309">1309</a></td></tr
><tr id="gr_svn445_1310"

><td id="1310"><a href="#1310">1310</a></td></tr
><tr id="gr_svn445_1311"

><td id="1311"><a href="#1311">1311</a></td></tr
><tr id="gr_svn445_1312"

><td id="1312"><a href="#1312">1312</a></td></tr
><tr id="gr_svn445_1313"

><td id="1313"><a href="#1313">1313</a></td></tr
><tr id="gr_svn445_1314"

><td id="1314"><a href="#1314">1314</a></td></tr
><tr id="gr_svn445_1315"

><td id="1315"><a href="#1315">1315</a></td></tr
><tr id="gr_svn445_1316"

><td id="1316"><a href="#1316">1316</a></td></tr
><tr id="gr_svn445_1317"

><td id="1317"><a href="#1317">1317</a></td></tr
><tr id="gr_svn445_1318"

><td id="1318"><a href="#1318">1318</a></td></tr
><tr id="gr_svn445_1319"

><td id="1319"><a href="#1319">1319</a></td></tr
><tr id="gr_svn445_1320"

><td id="1320"><a href="#1320">1320</a></td></tr
><tr id="gr_svn445_1321"

><td id="1321"><a href="#1321">1321</a></td></tr
><tr id="gr_svn445_1322"

><td id="1322"><a href="#1322">1322</a></td></tr
><tr id="gr_svn445_1323"

><td id="1323"><a href="#1323">1323</a></td></tr
><tr id="gr_svn445_1324"

><td id="1324"><a href="#1324">1324</a></td></tr
><tr id="gr_svn445_1325"

><td id="1325"><a href="#1325">1325</a></td></tr
><tr id="gr_svn445_1326"

><td id="1326"><a href="#1326">1326</a></td></tr
><tr id="gr_svn445_1327"

><td id="1327"><a href="#1327">1327</a></td></tr
><tr id="gr_svn445_1328"

><td id="1328"><a href="#1328">1328</a></td></tr
><tr id="gr_svn445_1329"

><td id="1329"><a href="#1329">1329</a></td></tr
><tr id="gr_svn445_1330"

><td id="1330"><a href="#1330">1330</a></td></tr
><tr id="gr_svn445_1331"

><td id="1331"><a href="#1331">1331</a></td></tr
><tr id="gr_svn445_1332"

><td id="1332"><a href="#1332">1332</a></td></tr
><tr id="gr_svn445_1333"

><td id="1333"><a href="#1333">1333</a></td></tr
><tr id="gr_svn445_1334"

><td id="1334"><a href="#1334">1334</a></td></tr
><tr id="gr_svn445_1335"

><td id="1335"><a href="#1335">1335</a></td></tr
><tr id="gr_svn445_1336"

><td id="1336"><a href="#1336">1336</a></td></tr
><tr id="gr_svn445_1337"

><td id="1337"><a href="#1337">1337</a></td></tr
><tr id="gr_svn445_1338"

><td id="1338"><a href="#1338">1338</a></td></tr
><tr id="gr_svn445_1339"

><td id="1339"><a href="#1339">1339</a></td></tr
><tr id="gr_svn445_1340"

><td id="1340"><a href="#1340">1340</a></td></tr
><tr id="gr_svn445_1341"

><td id="1341"><a href="#1341">1341</a></td></tr
><tr id="gr_svn445_1342"

><td id="1342"><a href="#1342">1342</a></td></tr
><tr id="gr_svn445_1343"

><td id="1343"><a href="#1343">1343</a></td></tr
><tr id="gr_svn445_1344"

><td id="1344"><a href="#1344">1344</a></td></tr
><tr id="gr_svn445_1345"

><td id="1345"><a href="#1345">1345</a></td></tr
><tr id="gr_svn445_1346"

><td id="1346"><a href="#1346">1346</a></td></tr
><tr id="gr_svn445_1347"

><td id="1347"><a href="#1347">1347</a></td></tr
><tr id="gr_svn445_1348"

><td id="1348"><a href="#1348">1348</a></td></tr
><tr id="gr_svn445_1349"

><td id="1349"><a href="#1349">1349</a></td></tr
><tr id="gr_svn445_1350"

><td id="1350"><a href="#1350">1350</a></td></tr
><tr id="gr_svn445_1351"

><td id="1351"><a href="#1351">1351</a></td></tr
><tr id="gr_svn445_1352"

><td id="1352"><a href="#1352">1352</a></td></tr
><tr id="gr_svn445_1353"

><td id="1353"><a href="#1353">1353</a></td></tr
><tr id="gr_svn445_1354"

><td id="1354"><a href="#1354">1354</a></td></tr
><tr id="gr_svn445_1355"

><td id="1355"><a href="#1355">1355</a></td></tr
><tr id="gr_svn445_1356"

><td id="1356"><a href="#1356">1356</a></td></tr
><tr id="gr_svn445_1357"

><td id="1357"><a href="#1357">1357</a></td></tr
><tr id="gr_svn445_1358"

><td id="1358"><a href="#1358">1358</a></td></tr
><tr id="gr_svn445_1359"

><td id="1359"><a href="#1359">1359</a></td></tr
><tr id="gr_svn445_1360"

><td id="1360"><a href="#1360">1360</a></td></tr
><tr id="gr_svn445_1361"

><td id="1361"><a href="#1361">1361</a></td></tr
><tr id="gr_svn445_1362"

><td id="1362"><a href="#1362">1362</a></td></tr
><tr id="gr_svn445_1363"

><td id="1363"><a href="#1363">1363</a></td></tr
><tr id="gr_svn445_1364"

><td id="1364"><a href="#1364">1364</a></td></tr
><tr id="gr_svn445_1365"

><td id="1365"><a href="#1365">1365</a></td></tr
><tr id="gr_svn445_1366"

><td id="1366"><a href="#1366">1366</a></td></tr
><tr id="gr_svn445_1367"

><td id="1367"><a href="#1367">1367</a></td></tr
><tr id="gr_svn445_1368"

><td id="1368"><a href="#1368">1368</a></td></tr
><tr id="gr_svn445_1369"

><td id="1369"><a href="#1369">1369</a></td></tr
><tr id="gr_svn445_1370"

><td id="1370"><a href="#1370">1370</a></td></tr
><tr id="gr_svn445_1371"

><td id="1371"><a href="#1371">1371</a></td></tr
><tr id="gr_svn445_1372"

><td id="1372"><a href="#1372">1372</a></td></tr
><tr id="gr_svn445_1373"

><td id="1373"><a href="#1373">1373</a></td></tr
><tr id="gr_svn445_1374"

><td id="1374"><a href="#1374">1374</a></td></tr
><tr id="gr_svn445_1375"

><td id="1375"><a href="#1375">1375</a></td></tr
><tr id="gr_svn445_1376"

><td id="1376"><a href="#1376">1376</a></td></tr
><tr id="gr_svn445_1377"

><td id="1377"><a href="#1377">1377</a></td></tr
><tr id="gr_svn445_1378"

><td id="1378"><a href="#1378">1378</a></td></tr
><tr id="gr_svn445_1379"

><td id="1379"><a href="#1379">1379</a></td></tr
><tr id="gr_svn445_1380"

><td id="1380"><a href="#1380">1380</a></td></tr
><tr id="gr_svn445_1381"

><td id="1381"><a href="#1381">1381</a></td></tr
><tr id="gr_svn445_1382"

><td id="1382"><a href="#1382">1382</a></td></tr
><tr id="gr_svn445_1383"

><td id="1383"><a href="#1383">1383</a></td></tr
><tr id="gr_svn445_1384"

><td id="1384"><a href="#1384">1384</a></td></tr
><tr id="gr_svn445_1385"

><td id="1385"><a href="#1385">1385</a></td></tr
><tr id="gr_svn445_1386"

><td id="1386"><a href="#1386">1386</a></td></tr
><tr id="gr_svn445_1387"

><td id="1387"><a href="#1387">1387</a></td></tr
><tr id="gr_svn445_1388"

><td id="1388"><a href="#1388">1388</a></td></tr
><tr id="gr_svn445_1389"

><td id="1389"><a href="#1389">1389</a></td></tr
><tr id="gr_svn445_1390"

><td id="1390"><a href="#1390">1390</a></td></tr
><tr id="gr_svn445_1391"

><td id="1391"><a href="#1391">1391</a></td></tr
><tr id="gr_svn445_1392"

><td id="1392"><a href="#1392">1392</a></td></tr
><tr id="gr_svn445_1393"

><td id="1393"><a href="#1393">1393</a></td></tr
><tr id="gr_svn445_1394"

><td id="1394"><a href="#1394">1394</a></td></tr
><tr id="gr_svn445_1395"

><td id="1395"><a href="#1395">1395</a></td></tr
><tr id="gr_svn445_1396"

><td id="1396"><a href="#1396">1396</a></td></tr
><tr id="gr_svn445_1397"

><td id="1397"><a href="#1397">1397</a></td></tr
><tr id="gr_svn445_1398"

><td id="1398"><a href="#1398">1398</a></td></tr
><tr id="gr_svn445_1399"

><td id="1399"><a href="#1399">1399</a></td></tr
><tr id="gr_svn445_1400"

><td id="1400"><a href="#1400">1400</a></td></tr
><tr id="gr_svn445_1401"

><td id="1401"><a href="#1401">1401</a></td></tr
><tr id="gr_svn445_1402"

><td id="1402"><a href="#1402">1402</a></td></tr
><tr id="gr_svn445_1403"

><td id="1403"><a href="#1403">1403</a></td></tr
><tr id="gr_svn445_1404"

><td id="1404"><a href="#1404">1404</a></td></tr
><tr id="gr_svn445_1405"

><td id="1405"><a href="#1405">1405</a></td></tr
><tr id="gr_svn445_1406"

><td id="1406"><a href="#1406">1406</a></td></tr
><tr id="gr_svn445_1407"

><td id="1407"><a href="#1407">1407</a></td></tr
><tr id="gr_svn445_1408"

><td id="1408"><a href="#1408">1408</a></td></tr
><tr id="gr_svn445_1409"

><td id="1409"><a href="#1409">1409</a></td></tr
><tr id="gr_svn445_1410"

><td id="1410"><a href="#1410">1410</a></td></tr
><tr id="gr_svn445_1411"

><td id="1411"><a href="#1411">1411</a></td></tr
><tr id="gr_svn445_1412"

><td id="1412"><a href="#1412">1412</a></td></tr
><tr id="gr_svn445_1413"

><td id="1413"><a href="#1413">1413</a></td></tr
><tr id="gr_svn445_1414"

><td id="1414"><a href="#1414">1414</a></td></tr
><tr id="gr_svn445_1415"

><td id="1415"><a href="#1415">1415</a></td></tr
><tr id="gr_svn445_1416"

><td id="1416"><a href="#1416">1416</a></td></tr
><tr id="gr_svn445_1417"

><td id="1417"><a href="#1417">1417</a></td></tr
><tr id="gr_svn445_1418"

><td id="1418"><a href="#1418">1418</a></td></tr
><tr id="gr_svn445_1419"

><td id="1419"><a href="#1419">1419</a></td></tr
><tr id="gr_svn445_1420"

><td id="1420"><a href="#1420">1420</a></td></tr
><tr id="gr_svn445_1421"

><td id="1421"><a href="#1421">1421</a></td></tr
><tr id="gr_svn445_1422"

><td id="1422"><a href="#1422">1422</a></td></tr
><tr id="gr_svn445_1423"

><td id="1423"><a href="#1423">1423</a></td></tr
><tr id="gr_svn445_1424"

><td id="1424"><a href="#1424">1424</a></td></tr
><tr id="gr_svn445_1425"

><td id="1425"><a href="#1425">1425</a></td></tr
><tr id="gr_svn445_1426"

><td id="1426"><a href="#1426">1426</a></td></tr
><tr id="gr_svn445_1427"

><td id="1427"><a href="#1427">1427</a></td></tr
><tr id="gr_svn445_1428"

><td id="1428"><a href="#1428">1428</a></td></tr
><tr id="gr_svn445_1429"

><td id="1429"><a href="#1429">1429</a></td></tr
><tr id="gr_svn445_1430"

><td id="1430"><a href="#1430">1430</a></td></tr
><tr id="gr_svn445_1431"

><td id="1431"><a href="#1431">1431</a></td></tr
><tr id="gr_svn445_1432"

><td id="1432"><a href="#1432">1432</a></td></tr
><tr id="gr_svn445_1433"

><td id="1433"><a href="#1433">1433</a></td></tr
><tr id="gr_svn445_1434"

><td id="1434"><a href="#1434">1434</a></td></tr
><tr id="gr_svn445_1435"

><td id="1435"><a href="#1435">1435</a></td></tr
><tr id="gr_svn445_1436"

><td id="1436"><a href="#1436">1436</a></td></tr
><tr id="gr_svn445_1437"

><td id="1437"><a href="#1437">1437</a></td></tr
><tr id="gr_svn445_1438"

><td id="1438"><a href="#1438">1438</a></td></tr
><tr id="gr_svn445_1439"

><td id="1439"><a href="#1439">1439</a></td></tr
><tr id="gr_svn445_1440"

><td id="1440"><a href="#1440">1440</a></td></tr
><tr id="gr_svn445_1441"

><td id="1441"><a href="#1441">1441</a></td></tr
><tr id="gr_svn445_1442"

><td id="1442"><a href="#1442">1442</a></td></tr
><tr id="gr_svn445_1443"

><td id="1443"><a href="#1443">1443</a></td></tr
><tr id="gr_svn445_1444"

><td id="1444"><a href="#1444">1444</a></td></tr
><tr id="gr_svn445_1445"

><td id="1445"><a href="#1445">1445</a></td></tr
><tr id="gr_svn445_1446"

><td id="1446"><a href="#1446">1446</a></td></tr
><tr id="gr_svn445_1447"

><td id="1447"><a href="#1447">1447</a></td></tr
><tr id="gr_svn445_1448"

><td id="1448"><a href="#1448">1448</a></td></tr
><tr id="gr_svn445_1449"

><td id="1449"><a href="#1449">1449</a></td></tr
><tr id="gr_svn445_1450"

><td id="1450"><a href="#1450">1450</a></td></tr
><tr id="gr_svn445_1451"

><td id="1451"><a href="#1451">1451</a></td></tr
><tr id="gr_svn445_1452"

><td id="1452"><a href="#1452">1452</a></td></tr
><tr id="gr_svn445_1453"

><td id="1453"><a href="#1453">1453</a></td></tr
><tr id="gr_svn445_1454"

><td id="1454"><a href="#1454">1454</a></td></tr
><tr id="gr_svn445_1455"

><td id="1455"><a href="#1455">1455</a></td></tr
><tr id="gr_svn445_1456"

><td id="1456"><a href="#1456">1456</a></td></tr
><tr id="gr_svn445_1457"

><td id="1457"><a href="#1457">1457</a></td></tr
><tr id="gr_svn445_1458"

><td id="1458"><a href="#1458">1458</a></td></tr
><tr id="gr_svn445_1459"

><td id="1459"><a href="#1459">1459</a></td></tr
><tr id="gr_svn445_1460"

><td id="1460"><a href="#1460">1460</a></td></tr
><tr id="gr_svn445_1461"

><td id="1461"><a href="#1461">1461</a></td></tr
><tr id="gr_svn445_1462"

><td id="1462"><a href="#1462">1462</a></td></tr
><tr id="gr_svn445_1463"

><td id="1463"><a href="#1463">1463</a></td></tr
><tr id="gr_svn445_1464"

><td id="1464"><a href="#1464">1464</a></td></tr
><tr id="gr_svn445_1465"

><td id="1465"><a href="#1465">1465</a></td></tr
><tr id="gr_svn445_1466"

><td id="1466"><a href="#1466">1466</a></td></tr
><tr id="gr_svn445_1467"

><td id="1467"><a href="#1467">1467</a></td></tr
><tr id="gr_svn445_1468"

><td id="1468"><a href="#1468">1468</a></td></tr
><tr id="gr_svn445_1469"

><td id="1469"><a href="#1469">1469</a></td></tr
><tr id="gr_svn445_1470"

><td id="1470"><a href="#1470">1470</a></td></tr
><tr id="gr_svn445_1471"

><td id="1471"><a href="#1471">1471</a></td></tr
><tr id="gr_svn445_1472"

><td id="1472"><a href="#1472">1472</a></td></tr
><tr id="gr_svn445_1473"

><td id="1473"><a href="#1473">1473</a></td></tr
><tr id="gr_svn445_1474"

><td id="1474"><a href="#1474">1474</a></td></tr
><tr id="gr_svn445_1475"

><td id="1475"><a href="#1475">1475</a></td></tr
><tr id="gr_svn445_1476"

><td id="1476"><a href="#1476">1476</a></td></tr
><tr id="gr_svn445_1477"

><td id="1477"><a href="#1477">1477</a></td></tr
><tr id="gr_svn445_1478"

><td id="1478"><a href="#1478">1478</a></td></tr
><tr id="gr_svn445_1479"

><td id="1479"><a href="#1479">1479</a></td></tr
><tr id="gr_svn445_1480"

><td id="1480"><a href="#1480">1480</a></td></tr
><tr id="gr_svn445_1481"

><td id="1481"><a href="#1481">1481</a></td></tr
><tr id="gr_svn445_1482"

><td id="1482"><a href="#1482">1482</a></td></tr
><tr id="gr_svn445_1483"

><td id="1483"><a href="#1483">1483</a></td></tr
><tr id="gr_svn445_1484"

><td id="1484"><a href="#1484">1484</a></td></tr
><tr id="gr_svn445_1485"

><td id="1485"><a href="#1485">1485</a></td></tr
><tr id="gr_svn445_1486"

><td id="1486"><a href="#1486">1486</a></td></tr
><tr id="gr_svn445_1487"

><td id="1487"><a href="#1487">1487</a></td></tr
><tr id="gr_svn445_1488"

><td id="1488"><a href="#1488">1488</a></td></tr
><tr id="gr_svn445_1489"

><td id="1489"><a href="#1489">1489</a></td></tr
><tr id="gr_svn445_1490"

><td id="1490"><a href="#1490">1490</a></td></tr
><tr id="gr_svn445_1491"

><td id="1491"><a href="#1491">1491</a></td></tr
><tr id="gr_svn445_1492"

><td id="1492"><a href="#1492">1492</a></td></tr
><tr id="gr_svn445_1493"

><td id="1493"><a href="#1493">1493</a></td></tr
><tr id="gr_svn445_1494"

><td id="1494"><a href="#1494">1494</a></td></tr
><tr id="gr_svn445_1495"

><td id="1495"><a href="#1495">1495</a></td></tr
><tr id="gr_svn445_1496"

><td id="1496"><a href="#1496">1496</a></td></tr
><tr id="gr_svn445_1497"

><td id="1497"><a href="#1497">1497</a></td></tr
><tr id="gr_svn445_1498"

><td id="1498"><a href="#1498">1498</a></td></tr
><tr id="gr_svn445_1499"

><td id="1499"><a href="#1499">1499</a></td></tr
><tr id="gr_svn445_1500"

><td id="1500"><a href="#1500">1500</a></td></tr
><tr id="gr_svn445_1501"

><td id="1501"><a href="#1501">1501</a></td></tr
><tr id="gr_svn445_1502"

><td id="1502"><a href="#1502">1502</a></td></tr
><tr id="gr_svn445_1503"

><td id="1503"><a href="#1503">1503</a></td></tr
><tr id="gr_svn445_1504"

><td id="1504"><a href="#1504">1504</a></td></tr
><tr id="gr_svn445_1505"

><td id="1505"><a href="#1505">1505</a></td></tr
><tr id="gr_svn445_1506"

><td id="1506"><a href="#1506">1506</a></td></tr
><tr id="gr_svn445_1507"

><td id="1507"><a href="#1507">1507</a></td></tr
><tr id="gr_svn445_1508"

><td id="1508"><a href="#1508">1508</a></td></tr
><tr id="gr_svn445_1509"

><td id="1509"><a href="#1509">1509</a></td></tr
><tr id="gr_svn445_1510"

><td id="1510"><a href="#1510">1510</a></td></tr
><tr id="gr_svn445_1511"

><td id="1511"><a href="#1511">1511</a></td></tr
><tr id="gr_svn445_1512"

><td id="1512"><a href="#1512">1512</a></td></tr
><tr id="gr_svn445_1513"

><td id="1513"><a href="#1513">1513</a></td></tr
><tr id="gr_svn445_1514"

><td id="1514"><a href="#1514">1514</a></td></tr
><tr id="gr_svn445_1515"

><td id="1515"><a href="#1515">1515</a></td></tr
><tr id="gr_svn445_1516"

><td id="1516"><a href="#1516">1516</a></td></tr
><tr id="gr_svn445_1517"

><td id="1517"><a href="#1517">1517</a></td></tr
><tr id="gr_svn445_1518"

><td id="1518"><a href="#1518">1518</a></td></tr
><tr id="gr_svn445_1519"

><td id="1519"><a href="#1519">1519</a></td></tr
><tr id="gr_svn445_1520"

><td id="1520"><a href="#1520">1520</a></td></tr
><tr id="gr_svn445_1521"

><td id="1521"><a href="#1521">1521</a></td></tr
><tr id="gr_svn445_1522"

><td id="1522"><a href="#1522">1522</a></td></tr
><tr id="gr_svn445_1523"

><td id="1523"><a href="#1523">1523</a></td></tr
><tr id="gr_svn445_1524"

><td id="1524"><a href="#1524">1524</a></td></tr
><tr id="gr_svn445_1525"

><td id="1525"><a href="#1525">1525</a></td></tr
><tr id="gr_svn445_1526"

><td id="1526"><a href="#1526">1526</a></td></tr
><tr id="gr_svn445_1527"

><td id="1527"><a href="#1527">1527</a></td></tr
><tr id="gr_svn445_1528"

><td id="1528"><a href="#1528">1528</a></td></tr
><tr id="gr_svn445_1529"

><td id="1529"><a href="#1529">1529</a></td></tr
><tr id="gr_svn445_1530"

><td id="1530"><a href="#1530">1530</a></td></tr
><tr id="gr_svn445_1531"

><td id="1531"><a href="#1531">1531</a></td></tr
><tr id="gr_svn445_1532"

><td id="1532"><a href="#1532">1532</a></td></tr
><tr id="gr_svn445_1533"

><td id="1533"><a href="#1533">1533</a></td></tr
><tr id="gr_svn445_1534"

><td id="1534"><a href="#1534">1534</a></td></tr
><tr id="gr_svn445_1535"

><td id="1535"><a href="#1535">1535</a></td></tr
><tr id="gr_svn445_1536"

><td id="1536"><a href="#1536">1536</a></td></tr
><tr id="gr_svn445_1537"

><td id="1537"><a href="#1537">1537</a></td></tr
><tr id="gr_svn445_1538"

><td id="1538"><a href="#1538">1538</a></td></tr
><tr id="gr_svn445_1539"

><td id="1539"><a href="#1539">1539</a></td></tr
><tr id="gr_svn445_1540"

><td id="1540"><a href="#1540">1540</a></td></tr
><tr id="gr_svn445_1541"

><td id="1541"><a href="#1541">1541</a></td></tr
><tr id="gr_svn445_1542"

><td id="1542"><a href="#1542">1542</a></td></tr
><tr id="gr_svn445_1543"

><td id="1543"><a href="#1543">1543</a></td></tr
><tr id="gr_svn445_1544"

><td id="1544"><a href="#1544">1544</a></td></tr
><tr id="gr_svn445_1545"

><td id="1545"><a href="#1545">1545</a></td></tr
><tr id="gr_svn445_1546"

><td id="1546"><a href="#1546">1546</a></td></tr
><tr id="gr_svn445_1547"

><td id="1547"><a href="#1547">1547</a></td></tr
><tr id="gr_svn445_1548"

><td id="1548"><a href="#1548">1548</a></td></tr
><tr id="gr_svn445_1549"

><td id="1549"><a href="#1549">1549</a></td></tr
><tr id="gr_svn445_1550"

><td id="1550"><a href="#1550">1550</a></td></tr
><tr id="gr_svn445_1551"

><td id="1551"><a href="#1551">1551</a></td></tr
><tr id="gr_svn445_1552"

><td id="1552"><a href="#1552">1552</a></td></tr
><tr id="gr_svn445_1553"

><td id="1553"><a href="#1553">1553</a></td></tr
><tr id="gr_svn445_1554"

><td id="1554"><a href="#1554">1554</a></td></tr
><tr id="gr_svn445_1555"

><td id="1555"><a href="#1555">1555</a></td></tr
><tr id="gr_svn445_1556"

><td id="1556"><a href="#1556">1556</a></td></tr
><tr id="gr_svn445_1557"

><td id="1557"><a href="#1557">1557</a></td></tr
><tr id="gr_svn445_1558"

><td id="1558"><a href="#1558">1558</a></td></tr
><tr id="gr_svn445_1559"

><td id="1559"><a href="#1559">1559</a></td></tr
><tr id="gr_svn445_1560"

><td id="1560"><a href="#1560">1560</a></td></tr
><tr id="gr_svn445_1561"

><td id="1561"><a href="#1561">1561</a></td></tr
><tr id="gr_svn445_1562"

><td id="1562"><a href="#1562">1562</a></td></tr
><tr id="gr_svn445_1563"

><td id="1563"><a href="#1563">1563</a></td></tr
><tr id="gr_svn445_1564"

><td id="1564"><a href="#1564">1564</a></td></tr
><tr id="gr_svn445_1565"

><td id="1565"><a href="#1565">1565</a></td></tr
><tr id="gr_svn445_1566"

><td id="1566"><a href="#1566">1566</a></td></tr
><tr id="gr_svn445_1567"

><td id="1567"><a href="#1567">1567</a></td></tr
><tr id="gr_svn445_1568"

><td id="1568"><a href="#1568">1568</a></td></tr
><tr id="gr_svn445_1569"

><td id="1569"><a href="#1569">1569</a></td></tr
><tr id="gr_svn445_1570"

><td id="1570"><a href="#1570">1570</a></td></tr
><tr id="gr_svn445_1571"

><td id="1571"><a href="#1571">1571</a></td></tr
><tr id="gr_svn445_1572"

><td id="1572"><a href="#1572">1572</a></td></tr
><tr id="gr_svn445_1573"

><td id="1573"><a href="#1573">1573</a></td></tr
><tr id="gr_svn445_1574"

><td id="1574"><a href="#1574">1574</a></td></tr
><tr id="gr_svn445_1575"

><td id="1575"><a href="#1575">1575</a></td></tr
><tr id="gr_svn445_1576"

><td id="1576"><a href="#1576">1576</a></td></tr
><tr id="gr_svn445_1577"

><td id="1577"><a href="#1577">1577</a></td></tr
><tr id="gr_svn445_1578"

><td id="1578"><a href="#1578">1578</a></td></tr
><tr id="gr_svn445_1579"

><td id="1579"><a href="#1579">1579</a></td></tr
><tr id="gr_svn445_1580"

><td id="1580"><a href="#1580">1580</a></td></tr
><tr id="gr_svn445_1581"

><td id="1581"><a href="#1581">1581</a></td></tr
><tr id="gr_svn445_1582"

><td id="1582"><a href="#1582">1582</a></td></tr
><tr id="gr_svn445_1583"

><td id="1583"><a href="#1583">1583</a></td></tr
><tr id="gr_svn445_1584"

><td id="1584"><a href="#1584">1584</a></td></tr
><tr id="gr_svn445_1585"

><td id="1585"><a href="#1585">1585</a></td></tr
><tr id="gr_svn445_1586"

><td id="1586"><a href="#1586">1586</a></td></tr
><tr id="gr_svn445_1587"

><td id="1587"><a href="#1587">1587</a></td></tr
><tr id="gr_svn445_1588"

><td id="1588"><a href="#1588">1588</a></td></tr
><tr id="gr_svn445_1589"

><td id="1589"><a href="#1589">1589</a></td></tr
><tr id="gr_svn445_1590"

><td id="1590"><a href="#1590">1590</a></td></tr
><tr id="gr_svn445_1591"

><td id="1591"><a href="#1591">1591</a></td></tr
><tr id="gr_svn445_1592"

><td id="1592"><a href="#1592">1592</a></td></tr
><tr id="gr_svn445_1593"

><td id="1593"><a href="#1593">1593</a></td></tr
><tr id="gr_svn445_1594"

><td id="1594"><a href="#1594">1594</a></td></tr
><tr id="gr_svn445_1595"

><td id="1595"><a href="#1595">1595</a></td></tr
><tr id="gr_svn445_1596"

><td id="1596"><a href="#1596">1596</a></td></tr
><tr id="gr_svn445_1597"

><td id="1597"><a href="#1597">1597</a></td></tr
><tr id="gr_svn445_1598"

><td id="1598"><a href="#1598">1598</a></td></tr
><tr id="gr_svn445_1599"

><td id="1599"><a href="#1599">1599</a></td></tr
><tr id="gr_svn445_1600"

><td id="1600"><a href="#1600">1600</a></td></tr
><tr id="gr_svn445_1601"

><td id="1601"><a href="#1601">1601</a></td></tr
><tr id="gr_svn445_1602"

><td id="1602"><a href="#1602">1602</a></td></tr
><tr id="gr_svn445_1603"

><td id="1603"><a href="#1603">1603</a></td></tr
><tr id="gr_svn445_1604"

><td id="1604"><a href="#1604">1604</a></td></tr
><tr id="gr_svn445_1605"

><td id="1605"><a href="#1605">1605</a></td></tr
><tr id="gr_svn445_1606"

><td id="1606"><a href="#1606">1606</a></td></tr
><tr id="gr_svn445_1607"

><td id="1607"><a href="#1607">1607</a></td></tr
><tr id="gr_svn445_1608"

><td id="1608"><a href="#1608">1608</a></td></tr
><tr id="gr_svn445_1609"

><td id="1609"><a href="#1609">1609</a></td></tr
><tr id="gr_svn445_1610"

><td id="1610"><a href="#1610">1610</a></td></tr
><tr id="gr_svn445_1611"

><td id="1611"><a href="#1611">1611</a></td></tr
><tr id="gr_svn445_1612"

><td id="1612"><a href="#1612">1612</a></td></tr
><tr id="gr_svn445_1613"

><td id="1613"><a href="#1613">1613</a></td></tr
><tr id="gr_svn445_1614"

><td id="1614"><a href="#1614">1614</a></td></tr
><tr id="gr_svn445_1615"

><td id="1615"><a href="#1615">1615</a></td></tr
><tr id="gr_svn445_1616"

><td id="1616"><a href="#1616">1616</a></td></tr
><tr id="gr_svn445_1617"

><td id="1617"><a href="#1617">1617</a></td></tr
><tr id="gr_svn445_1618"

><td id="1618"><a href="#1618">1618</a></td></tr
><tr id="gr_svn445_1619"

><td id="1619"><a href="#1619">1619</a></td></tr
><tr id="gr_svn445_1620"

><td id="1620"><a href="#1620">1620</a></td></tr
><tr id="gr_svn445_1621"

><td id="1621"><a href="#1621">1621</a></td></tr
><tr id="gr_svn445_1622"

><td id="1622"><a href="#1622">1622</a></td></tr
><tr id="gr_svn445_1623"

><td id="1623"><a href="#1623">1623</a></td></tr
><tr id="gr_svn445_1624"

><td id="1624"><a href="#1624">1624</a></td></tr
><tr id="gr_svn445_1625"

><td id="1625"><a href="#1625">1625</a></td></tr
><tr id="gr_svn445_1626"

><td id="1626"><a href="#1626">1626</a></td></tr
><tr id="gr_svn445_1627"

><td id="1627"><a href="#1627">1627</a></td></tr
><tr id="gr_svn445_1628"

><td id="1628"><a href="#1628">1628</a></td></tr
><tr id="gr_svn445_1629"

><td id="1629"><a href="#1629">1629</a></td></tr
><tr id="gr_svn445_1630"

><td id="1630"><a href="#1630">1630</a></td></tr
><tr id="gr_svn445_1631"

><td id="1631"><a href="#1631">1631</a></td></tr
><tr id="gr_svn445_1632"

><td id="1632"><a href="#1632">1632</a></td></tr
><tr id="gr_svn445_1633"

><td id="1633"><a href="#1633">1633</a></td></tr
><tr id="gr_svn445_1634"

><td id="1634"><a href="#1634">1634</a></td></tr
><tr id="gr_svn445_1635"

><td id="1635"><a href="#1635">1635</a></td></tr
><tr id="gr_svn445_1636"

><td id="1636"><a href="#1636">1636</a></td></tr
><tr id="gr_svn445_1637"

><td id="1637"><a href="#1637">1637</a></td></tr
><tr id="gr_svn445_1638"

><td id="1638"><a href="#1638">1638</a></td></tr
><tr id="gr_svn445_1639"

><td id="1639"><a href="#1639">1639</a></td></tr
><tr id="gr_svn445_1640"

><td id="1640"><a href="#1640">1640</a></td></tr
><tr id="gr_svn445_1641"

><td id="1641"><a href="#1641">1641</a></td></tr
><tr id="gr_svn445_1642"

><td id="1642"><a href="#1642">1642</a></td></tr
><tr id="gr_svn445_1643"

><td id="1643"><a href="#1643">1643</a></td></tr
><tr id="gr_svn445_1644"

><td id="1644"><a href="#1644">1644</a></td></tr
><tr id="gr_svn445_1645"

><td id="1645"><a href="#1645">1645</a></td></tr
><tr id="gr_svn445_1646"

><td id="1646"><a href="#1646">1646</a></td></tr
><tr id="gr_svn445_1647"

><td id="1647"><a href="#1647">1647</a></td></tr
><tr id="gr_svn445_1648"

><td id="1648"><a href="#1648">1648</a></td></tr
><tr id="gr_svn445_1649"

><td id="1649"><a href="#1649">1649</a></td></tr
><tr id="gr_svn445_1650"

><td id="1650"><a href="#1650">1650</a></td></tr
><tr id="gr_svn445_1651"

><td id="1651"><a href="#1651">1651</a></td></tr
><tr id="gr_svn445_1652"

><td id="1652"><a href="#1652">1652</a></td></tr
><tr id="gr_svn445_1653"

><td id="1653"><a href="#1653">1653</a></td></tr
><tr id="gr_svn445_1654"

><td id="1654"><a href="#1654">1654</a></td></tr
><tr id="gr_svn445_1655"

><td id="1655"><a href="#1655">1655</a></td></tr
><tr id="gr_svn445_1656"

><td id="1656"><a href="#1656">1656</a></td></tr
><tr id="gr_svn445_1657"

><td id="1657"><a href="#1657">1657</a></td></tr
><tr id="gr_svn445_1658"

><td id="1658"><a href="#1658">1658</a></td></tr
><tr id="gr_svn445_1659"

><td id="1659"><a href="#1659">1659</a></td></tr
><tr id="gr_svn445_1660"

><td id="1660"><a href="#1660">1660</a></td></tr
><tr id="gr_svn445_1661"

><td id="1661"><a href="#1661">1661</a></td></tr
><tr id="gr_svn445_1662"

><td id="1662"><a href="#1662">1662</a></td></tr
><tr id="gr_svn445_1663"

><td id="1663"><a href="#1663">1663</a></td></tr
><tr id="gr_svn445_1664"

><td id="1664"><a href="#1664">1664</a></td></tr
><tr id="gr_svn445_1665"

><td id="1665"><a href="#1665">1665</a></td></tr
><tr id="gr_svn445_1666"

><td id="1666"><a href="#1666">1666</a></td></tr
><tr id="gr_svn445_1667"

><td id="1667"><a href="#1667">1667</a></td></tr
><tr id="gr_svn445_1668"

><td id="1668"><a href="#1668">1668</a></td></tr
><tr id="gr_svn445_1669"

><td id="1669"><a href="#1669">1669</a></td></tr
><tr id="gr_svn445_1670"

><td id="1670"><a href="#1670">1670</a></td></tr
><tr id="gr_svn445_1671"

><td id="1671"><a href="#1671">1671</a></td></tr
><tr id="gr_svn445_1672"

><td id="1672"><a href="#1672">1672</a></td></tr
><tr id="gr_svn445_1673"

><td id="1673"><a href="#1673">1673</a></td></tr
><tr id="gr_svn445_1674"

><td id="1674"><a href="#1674">1674</a></td></tr
><tr id="gr_svn445_1675"

><td id="1675"><a href="#1675">1675</a></td></tr
><tr id="gr_svn445_1676"

><td id="1676"><a href="#1676">1676</a></td></tr
><tr id="gr_svn445_1677"

><td id="1677"><a href="#1677">1677</a></td></tr
><tr id="gr_svn445_1678"

><td id="1678"><a href="#1678">1678</a></td></tr
><tr id="gr_svn445_1679"

><td id="1679"><a href="#1679">1679</a></td></tr
><tr id="gr_svn445_1680"

><td id="1680"><a href="#1680">1680</a></td></tr
><tr id="gr_svn445_1681"

><td id="1681"><a href="#1681">1681</a></td></tr
><tr id="gr_svn445_1682"

><td id="1682"><a href="#1682">1682</a></td></tr
><tr id="gr_svn445_1683"

><td id="1683"><a href="#1683">1683</a></td></tr
><tr id="gr_svn445_1684"

><td id="1684"><a href="#1684">1684</a></td></tr
><tr id="gr_svn445_1685"

><td id="1685"><a href="#1685">1685</a></td></tr
><tr id="gr_svn445_1686"

><td id="1686"><a href="#1686">1686</a></td></tr
><tr id="gr_svn445_1687"

><td id="1687"><a href="#1687">1687</a></td></tr
><tr id="gr_svn445_1688"

><td id="1688"><a href="#1688">1688</a></td></tr
><tr id="gr_svn445_1689"

><td id="1689"><a href="#1689">1689</a></td></tr
><tr id="gr_svn445_1690"

><td id="1690"><a href="#1690">1690</a></td></tr
><tr id="gr_svn445_1691"

><td id="1691"><a href="#1691">1691</a></td></tr
><tr id="gr_svn445_1692"

><td id="1692"><a href="#1692">1692</a></td></tr
><tr id="gr_svn445_1693"

><td id="1693"><a href="#1693">1693</a></td></tr
><tr id="gr_svn445_1694"

><td id="1694"><a href="#1694">1694</a></td></tr
><tr id="gr_svn445_1695"

><td id="1695"><a href="#1695">1695</a></td></tr
><tr id="gr_svn445_1696"

><td id="1696"><a href="#1696">1696</a></td></tr
><tr id="gr_svn445_1697"

><td id="1697"><a href="#1697">1697</a></td></tr
><tr id="gr_svn445_1698"

><td id="1698"><a href="#1698">1698</a></td></tr
><tr id="gr_svn445_1699"

><td id="1699"><a href="#1699">1699</a></td></tr
><tr id="gr_svn445_1700"

><td id="1700"><a href="#1700">1700</a></td></tr
><tr id="gr_svn445_1701"

><td id="1701"><a href="#1701">1701</a></td></tr
><tr id="gr_svn445_1702"

><td id="1702"><a href="#1702">1702</a></td></tr
><tr id="gr_svn445_1703"

><td id="1703"><a href="#1703">1703</a></td></tr
><tr id="gr_svn445_1704"

><td id="1704"><a href="#1704">1704</a></td></tr
><tr id="gr_svn445_1705"

><td id="1705"><a href="#1705">1705</a></td></tr
><tr id="gr_svn445_1706"

><td id="1706"><a href="#1706">1706</a></td></tr
><tr id="gr_svn445_1707"

><td id="1707"><a href="#1707">1707</a></td></tr
><tr id="gr_svn445_1708"

><td id="1708"><a href="#1708">1708</a></td></tr
><tr id="gr_svn445_1709"

><td id="1709"><a href="#1709">1709</a></td></tr
><tr id="gr_svn445_1710"

><td id="1710"><a href="#1710">1710</a></td></tr
><tr id="gr_svn445_1711"

><td id="1711"><a href="#1711">1711</a></td></tr
><tr id="gr_svn445_1712"

><td id="1712"><a href="#1712">1712</a></td></tr
><tr id="gr_svn445_1713"

><td id="1713"><a href="#1713">1713</a></td></tr
><tr id="gr_svn445_1714"

><td id="1714"><a href="#1714">1714</a></td></tr
><tr id="gr_svn445_1715"

><td id="1715"><a href="#1715">1715</a></td></tr
><tr id="gr_svn445_1716"

><td id="1716"><a href="#1716">1716</a></td></tr
><tr id="gr_svn445_1717"

><td id="1717"><a href="#1717">1717</a></td></tr
><tr id="gr_svn445_1718"

><td id="1718"><a href="#1718">1718</a></td></tr
><tr id="gr_svn445_1719"

><td id="1719"><a href="#1719">1719</a></td></tr
><tr id="gr_svn445_1720"

><td id="1720"><a href="#1720">1720</a></td></tr
><tr id="gr_svn445_1721"

><td id="1721"><a href="#1721">1721</a></td></tr
><tr id="gr_svn445_1722"

><td id="1722"><a href="#1722">1722</a></td></tr
><tr id="gr_svn445_1723"

><td id="1723"><a href="#1723">1723</a></td></tr
><tr id="gr_svn445_1724"

><td id="1724"><a href="#1724">1724</a></td></tr
><tr id="gr_svn445_1725"

><td id="1725"><a href="#1725">1725</a></td></tr
><tr id="gr_svn445_1726"

><td id="1726"><a href="#1726">1726</a></td></tr
><tr id="gr_svn445_1727"

><td id="1727"><a href="#1727">1727</a></td></tr
><tr id="gr_svn445_1728"

><td id="1728"><a href="#1728">1728</a></td></tr
><tr id="gr_svn445_1729"

><td id="1729"><a href="#1729">1729</a></td></tr
><tr id="gr_svn445_1730"

><td id="1730"><a href="#1730">1730</a></td></tr
><tr id="gr_svn445_1731"

><td id="1731"><a href="#1731">1731</a></td></tr
><tr id="gr_svn445_1732"

><td id="1732"><a href="#1732">1732</a></td></tr
><tr id="gr_svn445_1733"

><td id="1733"><a href="#1733">1733</a></td></tr
><tr id="gr_svn445_1734"

><td id="1734"><a href="#1734">1734</a></td></tr
><tr id="gr_svn445_1735"

><td id="1735"><a href="#1735">1735</a></td></tr
><tr id="gr_svn445_1736"

><td id="1736"><a href="#1736">1736</a></td></tr
><tr id="gr_svn445_1737"

><td id="1737"><a href="#1737">1737</a></td></tr
><tr id="gr_svn445_1738"

><td id="1738"><a href="#1738">1738</a></td></tr
><tr id="gr_svn445_1739"

><td id="1739"><a href="#1739">1739</a></td></tr
><tr id="gr_svn445_1740"

><td id="1740"><a href="#1740">1740</a></td></tr
><tr id="gr_svn445_1741"

><td id="1741"><a href="#1741">1741</a></td></tr
><tr id="gr_svn445_1742"

><td id="1742"><a href="#1742">1742</a></td></tr
><tr id="gr_svn445_1743"

><td id="1743"><a href="#1743">1743</a></td></tr
><tr id="gr_svn445_1744"

><td id="1744"><a href="#1744">1744</a></td></tr
><tr id="gr_svn445_1745"

><td id="1745"><a href="#1745">1745</a></td></tr
><tr id="gr_svn445_1746"

><td id="1746"><a href="#1746">1746</a></td></tr
><tr id="gr_svn445_1747"

><td id="1747"><a href="#1747">1747</a></td></tr
><tr id="gr_svn445_1748"

><td id="1748"><a href="#1748">1748</a></td></tr
><tr id="gr_svn445_1749"

><td id="1749"><a href="#1749">1749</a></td></tr
><tr id="gr_svn445_1750"

><td id="1750"><a href="#1750">1750</a></td></tr
><tr id="gr_svn445_1751"

><td id="1751"><a href="#1751">1751</a></td></tr
><tr id="gr_svn445_1752"

><td id="1752"><a href="#1752">1752</a></td></tr
><tr id="gr_svn445_1753"

><td id="1753"><a href="#1753">1753</a></td></tr
><tr id="gr_svn445_1754"

><td id="1754"><a href="#1754">1754</a></td></tr
><tr id="gr_svn445_1755"

><td id="1755"><a href="#1755">1755</a></td></tr
><tr id="gr_svn445_1756"

><td id="1756"><a href="#1756">1756</a></td></tr
><tr id="gr_svn445_1757"

><td id="1757"><a href="#1757">1757</a></td></tr
><tr id="gr_svn445_1758"

><td id="1758"><a href="#1758">1758</a></td></tr
><tr id="gr_svn445_1759"

><td id="1759"><a href="#1759">1759</a></td></tr
><tr id="gr_svn445_1760"

><td id="1760"><a href="#1760">1760</a></td></tr
><tr id="gr_svn445_1761"

><td id="1761"><a href="#1761">1761</a></td></tr
><tr id="gr_svn445_1762"

><td id="1762"><a href="#1762">1762</a></td></tr
><tr id="gr_svn445_1763"

><td id="1763"><a href="#1763">1763</a></td></tr
><tr id="gr_svn445_1764"

><td id="1764"><a href="#1764">1764</a></td></tr
><tr id="gr_svn445_1765"

><td id="1765"><a href="#1765">1765</a></td></tr
><tr id="gr_svn445_1766"

><td id="1766"><a href="#1766">1766</a></td></tr
><tr id="gr_svn445_1767"

><td id="1767"><a href="#1767">1767</a></td></tr
><tr id="gr_svn445_1768"

><td id="1768"><a href="#1768">1768</a></td></tr
><tr id="gr_svn445_1769"

><td id="1769"><a href="#1769">1769</a></td></tr
><tr id="gr_svn445_1770"

><td id="1770"><a href="#1770">1770</a></td></tr
><tr id="gr_svn445_1771"

><td id="1771"><a href="#1771">1771</a></td></tr
><tr id="gr_svn445_1772"

><td id="1772"><a href="#1772">1772</a></td></tr
><tr id="gr_svn445_1773"

><td id="1773"><a href="#1773">1773</a></td></tr
><tr id="gr_svn445_1774"

><td id="1774"><a href="#1774">1774</a></td></tr
><tr id="gr_svn445_1775"

><td id="1775"><a href="#1775">1775</a></td></tr
><tr id="gr_svn445_1776"

><td id="1776"><a href="#1776">1776</a></td></tr
><tr id="gr_svn445_1777"

><td id="1777"><a href="#1777">1777</a></td></tr
><tr id="gr_svn445_1778"

><td id="1778"><a href="#1778">1778</a></td></tr
><tr id="gr_svn445_1779"

><td id="1779"><a href="#1779">1779</a></td></tr
><tr id="gr_svn445_1780"

><td id="1780"><a href="#1780">1780</a></td></tr
><tr id="gr_svn445_1781"

><td id="1781"><a href="#1781">1781</a></td></tr
><tr id="gr_svn445_1782"

><td id="1782"><a href="#1782">1782</a></td></tr
><tr id="gr_svn445_1783"

><td id="1783"><a href="#1783">1783</a></td></tr
><tr id="gr_svn445_1784"

><td id="1784"><a href="#1784">1784</a></td></tr
><tr id="gr_svn445_1785"

><td id="1785"><a href="#1785">1785</a></td></tr
><tr id="gr_svn445_1786"

><td id="1786"><a href="#1786">1786</a></td></tr
><tr id="gr_svn445_1787"

><td id="1787"><a href="#1787">1787</a></td></tr
><tr id="gr_svn445_1788"

><td id="1788"><a href="#1788">1788</a></td></tr
><tr id="gr_svn445_1789"

><td id="1789"><a href="#1789">1789</a></td></tr
><tr id="gr_svn445_1790"

><td id="1790"><a href="#1790">1790</a></td></tr
><tr id="gr_svn445_1791"

><td id="1791"><a href="#1791">1791</a></td></tr
><tr id="gr_svn445_1792"

><td id="1792"><a href="#1792">1792</a></td></tr
><tr id="gr_svn445_1793"

><td id="1793"><a href="#1793">1793</a></td></tr
><tr id="gr_svn445_1794"

><td id="1794"><a href="#1794">1794</a></td></tr
><tr id="gr_svn445_1795"

><td id="1795"><a href="#1795">1795</a></td></tr
><tr id="gr_svn445_1796"

><td id="1796"><a href="#1796">1796</a></td></tr
><tr id="gr_svn445_1797"

><td id="1797"><a href="#1797">1797</a></td></tr
><tr id="gr_svn445_1798"

><td id="1798"><a href="#1798">1798</a></td></tr
><tr id="gr_svn445_1799"

><td id="1799"><a href="#1799">1799</a></td></tr
><tr id="gr_svn445_1800"

><td id="1800"><a href="#1800">1800</a></td></tr
><tr id="gr_svn445_1801"

><td id="1801"><a href="#1801">1801</a></td></tr
><tr id="gr_svn445_1802"

><td id="1802"><a href="#1802">1802</a></td></tr
><tr id="gr_svn445_1803"

><td id="1803"><a href="#1803">1803</a></td></tr
><tr id="gr_svn445_1804"

><td id="1804"><a href="#1804">1804</a></td></tr
><tr id="gr_svn445_1805"

><td id="1805"><a href="#1805">1805</a></td></tr
><tr id="gr_svn445_1806"

><td id="1806"><a href="#1806">1806</a></td></tr
><tr id="gr_svn445_1807"

><td id="1807"><a href="#1807">1807</a></td></tr
><tr id="gr_svn445_1808"

><td id="1808"><a href="#1808">1808</a></td></tr
><tr id="gr_svn445_1809"

><td id="1809"><a href="#1809">1809</a></td></tr
><tr id="gr_svn445_1810"

><td id="1810"><a href="#1810">1810</a></td></tr
><tr id="gr_svn445_1811"

><td id="1811"><a href="#1811">1811</a></td></tr
><tr id="gr_svn445_1812"

><td id="1812"><a href="#1812">1812</a></td></tr
><tr id="gr_svn445_1813"

><td id="1813"><a href="#1813">1813</a></td></tr
><tr id="gr_svn445_1814"

><td id="1814"><a href="#1814">1814</a></td></tr
><tr id="gr_svn445_1815"

><td id="1815"><a href="#1815">1815</a></td></tr
><tr id="gr_svn445_1816"

><td id="1816"><a href="#1816">1816</a></td></tr
><tr id="gr_svn445_1817"

><td id="1817"><a href="#1817">1817</a></td></tr
><tr id="gr_svn445_1818"

><td id="1818"><a href="#1818">1818</a></td></tr
><tr id="gr_svn445_1819"

><td id="1819"><a href="#1819">1819</a></td></tr
><tr id="gr_svn445_1820"

><td id="1820"><a href="#1820">1820</a></td></tr
><tr id="gr_svn445_1821"

><td id="1821"><a href="#1821">1821</a></td></tr
><tr id="gr_svn445_1822"

><td id="1822"><a href="#1822">1822</a></td></tr
><tr id="gr_svn445_1823"

><td id="1823"><a href="#1823">1823</a></td></tr
><tr id="gr_svn445_1824"

><td id="1824"><a href="#1824">1824</a></td></tr
><tr id="gr_svn445_1825"

><td id="1825"><a href="#1825">1825</a></td></tr
><tr id="gr_svn445_1826"

><td id="1826"><a href="#1826">1826</a></td></tr
><tr id="gr_svn445_1827"

><td id="1827"><a href="#1827">1827</a></td></tr
><tr id="gr_svn445_1828"

><td id="1828"><a href="#1828">1828</a></td></tr
><tr id="gr_svn445_1829"

><td id="1829"><a href="#1829">1829</a></td></tr
><tr id="gr_svn445_1830"

><td id="1830"><a href="#1830">1830</a></td></tr
><tr id="gr_svn445_1831"

><td id="1831"><a href="#1831">1831</a></td></tr
><tr id="gr_svn445_1832"

><td id="1832"><a href="#1832">1832</a></td></tr
><tr id="gr_svn445_1833"

><td id="1833"><a href="#1833">1833</a></td></tr
><tr id="gr_svn445_1834"

><td id="1834"><a href="#1834">1834</a></td></tr
><tr id="gr_svn445_1835"

><td id="1835"><a href="#1835">1835</a></td></tr
><tr id="gr_svn445_1836"

><td id="1836"><a href="#1836">1836</a></td></tr
><tr id="gr_svn445_1837"

><td id="1837"><a href="#1837">1837</a></td></tr
><tr id="gr_svn445_1838"

><td id="1838"><a href="#1838">1838</a></td></tr
><tr id="gr_svn445_1839"

><td id="1839"><a href="#1839">1839</a></td></tr
><tr id="gr_svn445_1840"

><td id="1840"><a href="#1840">1840</a></td></tr
><tr id="gr_svn445_1841"

><td id="1841"><a href="#1841">1841</a></td></tr
><tr id="gr_svn445_1842"

><td id="1842"><a href="#1842">1842</a></td></tr
><tr id="gr_svn445_1843"

><td id="1843"><a href="#1843">1843</a></td></tr
><tr id="gr_svn445_1844"

><td id="1844"><a href="#1844">1844</a></td></tr
><tr id="gr_svn445_1845"

><td id="1845"><a href="#1845">1845</a></td></tr
><tr id="gr_svn445_1846"

><td id="1846"><a href="#1846">1846</a></td></tr
><tr id="gr_svn445_1847"

><td id="1847"><a href="#1847">1847</a></td></tr
><tr id="gr_svn445_1848"

><td id="1848"><a href="#1848">1848</a></td></tr
><tr id="gr_svn445_1849"

><td id="1849"><a href="#1849">1849</a></td></tr
><tr id="gr_svn445_1850"

><td id="1850"><a href="#1850">1850</a></td></tr
><tr id="gr_svn445_1851"

><td id="1851"><a href="#1851">1851</a></td></tr
><tr id="gr_svn445_1852"

><td id="1852"><a href="#1852">1852</a></td></tr
><tr id="gr_svn445_1853"

><td id="1853"><a href="#1853">1853</a></td></tr
><tr id="gr_svn445_1854"

><td id="1854"><a href="#1854">1854</a></td></tr
><tr id="gr_svn445_1855"

><td id="1855"><a href="#1855">1855</a></td></tr
><tr id="gr_svn445_1856"

><td id="1856"><a href="#1856">1856</a></td></tr
><tr id="gr_svn445_1857"

><td id="1857"><a href="#1857">1857</a></td></tr
><tr id="gr_svn445_1858"

><td id="1858"><a href="#1858">1858</a></td></tr
><tr id="gr_svn445_1859"

><td id="1859"><a href="#1859">1859</a></td></tr
><tr id="gr_svn445_1860"

><td id="1860"><a href="#1860">1860</a></td></tr
><tr id="gr_svn445_1861"

><td id="1861"><a href="#1861">1861</a></td></tr
><tr id="gr_svn445_1862"

><td id="1862"><a href="#1862">1862</a></td></tr
><tr id="gr_svn445_1863"

><td id="1863"><a href="#1863">1863</a></td></tr
><tr id="gr_svn445_1864"

><td id="1864"><a href="#1864">1864</a></td></tr
><tr id="gr_svn445_1865"

><td id="1865"><a href="#1865">1865</a></td></tr
><tr id="gr_svn445_1866"

><td id="1866"><a href="#1866">1866</a></td></tr
><tr id="gr_svn445_1867"

><td id="1867"><a href="#1867">1867</a></td></tr
><tr id="gr_svn445_1868"

><td id="1868"><a href="#1868">1868</a></td></tr
><tr id="gr_svn445_1869"

><td id="1869"><a href="#1869">1869</a></td></tr
><tr id="gr_svn445_1870"

><td id="1870"><a href="#1870">1870</a></td></tr
><tr id="gr_svn445_1871"

><td id="1871"><a href="#1871">1871</a></td></tr
><tr id="gr_svn445_1872"

><td id="1872"><a href="#1872">1872</a></td></tr
><tr id="gr_svn445_1873"

><td id="1873"><a href="#1873">1873</a></td></tr
><tr id="gr_svn445_1874"

><td id="1874"><a href="#1874">1874</a></td></tr
><tr id="gr_svn445_1875"

><td id="1875"><a href="#1875">1875</a></td></tr
><tr id="gr_svn445_1876"

><td id="1876"><a href="#1876">1876</a></td></tr
><tr id="gr_svn445_1877"

><td id="1877"><a href="#1877">1877</a></td></tr
><tr id="gr_svn445_1878"

><td id="1878"><a href="#1878">1878</a></td></tr
><tr id="gr_svn445_1879"

><td id="1879"><a href="#1879">1879</a></td></tr
><tr id="gr_svn445_1880"

><td id="1880"><a href="#1880">1880</a></td></tr
><tr id="gr_svn445_1881"

><td id="1881"><a href="#1881">1881</a></td></tr
><tr id="gr_svn445_1882"

><td id="1882"><a href="#1882">1882</a></td></tr
><tr id="gr_svn445_1883"

><td id="1883"><a href="#1883">1883</a></td></tr
><tr id="gr_svn445_1884"

><td id="1884"><a href="#1884">1884</a></td></tr
><tr id="gr_svn445_1885"

><td id="1885"><a href="#1885">1885</a></td></tr
><tr id="gr_svn445_1886"

><td id="1886"><a href="#1886">1886</a></td></tr
><tr id="gr_svn445_1887"

><td id="1887"><a href="#1887">1887</a></td></tr
><tr id="gr_svn445_1888"

><td id="1888"><a href="#1888">1888</a></td></tr
><tr id="gr_svn445_1889"

><td id="1889"><a href="#1889">1889</a></td></tr
><tr id="gr_svn445_1890"

><td id="1890"><a href="#1890">1890</a></td></tr
><tr id="gr_svn445_1891"

><td id="1891"><a href="#1891">1891</a></td></tr
><tr id="gr_svn445_1892"

><td id="1892"><a href="#1892">1892</a></td></tr
><tr id="gr_svn445_1893"

><td id="1893"><a href="#1893">1893</a></td></tr
><tr id="gr_svn445_1894"

><td id="1894"><a href="#1894">1894</a></td></tr
><tr id="gr_svn445_1895"

><td id="1895"><a href="#1895">1895</a></td></tr
><tr id="gr_svn445_1896"

><td id="1896"><a href="#1896">1896</a></td></tr
><tr id="gr_svn445_1897"

><td id="1897"><a href="#1897">1897</a></td></tr
><tr id="gr_svn445_1898"

><td id="1898"><a href="#1898">1898</a></td></tr
><tr id="gr_svn445_1899"

><td id="1899"><a href="#1899">1899</a></td></tr
><tr id="gr_svn445_1900"

><td id="1900"><a href="#1900">1900</a></td></tr
><tr id="gr_svn445_1901"

><td id="1901"><a href="#1901">1901</a></td></tr
><tr id="gr_svn445_1902"

><td id="1902"><a href="#1902">1902</a></td></tr
><tr id="gr_svn445_1903"

><td id="1903"><a href="#1903">1903</a></td></tr
><tr id="gr_svn445_1904"

><td id="1904"><a href="#1904">1904</a></td></tr
><tr id="gr_svn445_1905"

><td id="1905"><a href="#1905">1905</a></td></tr
><tr id="gr_svn445_1906"

><td id="1906"><a href="#1906">1906</a></td></tr
><tr id="gr_svn445_1907"

><td id="1907"><a href="#1907">1907</a></td></tr
><tr id="gr_svn445_1908"

><td id="1908"><a href="#1908">1908</a></td></tr
><tr id="gr_svn445_1909"

><td id="1909"><a href="#1909">1909</a></td></tr
><tr id="gr_svn445_1910"

><td id="1910"><a href="#1910">1910</a></td></tr
><tr id="gr_svn445_1911"

><td id="1911"><a href="#1911">1911</a></td></tr
><tr id="gr_svn445_1912"

><td id="1912"><a href="#1912">1912</a></td></tr
><tr id="gr_svn445_1913"

><td id="1913"><a href="#1913">1913</a></td></tr
><tr id="gr_svn445_1914"

><td id="1914"><a href="#1914">1914</a></td></tr
><tr id="gr_svn445_1915"

><td id="1915"><a href="#1915">1915</a></td></tr
><tr id="gr_svn445_1916"

><td id="1916"><a href="#1916">1916</a></td></tr
><tr id="gr_svn445_1917"

><td id="1917"><a href="#1917">1917</a></td></tr
><tr id="gr_svn445_1918"

><td id="1918"><a href="#1918">1918</a></td></tr
><tr id="gr_svn445_1919"

><td id="1919"><a href="#1919">1919</a></td></tr
><tr id="gr_svn445_1920"

><td id="1920"><a href="#1920">1920</a></td></tr
><tr id="gr_svn445_1921"

><td id="1921"><a href="#1921">1921</a></td></tr
><tr id="gr_svn445_1922"

><td id="1922"><a href="#1922">1922</a></td></tr
><tr id="gr_svn445_1923"

><td id="1923"><a href="#1923">1923</a></td></tr
><tr id="gr_svn445_1924"

><td id="1924"><a href="#1924">1924</a></td></tr
><tr id="gr_svn445_1925"

><td id="1925"><a href="#1925">1925</a></td></tr
><tr id="gr_svn445_1926"

><td id="1926"><a href="#1926">1926</a></td></tr
><tr id="gr_svn445_1927"

><td id="1927"><a href="#1927">1927</a></td></tr
><tr id="gr_svn445_1928"

><td id="1928"><a href="#1928">1928</a></td></tr
><tr id="gr_svn445_1929"

><td id="1929"><a href="#1929">1929</a></td></tr
><tr id="gr_svn445_1930"

><td id="1930"><a href="#1930">1930</a></td></tr
><tr id="gr_svn445_1931"

><td id="1931"><a href="#1931">1931</a></td></tr
><tr id="gr_svn445_1932"

><td id="1932"><a href="#1932">1932</a></td></tr
><tr id="gr_svn445_1933"

><td id="1933"><a href="#1933">1933</a></td></tr
><tr id="gr_svn445_1934"

><td id="1934"><a href="#1934">1934</a></td></tr
><tr id="gr_svn445_1935"

><td id="1935"><a href="#1935">1935</a></td></tr
><tr id="gr_svn445_1936"

><td id="1936"><a href="#1936">1936</a></td></tr
><tr id="gr_svn445_1937"

><td id="1937"><a href="#1937">1937</a></td></tr
><tr id="gr_svn445_1938"

><td id="1938"><a href="#1938">1938</a></td></tr
><tr id="gr_svn445_1939"

><td id="1939"><a href="#1939">1939</a></td></tr
><tr id="gr_svn445_1940"

><td id="1940"><a href="#1940">1940</a></td></tr
><tr id="gr_svn445_1941"

><td id="1941"><a href="#1941">1941</a></td></tr
><tr id="gr_svn445_1942"

><td id="1942"><a href="#1942">1942</a></td></tr
><tr id="gr_svn445_1943"

><td id="1943"><a href="#1943">1943</a></td></tr
><tr id="gr_svn445_1944"

><td id="1944"><a href="#1944">1944</a></td></tr
><tr id="gr_svn445_1945"

><td id="1945"><a href="#1945">1945</a></td></tr
><tr id="gr_svn445_1946"

><td id="1946"><a href="#1946">1946</a></td></tr
><tr id="gr_svn445_1947"

><td id="1947"><a href="#1947">1947</a></td></tr
><tr id="gr_svn445_1948"

><td id="1948"><a href="#1948">1948</a></td></tr
><tr id="gr_svn445_1949"

><td id="1949"><a href="#1949">1949</a></td></tr
><tr id="gr_svn445_1950"

><td id="1950"><a href="#1950">1950</a></td></tr
><tr id="gr_svn445_1951"

><td id="1951"><a href="#1951">1951</a></td></tr
><tr id="gr_svn445_1952"

><td id="1952"><a href="#1952">1952</a></td></tr
><tr id="gr_svn445_1953"

><td id="1953"><a href="#1953">1953</a></td></tr
><tr id="gr_svn445_1954"

><td id="1954"><a href="#1954">1954</a></td></tr
><tr id="gr_svn445_1955"

><td id="1955"><a href="#1955">1955</a></td></tr
><tr id="gr_svn445_1956"

><td id="1956"><a href="#1956">1956</a></td></tr
><tr id="gr_svn445_1957"

><td id="1957"><a href="#1957">1957</a></td></tr
><tr id="gr_svn445_1958"

><td id="1958"><a href="#1958">1958</a></td></tr
><tr id="gr_svn445_1959"

><td id="1959"><a href="#1959">1959</a></td></tr
><tr id="gr_svn445_1960"

><td id="1960"><a href="#1960">1960</a></td></tr
><tr id="gr_svn445_1961"

><td id="1961"><a href="#1961">1961</a></td></tr
><tr id="gr_svn445_1962"

><td id="1962"><a href="#1962">1962</a></td></tr
><tr id="gr_svn445_1963"

><td id="1963"><a href="#1963">1963</a></td></tr
><tr id="gr_svn445_1964"

><td id="1964"><a href="#1964">1964</a></td></tr
><tr id="gr_svn445_1965"

><td id="1965"><a href="#1965">1965</a></td></tr
><tr id="gr_svn445_1966"

><td id="1966"><a href="#1966">1966</a></td></tr
><tr id="gr_svn445_1967"

><td id="1967"><a href="#1967">1967</a></td></tr
><tr id="gr_svn445_1968"

><td id="1968"><a href="#1968">1968</a></td></tr
><tr id="gr_svn445_1969"

><td id="1969"><a href="#1969">1969</a></td></tr
><tr id="gr_svn445_1970"

><td id="1970"><a href="#1970">1970</a></td></tr
><tr id="gr_svn445_1971"

><td id="1971"><a href="#1971">1971</a></td></tr
><tr id="gr_svn445_1972"

><td id="1972"><a href="#1972">1972</a></td></tr
><tr id="gr_svn445_1973"

><td id="1973"><a href="#1973">1973</a></td></tr
><tr id="gr_svn445_1974"

><td id="1974"><a href="#1974">1974</a></td></tr
><tr id="gr_svn445_1975"

><td id="1975"><a href="#1975">1975</a></td></tr
><tr id="gr_svn445_1976"

><td id="1976"><a href="#1976">1976</a></td></tr
><tr id="gr_svn445_1977"

><td id="1977"><a href="#1977">1977</a></td></tr
><tr id="gr_svn445_1978"

><td id="1978"><a href="#1978">1978</a></td></tr
><tr id="gr_svn445_1979"

><td id="1979"><a href="#1979">1979</a></td></tr
><tr id="gr_svn445_1980"

><td id="1980"><a href="#1980">1980</a></td></tr
><tr id="gr_svn445_1981"

><td id="1981"><a href="#1981">1981</a></td></tr
><tr id="gr_svn445_1982"

><td id="1982"><a href="#1982">1982</a></td></tr
><tr id="gr_svn445_1983"

><td id="1983"><a href="#1983">1983</a></td></tr
><tr id="gr_svn445_1984"

><td id="1984"><a href="#1984">1984</a></td></tr
><tr id="gr_svn445_1985"

><td id="1985"><a href="#1985">1985</a></td></tr
><tr id="gr_svn445_1986"

><td id="1986"><a href="#1986">1986</a></td></tr
><tr id="gr_svn445_1987"

><td id="1987"><a href="#1987">1987</a></td></tr
><tr id="gr_svn445_1988"

><td id="1988"><a href="#1988">1988</a></td></tr
><tr id="gr_svn445_1989"

><td id="1989"><a href="#1989">1989</a></td></tr
><tr id="gr_svn445_1990"

><td id="1990"><a href="#1990">1990</a></td></tr
><tr id="gr_svn445_1991"

><td id="1991"><a href="#1991">1991</a></td></tr
><tr id="gr_svn445_1992"

><td id="1992"><a href="#1992">1992</a></td></tr
><tr id="gr_svn445_1993"

><td id="1993"><a href="#1993">1993</a></td></tr
><tr id="gr_svn445_1994"

><td id="1994"><a href="#1994">1994</a></td></tr
><tr id="gr_svn445_1995"

><td id="1995"><a href="#1995">1995</a></td></tr
><tr id="gr_svn445_1996"

><td id="1996"><a href="#1996">1996</a></td></tr
><tr id="gr_svn445_1997"

><td id="1997"><a href="#1997">1997</a></td></tr
><tr id="gr_svn445_1998"

><td id="1998"><a href="#1998">1998</a></td></tr
><tr id="gr_svn445_1999"

><td id="1999"><a href="#1999">1999</a></td></tr
><tr id="gr_svn445_2000"

><td id="2000"><a href="#2000">2000</a></td></tr
><tr id="gr_svn445_2001"

><td id="2001"><a href="#2001">2001</a></td></tr
><tr id="gr_svn445_2002"

><td id="2002"><a href="#2002">2002</a></td></tr
><tr id="gr_svn445_2003"

><td id="2003"><a href="#2003">2003</a></td></tr
><tr id="gr_svn445_2004"

><td id="2004"><a href="#2004">2004</a></td></tr
><tr id="gr_svn445_2005"

><td id="2005"><a href="#2005">2005</a></td></tr
><tr id="gr_svn445_2006"

><td id="2006"><a href="#2006">2006</a></td></tr
><tr id="gr_svn445_2007"

><td id="2007"><a href="#2007">2007</a></td></tr
><tr id="gr_svn445_2008"

><td id="2008"><a href="#2008">2008</a></td></tr
><tr id="gr_svn445_2009"

><td id="2009"><a href="#2009">2009</a></td></tr
><tr id="gr_svn445_2010"

><td id="2010"><a href="#2010">2010</a></td></tr
><tr id="gr_svn445_2011"

><td id="2011"><a href="#2011">2011</a></td></tr
><tr id="gr_svn445_2012"

><td id="2012"><a href="#2012">2012</a></td></tr
><tr id="gr_svn445_2013"

><td id="2013"><a href="#2013">2013</a></td></tr
><tr id="gr_svn445_2014"

><td id="2014"><a href="#2014">2014</a></td></tr
><tr id="gr_svn445_2015"

><td id="2015"><a href="#2015">2015</a></td></tr
><tr id="gr_svn445_2016"

><td id="2016"><a href="#2016">2016</a></td></tr
><tr id="gr_svn445_2017"

><td id="2017"><a href="#2017">2017</a></td></tr
><tr id="gr_svn445_2018"

><td id="2018"><a href="#2018">2018</a></td></tr
><tr id="gr_svn445_2019"

><td id="2019"><a href="#2019">2019</a></td></tr
><tr id="gr_svn445_2020"

><td id="2020"><a href="#2020">2020</a></td></tr
><tr id="gr_svn445_2021"

><td id="2021"><a href="#2021">2021</a></td></tr
><tr id="gr_svn445_2022"

><td id="2022"><a href="#2022">2022</a></td></tr
><tr id="gr_svn445_2023"

><td id="2023"><a href="#2023">2023</a></td></tr
><tr id="gr_svn445_2024"

><td id="2024"><a href="#2024">2024</a></td></tr
><tr id="gr_svn445_2025"

><td id="2025"><a href="#2025">2025</a></td></tr
><tr id="gr_svn445_2026"

><td id="2026"><a href="#2026">2026</a></td></tr
><tr id="gr_svn445_2027"

><td id="2027"><a href="#2027">2027</a></td></tr
><tr id="gr_svn445_2028"

><td id="2028"><a href="#2028">2028</a></td></tr
><tr id="gr_svn445_2029"

><td id="2029"><a href="#2029">2029</a></td></tr
><tr id="gr_svn445_2030"

><td id="2030"><a href="#2030">2030</a></td></tr
><tr id="gr_svn445_2031"

><td id="2031"><a href="#2031">2031</a></td></tr
><tr id="gr_svn445_2032"

><td id="2032"><a href="#2032">2032</a></td></tr
><tr id="gr_svn445_2033"

><td id="2033"><a href="#2033">2033</a></td></tr
><tr id="gr_svn445_2034"

><td id="2034"><a href="#2034">2034</a></td></tr
><tr id="gr_svn445_2035"

><td id="2035"><a href="#2035">2035</a></td></tr
><tr id="gr_svn445_2036"

><td id="2036"><a href="#2036">2036</a></td></tr
><tr id="gr_svn445_2037"

><td id="2037"><a href="#2037">2037</a></td></tr
><tr id="gr_svn445_2038"

><td id="2038"><a href="#2038">2038</a></td></tr
><tr id="gr_svn445_2039"

><td id="2039"><a href="#2039">2039</a></td></tr
><tr id="gr_svn445_2040"

><td id="2040"><a href="#2040">2040</a></td></tr
><tr id="gr_svn445_2041"

><td id="2041"><a href="#2041">2041</a></td></tr
><tr id="gr_svn445_2042"

><td id="2042"><a href="#2042">2042</a></td></tr
><tr id="gr_svn445_2043"

><td id="2043"><a href="#2043">2043</a></td></tr
><tr id="gr_svn445_2044"

><td id="2044"><a href="#2044">2044</a></td></tr
><tr id="gr_svn445_2045"

><td id="2045"><a href="#2045">2045</a></td></tr
><tr id="gr_svn445_2046"

><td id="2046"><a href="#2046">2046</a></td></tr
><tr id="gr_svn445_2047"

><td id="2047"><a href="#2047">2047</a></td></tr
><tr id="gr_svn445_2048"

><td id="2048"><a href="#2048">2048</a></td></tr
><tr id="gr_svn445_2049"

><td id="2049"><a href="#2049">2049</a></td></tr
><tr id="gr_svn445_2050"

><td id="2050"><a href="#2050">2050</a></td></tr
><tr id="gr_svn445_2051"

><td id="2051"><a href="#2051">2051</a></td></tr
><tr id="gr_svn445_2052"

><td id="2052"><a href="#2052">2052</a></td></tr
><tr id="gr_svn445_2053"

><td id="2053"><a href="#2053">2053</a></td></tr
><tr id="gr_svn445_2054"

><td id="2054"><a href="#2054">2054</a></td></tr
><tr id="gr_svn445_2055"

><td id="2055"><a href="#2055">2055</a></td></tr
><tr id="gr_svn445_2056"

><td id="2056"><a href="#2056">2056</a></td></tr
><tr id="gr_svn445_2057"

><td id="2057"><a href="#2057">2057</a></td></tr
><tr id="gr_svn445_2058"

><td id="2058"><a href="#2058">2058</a></td></tr
><tr id="gr_svn445_2059"

><td id="2059"><a href="#2059">2059</a></td></tr
><tr id="gr_svn445_2060"

><td id="2060"><a href="#2060">2060</a></td></tr
><tr id="gr_svn445_2061"

><td id="2061"><a href="#2061">2061</a></td></tr
><tr id="gr_svn445_2062"

><td id="2062"><a href="#2062">2062</a></td></tr
><tr id="gr_svn445_2063"

><td id="2063"><a href="#2063">2063</a></td></tr
><tr id="gr_svn445_2064"

><td id="2064"><a href="#2064">2064</a></td></tr
><tr id="gr_svn445_2065"

><td id="2065"><a href="#2065">2065</a></td></tr
><tr id="gr_svn445_2066"

><td id="2066"><a href="#2066">2066</a></td></tr
><tr id="gr_svn445_2067"

><td id="2067"><a href="#2067">2067</a></td></tr
><tr id="gr_svn445_2068"

><td id="2068"><a href="#2068">2068</a></td></tr
><tr id="gr_svn445_2069"

><td id="2069"><a href="#2069">2069</a></td></tr
><tr id="gr_svn445_2070"

><td id="2070"><a href="#2070">2070</a></td></tr
><tr id="gr_svn445_2071"

><td id="2071"><a href="#2071">2071</a></td></tr
><tr id="gr_svn445_2072"

><td id="2072"><a href="#2072">2072</a></td></tr
><tr id="gr_svn445_2073"

><td id="2073"><a href="#2073">2073</a></td></tr
><tr id="gr_svn445_2074"

><td id="2074"><a href="#2074">2074</a></td></tr
><tr id="gr_svn445_2075"

><td id="2075"><a href="#2075">2075</a></td></tr
><tr id="gr_svn445_2076"

><td id="2076"><a href="#2076">2076</a></td></tr
><tr id="gr_svn445_2077"

><td id="2077"><a href="#2077">2077</a></td></tr
><tr id="gr_svn445_2078"

><td id="2078"><a href="#2078">2078</a></td></tr
><tr id="gr_svn445_2079"

><td id="2079"><a href="#2079">2079</a></td></tr
><tr id="gr_svn445_2080"

><td id="2080"><a href="#2080">2080</a></td></tr
><tr id="gr_svn445_2081"

><td id="2081"><a href="#2081">2081</a></td></tr
><tr id="gr_svn445_2082"

><td id="2082"><a href="#2082">2082</a></td></tr
><tr id="gr_svn445_2083"

><td id="2083"><a href="#2083">2083</a></td></tr
><tr id="gr_svn445_2084"

><td id="2084"><a href="#2084">2084</a></td></tr
><tr id="gr_svn445_2085"

><td id="2085"><a href="#2085">2085</a></td></tr
><tr id="gr_svn445_2086"

><td id="2086"><a href="#2086">2086</a></td></tr
><tr id="gr_svn445_2087"

><td id="2087"><a href="#2087">2087</a></td></tr
><tr id="gr_svn445_2088"

><td id="2088"><a href="#2088">2088</a></td></tr
><tr id="gr_svn445_2089"

><td id="2089"><a href="#2089">2089</a></td></tr
><tr id="gr_svn445_2090"

><td id="2090"><a href="#2090">2090</a></td></tr
><tr id="gr_svn445_2091"

><td id="2091"><a href="#2091">2091</a></td></tr
><tr id="gr_svn445_2092"

><td id="2092"><a href="#2092">2092</a></td></tr
><tr id="gr_svn445_2093"

><td id="2093"><a href="#2093">2093</a></td></tr
><tr id="gr_svn445_2094"

><td id="2094"><a href="#2094">2094</a></td></tr
><tr id="gr_svn445_2095"

><td id="2095"><a href="#2095">2095</a></td></tr
><tr id="gr_svn445_2096"

><td id="2096"><a href="#2096">2096</a></td></tr
><tr id="gr_svn445_2097"

><td id="2097"><a href="#2097">2097</a></td></tr
><tr id="gr_svn445_2098"

><td id="2098"><a href="#2098">2098</a></td></tr
><tr id="gr_svn445_2099"

><td id="2099"><a href="#2099">2099</a></td></tr
><tr id="gr_svn445_2100"

><td id="2100"><a href="#2100">2100</a></td></tr
><tr id="gr_svn445_2101"

><td id="2101"><a href="#2101">2101</a></td></tr
><tr id="gr_svn445_2102"

><td id="2102"><a href="#2102">2102</a></td></tr
><tr id="gr_svn445_2103"

><td id="2103"><a href="#2103">2103</a></td></tr
><tr id="gr_svn445_2104"

><td id="2104"><a href="#2104">2104</a></td></tr
><tr id="gr_svn445_2105"

><td id="2105"><a href="#2105">2105</a></td></tr
><tr id="gr_svn445_2106"

><td id="2106"><a href="#2106">2106</a></td></tr
><tr id="gr_svn445_2107"

><td id="2107"><a href="#2107">2107</a></td></tr
><tr id="gr_svn445_2108"

><td id="2108"><a href="#2108">2108</a></td></tr
><tr id="gr_svn445_2109"

><td id="2109"><a href="#2109">2109</a></td></tr
><tr id="gr_svn445_2110"

><td id="2110"><a href="#2110">2110</a></td></tr
><tr id="gr_svn445_2111"

><td id="2111"><a href="#2111">2111</a></td></tr
><tr id="gr_svn445_2112"

><td id="2112"><a href="#2112">2112</a></td></tr
><tr id="gr_svn445_2113"

><td id="2113"><a href="#2113">2113</a></td></tr
><tr id="gr_svn445_2114"

><td id="2114"><a href="#2114">2114</a></td></tr
><tr id="gr_svn445_2115"

><td id="2115"><a href="#2115">2115</a></td></tr
><tr id="gr_svn445_2116"

><td id="2116"><a href="#2116">2116</a></td></tr
><tr id="gr_svn445_2117"

><td id="2117"><a href="#2117">2117</a></td></tr
><tr id="gr_svn445_2118"

><td id="2118"><a href="#2118">2118</a></td></tr
><tr id="gr_svn445_2119"

><td id="2119"><a href="#2119">2119</a></td></tr
><tr id="gr_svn445_2120"

><td id="2120"><a href="#2120">2120</a></td></tr
><tr id="gr_svn445_2121"

><td id="2121"><a href="#2121">2121</a></td></tr
><tr id="gr_svn445_2122"

><td id="2122"><a href="#2122">2122</a></td></tr
><tr id="gr_svn445_2123"

><td id="2123"><a href="#2123">2123</a></td></tr
><tr id="gr_svn445_2124"

><td id="2124"><a href="#2124">2124</a></td></tr
><tr id="gr_svn445_2125"

><td id="2125"><a href="#2125">2125</a></td></tr
><tr id="gr_svn445_2126"

><td id="2126"><a href="#2126">2126</a></td></tr
><tr id="gr_svn445_2127"

><td id="2127"><a href="#2127">2127</a></td></tr
><tr id="gr_svn445_2128"

><td id="2128"><a href="#2128">2128</a></td></tr
><tr id="gr_svn445_2129"

><td id="2129"><a href="#2129">2129</a></td></tr
><tr id="gr_svn445_2130"

><td id="2130"><a href="#2130">2130</a></td></tr
><tr id="gr_svn445_2131"

><td id="2131"><a href="#2131">2131</a></td></tr
><tr id="gr_svn445_2132"

><td id="2132"><a href="#2132">2132</a></td></tr
><tr id="gr_svn445_2133"

><td id="2133"><a href="#2133">2133</a></td></tr
><tr id="gr_svn445_2134"

><td id="2134"><a href="#2134">2134</a></td></tr
><tr id="gr_svn445_2135"

><td id="2135"><a href="#2135">2135</a></td></tr
><tr id="gr_svn445_2136"

><td id="2136"><a href="#2136">2136</a></td></tr
><tr id="gr_svn445_2137"

><td id="2137"><a href="#2137">2137</a></td></tr
><tr id="gr_svn445_2138"

><td id="2138"><a href="#2138">2138</a></td></tr
><tr id="gr_svn445_2139"

><td id="2139"><a href="#2139">2139</a></td></tr
><tr id="gr_svn445_2140"

><td id="2140"><a href="#2140">2140</a></td></tr
><tr id="gr_svn445_2141"

><td id="2141"><a href="#2141">2141</a></td></tr
><tr id="gr_svn445_2142"

><td id="2142"><a href="#2142">2142</a></td></tr
><tr id="gr_svn445_2143"

><td id="2143"><a href="#2143">2143</a></td></tr
><tr id="gr_svn445_2144"

><td id="2144"><a href="#2144">2144</a></td></tr
><tr id="gr_svn445_2145"

><td id="2145"><a href="#2145">2145</a></td></tr
><tr id="gr_svn445_2146"

><td id="2146"><a href="#2146">2146</a></td></tr
><tr id="gr_svn445_2147"

><td id="2147"><a href="#2147">2147</a></td></tr
><tr id="gr_svn445_2148"

><td id="2148"><a href="#2148">2148</a></td></tr
><tr id="gr_svn445_2149"

><td id="2149"><a href="#2149">2149</a></td></tr
><tr id="gr_svn445_2150"

><td id="2150"><a href="#2150">2150</a></td></tr
><tr id="gr_svn445_2151"

><td id="2151"><a href="#2151">2151</a></td></tr
><tr id="gr_svn445_2152"

><td id="2152"><a href="#2152">2152</a></td></tr
><tr id="gr_svn445_2153"

><td id="2153"><a href="#2153">2153</a></td></tr
><tr id="gr_svn445_2154"

><td id="2154"><a href="#2154">2154</a></td></tr
><tr id="gr_svn445_2155"

><td id="2155"><a href="#2155">2155</a></td></tr
><tr id="gr_svn445_2156"

><td id="2156"><a href="#2156">2156</a></td></tr
><tr id="gr_svn445_2157"

><td id="2157"><a href="#2157">2157</a></td></tr
><tr id="gr_svn445_2158"

><td id="2158"><a href="#2158">2158</a></td></tr
><tr id="gr_svn445_2159"

><td id="2159"><a href="#2159">2159</a></td></tr
><tr id="gr_svn445_2160"

><td id="2160"><a href="#2160">2160</a></td></tr
><tr id="gr_svn445_2161"

><td id="2161"><a href="#2161">2161</a></td></tr
><tr id="gr_svn445_2162"

><td id="2162"><a href="#2162">2162</a></td></tr
><tr id="gr_svn445_2163"

><td id="2163"><a href="#2163">2163</a></td></tr
><tr id="gr_svn445_2164"

><td id="2164"><a href="#2164">2164</a></td></tr
><tr id="gr_svn445_2165"

><td id="2165"><a href="#2165">2165</a></td></tr
><tr id="gr_svn445_2166"

><td id="2166"><a href="#2166">2166</a></td></tr
><tr id="gr_svn445_2167"

><td id="2167"><a href="#2167">2167</a></td></tr
><tr id="gr_svn445_2168"

><td id="2168"><a href="#2168">2168</a></td></tr
><tr id="gr_svn445_2169"

><td id="2169"><a href="#2169">2169</a></td></tr
><tr id="gr_svn445_2170"

><td id="2170"><a href="#2170">2170</a></td></tr
><tr id="gr_svn445_2171"

><td id="2171"><a href="#2171">2171</a></td></tr
><tr id="gr_svn445_2172"

><td id="2172"><a href="#2172">2172</a></td></tr
><tr id="gr_svn445_2173"

><td id="2173"><a href="#2173">2173</a></td></tr
><tr id="gr_svn445_2174"

><td id="2174"><a href="#2174">2174</a></td></tr
><tr id="gr_svn445_2175"

><td id="2175"><a href="#2175">2175</a></td></tr
><tr id="gr_svn445_2176"

><td id="2176"><a href="#2176">2176</a></td></tr
><tr id="gr_svn445_2177"

><td id="2177"><a href="#2177">2177</a></td></tr
><tr id="gr_svn445_2178"

><td id="2178"><a href="#2178">2178</a></td></tr
><tr id="gr_svn445_2179"

><td id="2179"><a href="#2179">2179</a></td></tr
><tr id="gr_svn445_2180"

><td id="2180"><a href="#2180">2180</a></td></tr
><tr id="gr_svn445_2181"

><td id="2181"><a href="#2181">2181</a></td></tr
><tr id="gr_svn445_2182"

><td id="2182"><a href="#2182">2182</a></td></tr
><tr id="gr_svn445_2183"

><td id="2183"><a href="#2183">2183</a></td></tr
><tr id="gr_svn445_2184"

><td id="2184"><a href="#2184">2184</a></td></tr
><tr id="gr_svn445_2185"

><td id="2185"><a href="#2185">2185</a></td></tr
><tr id="gr_svn445_2186"

><td id="2186"><a href="#2186">2186</a></td></tr
><tr id="gr_svn445_2187"

><td id="2187"><a href="#2187">2187</a></td></tr
><tr id="gr_svn445_2188"

><td id="2188"><a href="#2188">2188</a></td></tr
><tr id="gr_svn445_2189"

><td id="2189"><a href="#2189">2189</a></td></tr
><tr id="gr_svn445_2190"

><td id="2190"><a href="#2190">2190</a></td></tr
><tr id="gr_svn445_2191"

><td id="2191"><a href="#2191">2191</a></td></tr
><tr id="gr_svn445_2192"

><td id="2192"><a href="#2192">2192</a></td></tr
><tr id="gr_svn445_2193"

><td id="2193"><a href="#2193">2193</a></td></tr
><tr id="gr_svn445_2194"

><td id="2194"><a href="#2194">2194</a></td></tr
><tr id="gr_svn445_2195"

><td id="2195"><a href="#2195">2195</a></td></tr
><tr id="gr_svn445_2196"

><td id="2196"><a href="#2196">2196</a></td></tr
><tr id="gr_svn445_2197"

><td id="2197"><a href="#2197">2197</a></td></tr
><tr id="gr_svn445_2198"

><td id="2198"><a href="#2198">2198</a></td></tr
><tr id="gr_svn445_2199"

><td id="2199"><a href="#2199">2199</a></td></tr
><tr id="gr_svn445_2200"

><td id="2200"><a href="#2200">2200</a></td></tr
><tr id="gr_svn445_2201"

><td id="2201"><a href="#2201">2201</a></td></tr
><tr id="gr_svn445_2202"

><td id="2202"><a href="#2202">2202</a></td></tr
><tr id="gr_svn445_2203"

><td id="2203"><a href="#2203">2203</a></td></tr
><tr id="gr_svn445_2204"

><td id="2204"><a href="#2204">2204</a></td></tr
><tr id="gr_svn445_2205"

><td id="2205"><a href="#2205">2205</a></td></tr
><tr id="gr_svn445_2206"

><td id="2206"><a href="#2206">2206</a></td></tr
><tr id="gr_svn445_2207"

><td id="2207"><a href="#2207">2207</a></td></tr
><tr id="gr_svn445_2208"

><td id="2208"><a href="#2208">2208</a></td></tr
><tr id="gr_svn445_2209"

><td id="2209"><a href="#2209">2209</a></td></tr
><tr id="gr_svn445_2210"

><td id="2210"><a href="#2210">2210</a></td></tr
><tr id="gr_svn445_2211"

><td id="2211"><a href="#2211">2211</a></td></tr
><tr id="gr_svn445_2212"

><td id="2212"><a href="#2212">2212</a></td></tr
><tr id="gr_svn445_2213"

><td id="2213"><a href="#2213">2213</a></td></tr
><tr id="gr_svn445_2214"

><td id="2214"><a href="#2214">2214</a></td></tr
><tr id="gr_svn445_2215"

><td id="2215"><a href="#2215">2215</a></td></tr
><tr id="gr_svn445_2216"

><td id="2216"><a href="#2216">2216</a></td></tr
><tr id="gr_svn445_2217"

><td id="2217"><a href="#2217">2217</a></td></tr
><tr id="gr_svn445_2218"

><td id="2218"><a href="#2218">2218</a></td></tr
><tr id="gr_svn445_2219"

><td id="2219"><a href="#2219">2219</a></td></tr
><tr id="gr_svn445_2220"

><td id="2220"><a href="#2220">2220</a></td></tr
><tr id="gr_svn445_2221"

><td id="2221"><a href="#2221">2221</a></td></tr
><tr id="gr_svn445_2222"

><td id="2222"><a href="#2222">2222</a></td></tr
><tr id="gr_svn445_2223"

><td id="2223"><a href="#2223">2223</a></td></tr
><tr id="gr_svn445_2224"

><td id="2224"><a href="#2224">2224</a></td></tr
><tr id="gr_svn445_2225"

><td id="2225"><a href="#2225">2225</a></td></tr
><tr id="gr_svn445_2226"

><td id="2226"><a href="#2226">2226</a></td></tr
><tr id="gr_svn445_2227"

><td id="2227"><a href="#2227">2227</a></td></tr
><tr id="gr_svn445_2228"

><td id="2228"><a href="#2228">2228</a></td></tr
><tr id="gr_svn445_2229"

><td id="2229"><a href="#2229">2229</a></td></tr
><tr id="gr_svn445_2230"

><td id="2230"><a href="#2230">2230</a></td></tr
><tr id="gr_svn445_2231"

><td id="2231"><a href="#2231">2231</a></td></tr
><tr id="gr_svn445_2232"

><td id="2232"><a href="#2232">2232</a></td></tr
><tr id="gr_svn445_2233"

><td id="2233"><a href="#2233">2233</a></td></tr
><tr id="gr_svn445_2234"

><td id="2234"><a href="#2234">2234</a></td></tr
><tr id="gr_svn445_2235"

><td id="2235"><a href="#2235">2235</a></td></tr
><tr id="gr_svn445_2236"

><td id="2236"><a href="#2236">2236</a></td></tr
><tr id="gr_svn445_2237"

><td id="2237"><a href="#2237">2237</a></td></tr
><tr id="gr_svn445_2238"

><td id="2238"><a href="#2238">2238</a></td></tr
><tr id="gr_svn445_2239"

><td id="2239"><a href="#2239">2239</a></td></tr
><tr id="gr_svn445_2240"

><td id="2240"><a href="#2240">2240</a></td></tr
><tr id="gr_svn445_2241"

><td id="2241"><a href="#2241">2241</a></td></tr
><tr id="gr_svn445_2242"

><td id="2242"><a href="#2242">2242</a></td></tr
><tr id="gr_svn445_2243"

><td id="2243"><a href="#2243">2243</a></td></tr
><tr id="gr_svn445_2244"

><td id="2244"><a href="#2244">2244</a></td></tr
><tr id="gr_svn445_2245"

><td id="2245"><a href="#2245">2245</a></td></tr
><tr id="gr_svn445_2246"

><td id="2246"><a href="#2246">2246</a></td></tr
><tr id="gr_svn445_2247"

><td id="2247"><a href="#2247">2247</a></td></tr
><tr id="gr_svn445_2248"

><td id="2248"><a href="#2248">2248</a></td></tr
><tr id="gr_svn445_2249"

><td id="2249"><a href="#2249">2249</a></td></tr
><tr id="gr_svn445_2250"

><td id="2250"><a href="#2250">2250</a></td></tr
><tr id="gr_svn445_2251"

><td id="2251"><a href="#2251">2251</a></td></tr
><tr id="gr_svn445_2252"

><td id="2252"><a href="#2252">2252</a></td></tr
><tr id="gr_svn445_2253"

><td id="2253"><a href="#2253">2253</a></td></tr
><tr id="gr_svn445_2254"

><td id="2254"><a href="#2254">2254</a></td></tr
><tr id="gr_svn445_2255"

><td id="2255"><a href="#2255">2255</a></td></tr
><tr id="gr_svn445_2256"

><td id="2256"><a href="#2256">2256</a></td></tr
><tr id="gr_svn445_2257"

><td id="2257"><a href="#2257">2257</a></td></tr
><tr id="gr_svn445_2258"

><td id="2258"><a href="#2258">2258</a></td></tr
><tr id="gr_svn445_2259"

><td id="2259"><a href="#2259">2259</a></td></tr
><tr id="gr_svn445_2260"

><td id="2260"><a href="#2260">2260</a></td></tr
><tr id="gr_svn445_2261"

><td id="2261"><a href="#2261">2261</a></td></tr
><tr id="gr_svn445_2262"

><td id="2262"><a href="#2262">2262</a></td></tr
><tr id="gr_svn445_2263"

><td id="2263"><a href="#2263">2263</a></td></tr
><tr id="gr_svn445_2264"

><td id="2264"><a href="#2264">2264</a></td></tr
><tr id="gr_svn445_2265"

><td id="2265"><a href="#2265">2265</a></td></tr
><tr id="gr_svn445_2266"

><td id="2266"><a href="#2266">2266</a></td></tr
><tr id="gr_svn445_2267"

><td id="2267"><a href="#2267">2267</a></td></tr
><tr id="gr_svn445_2268"

><td id="2268"><a href="#2268">2268</a></td></tr
><tr id="gr_svn445_2269"

><td id="2269"><a href="#2269">2269</a></td></tr
><tr id="gr_svn445_2270"

><td id="2270"><a href="#2270">2270</a></td></tr
><tr id="gr_svn445_2271"

><td id="2271"><a href="#2271">2271</a></td></tr
><tr id="gr_svn445_2272"

><td id="2272"><a href="#2272">2272</a></td></tr
><tr id="gr_svn445_2273"

><td id="2273"><a href="#2273">2273</a></td></tr
><tr id="gr_svn445_2274"

><td id="2274"><a href="#2274">2274</a></td></tr
><tr id="gr_svn445_2275"

><td id="2275"><a href="#2275">2275</a></td></tr
><tr id="gr_svn445_2276"

><td id="2276"><a href="#2276">2276</a></td></tr
><tr id="gr_svn445_2277"

><td id="2277"><a href="#2277">2277</a></td></tr
><tr id="gr_svn445_2278"

><td id="2278"><a href="#2278">2278</a></td></tr
><tr id="gr_svn445_2279"

><td id="2279"><a href="#2279">2279</a></td></tr
><tr id="gr_svn445_2280"

><td id="2280"><a href="#2280">2280</a></td></tr
><tr id="gr_svn445_2281"

><td id="2281"><a href="#2281">2281</a></td></tr
><tr id="gr_svn445_2282"

><td id="2282"><a href="#2282">2282</a></td></tr
><tr id="gr_svn445_2283"

><td id="2283"><a href="#2283">2283</a></td></tr
><tr id="gr_svn445_2284"

><td id="2284"><a href="#2284">2284</a></td></tr
><tr id="gr_svn445_2285"

><td id="2285"><a href="#2285">2285</a></td></tr
><tr id="gr_svn445_2286"

><td id="2286"><a href="#2286">2286</a></td></tr
><tr id="gr_svn445_2287"

><td id="2287"><a href="#2287">2287</a></td></tr
><tr id="gr_svn445_2288"

><td id="2288"><a href="#2288">2288</a></td></tr
><tr id="gr_svn445_2289"

><td id="2289"><a href="#2289">2289</a></td></tr
><tr id="gr_svn445_2290"

><td id="2290"><a href="#2290">2290</a></td></tr
><tr id="gr_svn445_2291"

><td id="2291"><a href="#2291">2291</a></td></tr
><tr id="gr_svn445_2292"

><td id="2292"><a href="#2292">2292</a></td></tr
><tr id="gr_svn445_2293"

><td id="2293"><a href="#2293">2293</a></td></tr
><tr id="gr_svn445_2294"

><td id="2294"><a href="#2294">2294</a></td></tr
><tr id="gr_svn445_2295"

><td id="2295"><a href="#2295">2295</a></td></tr
><tr id="gr_svn445_2296"

><td id="2296"><a href="#2296">2296</a></td></tr
><tr id="gr_svn445_2297"

><td id="2297"><a href="#2297">2297</a></td></tr
><tr id="gr_svn445_2298"

><td id="2298"><a href="#2298">2298</a></td></tr
><tr id="gr_svn445_2299"

><td id="2299"><a href="#2299">2299</a></td></tr
><tr id="gr_svn445_2300"

><td id="2300"><a href="#2300">2300</a></td></tr
><tr id="gr_svn445_2301"

><td id="2301"><a href="#2301">2301</a></td></tr
><tr id="gr_svn445_2302"

><td id="2302"><a href="#2302">2302</a></td></tr
><tr id="gr_svn445_2303"

><td id="2303"><a href="#2303">2303</a></td></tr
><tr id="gr_svn445_2304"

><td id="2304"><a href="#2304">2304</a></td></tr
><tr id="gr_svn445_2305"

><td id="2305"><a href="#2305">2305</a></td></tr
><tr id="gr_svn445_2306"

><td id="2306"><a href="#2306">2306</a></td></tr
><tr id="gr_svn445_2307"

><td id="2307"><a href="#2307">2307</a></td></tr
><tr id="gr_svn445_2308"

><td id="2308"><a href="#2308">2308</a></td></tr
><tr id="gr_svn445_2309"

><td id="2309"><a href="#2309">2309</a></td></tr
><tr id="gr_svn445_2310"

><td id="2310"><a href="#2310">2310</a></td></tr
><tr id="gr_svn445_2311"

><td id="2311"><a href="#2311">2311</a></td></tr
><tr id="gr_svn445_2312"

><td id="2312"><a href="#2312">2312</a></td></tr
><tr id="gr_svn445_2313"

><td id="2313"><a href="#2313">2313</a></td></tr
><tr id="gr_svn445_2314"

><td id="2314"><a href="#2314">2314</a></td></tr
><tr id="gr_svn445_2315"

><td id="2315"><a href="#2315">2315</a></td></tr
><tr id="gr_svn445_2316"

><td id="2316"><a href="#2316">2316</a></td></tr
><tr id="gr_svn445_2317"

><td id="2317"><a href="#2317">2317</a></td></tr
><tr id="gr_svn445_2318"

><td id="2318"><a href="#2318">2318</a></td></tr
><tr id="gr_svn445_2319"

><td id="2319"><a href="#2319">2319</a></td></tr
><tr id="gr_svn445_2320"

><td id="2320"><a href="#2320">2320</a></td></tr
><tr id="gr_svn445_2321"

><td id="2321"><a href="#2321">2321</a></td></tr
><tr id="gr_svn445_2322"

><td id="2322"><a href="#2322">2322</a></td></tr
><tr id="gr_svn445_2323"

><td id="2323"><a href="#2323">2323</a></td></tr
><tr id="gr_svn445_2324"

><td id="2324"><a href="#2324">2324</a></td></tr
><tr id="gr_svn445_2325"

><td id="2325"><a href="#2325">2325</a></td></tr
><tr id="gr_svn445_2326"

><td id="2326"><a href="#2326">2326</a></td></tr
><tr id="gr_svn445_2327"

><td id="2327"><a href="#2327">2327</a></td></tr
><tr id="gr_svn445_2328"

><td id="2328"><a href="#2328">2328</a></td></tr
><tr id="gr_svn445_2329"

><td id="2329"><a href="#2329">2329</a></td></tr
><tr id="gr_svn445_2330"

><td id="2330"><a href="#2330">2330</a></td></tr
><tr id="gr_svn445_2331"

><td id="2331"><a href="#2331">2331</a></td></tr
><tr id="gr_svn445_2332"

><td id="2332"><a href="#2332">2332</a></td></tr
><tr id="gr_svn445_2333"

><td id="2333"><a href="#2333">2333</a></td></tr
><tr id="gr_svn445_2334"

><td id="2334"><a href="#2334">2334</a></td></tr
><tr id="gr_svn445_2335"

><td id="2335"><a href="#2335">2335</a></td></tr
><tr id="gr_svn445_2336"

><td id="2336"><a href="#2336">2336</a></td></tr
><tr id="gr_svn445_2337"

><td id="2337"><a href="#2337">2337</a></td></tr
><tr id="gr_svn445_2338"

><td id="2338"><a href="#2338">2338</a></td></tr
><tr id="gr_svn445_2339"

><td id="2339"><a href="#2339">2339</a></td></tr
><tr id="gr_svn445_2340"

><td id="2340"><a href="#2340">2340</a></td></tr
><tr id="gr_svn445_2341"

><td id="2341"><a href="#2341">2341</a></td></tr
><tr id="gr_svn445_2342"

><td id="2342"><a href="#2342">2342</a></td></tr
><tr id="gr_svn445_2343"

><td id="2343"><a href="#2343">2343</a></td></tr
><tr id="gr_svn445_2344"

><td id="2344"><a href="#2344">2344</a></td></tr
><tr id="gr_svn445_2345"

><td id="2345"><a href="#2345">2345</a></td></tr
><tr id="gr_svn445_2346"

><td id="2346"><a href="#2346">2346</a></td></tr
><tr id="gr_svn445_2347"

><td id="2347"><a href="#2347">2347</a></td></tr
><tr id="gr_svn445_2348"

><td id="2348"><a href="#2348">2348</a></td></tr
><tr id="gr_svn445_2349"

><td id="2349"><a href="#2349">2349</a></td></tr
><tr id="gr_svn445_2350"

><td id="2350"><a href="#2350">2350</a></td></tr
><tr id="gr_svn445_2351"

><td id="2351"><a href="#2351">2351</a></td></tr
><tr id="gr_svn445_2352"

><td id="2352"><a href="#2352">2352</a></td></tr
><tr id="gr_svn445_2353"

><td id="2353"><a href="#2353">2353</a></td></tr
><tr id="gr_svn445_2354"

><td id="2354"><a href="#2354">2354</a></td></tr
><tr id="gr_svn445_2355"

><td id="2355"><a href="#2355">2355</a></td></tr
><tr id="gr_svn445_2356"

><td id="2356"><a href="#2356">2356</a></td></tr
><tr id="gr_svn445_2357"

><td id="2357"><a href="#2357">2357</a></td></tr
><tr id="gr_svn445_2358"

><td id="2358"><a href="#2358">2358</a></td></tr
><tr id="gr_svn445_2359"

><td id="2359"><a href="#2359">2359</a></td></tr
><tr id="gr_svn445_2360"

><td id="2360"><a href="#2360">2360</a></td></tr
><tr id="gr_svn445_2361"

><td id="2361"><a href="#2361">2361</a></td></tr
><tr id="gr_svn445_2362"

><td id="2362"><a href="#2362">2362</a></td></tr
><tr id="gr_svn445_2363"

><td id="2363"><a href="#2363">2363</a></td></tr
><tr id="gr_svn445_2364"

><td id="2364"><a href="#2364">2364</a></td></tr
><tr id="gr_svn445_2365"

><td id="2365"><a href="#2365">2365</a></td></tr
><tr id="gr_svn445_2366"

><td id="2366"><a href="#2366">2366</a></td></tr
><tr id="gr_svn445_2367"

><td id="2367"><a href="#2367">2367</a></td></tr
><tr id="gr_svn445_2368"

><td id="2368"><a href="#2368">2368</a></td></tr
><tr id="gr_svn445_2369"

><td id="2369"><a href="#2369">2369</a></td></tr
><tr id="gr_svn445_2370"

><td id="2370"><a href="#2370">2370</a></td></tr
><tr id="gr_svn445_2371"

><td id="2371"><a href="#2371">2371</a></td></tr
><tr id="gr_svn445_2372"

><td id="2372"><a href="#2372">2372</a></td></tr
><tr id="gr_svn445_2373"

><td id="2373"><a href="#2373">2373</a></td></tr
><tr id="gr_svn445_2374"

><td id="2374"><a href="#2374">2374</a></td></tr
><tr id="gr_svn445_2375"

><td id="2375"><a href="#2375">2375</a></td></tr
><tr id="gr_svn445_2376"

><td id="2376"><a href="#2376">2376</a></td></tr
><tr id="gr_svn445_2377"

><td id="2377"><a href="#2377">2377</a></td></tr
><tr id="gr_svn445_2378"

><td id="2378"><a href="#2378">2378</a></td></tr
><tr id="gr_svn445_2379"

><td id="2379"><a href="#2379">2379</a></td></tr
><tr id="gr_svn445_2380"

><td id="2380"><a href="#2380">2380</a></td></tr
><tr id="gr_svn445_2381"

><td id="2381"><a href="#2381">2381</a></td></tr
><tr id="gr_svn445_2382"

><td id="2382"><a href="#2382">2382</a></td></tr
><tr id="gr_svn445_2383"

><td id="2383"><a href="#2383">2383</a></td></tr
><tr id="gr_svn445_2384"

><td id="2384"><a href="#2384">2384</a></td></tr
><tr id="gr_svn445_2385"

><td id="2385"><a href="#2385">2385</a></td></tr
><tr id="gr_svn445_2386"

><td id="2386"><a href="#2386">2386</a></td></tr
><tr id="gr_svn445_2387"

><td id="2387"><a href="#2387">2387</a></td></tr
><tr id="gr_svn445_2388"

><td id="2388"><a href="#2388">2388</a></td></tr
><tr id="gr_svn445_2389"

><td id="2389"><a href="#2389">2389</a></td></tr
><tr id="gr_svn445_2390"

><td id="2390"><a href="#2390">2390</a></td></tr
><tr id="gr_svn445_2391"

><td id="2391"><a href="#2391">2391</a></td></tr
><tr id="gr_svn445_2392"

><td id="2392"><a href="#2392">2392</a></td></tr
><tr id="gr_svn445_2393"

><td id="2393"><a href="#2393">2393</a></td></tr
><tr id="gr_svn445_2394"

><td id="2394"><a href="#2394">2394</a></td></tr
><tr id="gr_svn445_2395"

><td id="2395"><a href="#2395">2395</a></td></tr
><tr id="gr_svn445_2396"

><td id="2396"><a href="#2396">2396</a></td></tr
><tr id="gr_svn445_2397"

><td id="2397"><a href="#2397">2397</a></td></tr
><tr id="gr_svn445_2398"

><td id="2398"><a href="#2398">2398</a></td></tr
><tr id="gr_svn445_2399"

><td id="2399"><a href="#2399">2399</a></td></tr
><tr id="gr_svn445_2400"

><td id="2400"><a href="#2400">2400</a></td></tr
><tr id="gr_svn445_2401"

><td id="2401"><a href="#2401">2401</a></td></tr
><tr id="gr_svn445_2402"

><td id="2402"><a href="#2402">2402</a></td></tr
><tr id="gr_svn445_2403"

><td id="2403"><a href="#2403">2403</a></td></tr
><tr id="gr_svn445_2404"

><td id="2404"><a href="#2404">2404</a></td></tr
><tr id="gr_svn445_2405"

><td id="2405"><a href="#2405">2405</a></td></tr
><tr id="gr_svn445_2406"

><td id="2406"><a href="#2406">2406</a></td></tr
><tr id="gr_svn445_2407"

><td id="2407"><a href="#2407">2407</a></td></tr
><tr id="gr_svn445_2408"

><td id="2408"><a href="#2408">2408</a></td></tr
><tr id="gr_svn445_2409"

><td id="2409"><a href="#2409">2409</a></td></tr
><tr id="gr_svn445_2410"

><td id="2410"><a href="#2410">2410</a></td></tr
><tr id="gr_svn445_2411"

><td id="2411"><a href="#2411">2411</a></td></tr
><tr id="gr_svn445_2412"

><td id="2412"><a href="#2412">2412</a></td></tr
><tr id="gr_svn445_2413"

><td id="2413"><a href="#2413">2413</a></td></tr
><tr id="gr_svn445_2414"

><td id="2414"><a href="#2414">2414</a></td></tr
><tr id="gr_svn445_2415"

><td id="2415"><a href="#2415">2415</a></td></tr
><tr id="gr_svn445_2416"

><td id="2416"><a href="#2416">2416</a></td></tr
><tr id="gr_svn445_2417"

><td id="2417"><a href="#2417">2417</a></td></tr
><tr id="gr_svn445_2418"

><td id="2418"><a href="#2418">2418</a></td></tr
><tr id="gr_svn445_2419"

><td id="2419"><a href="#2419">2419</a></td></tr
><tr id="gr_svn445_2420"

><td id="2420"><a href="#2420">2420</a></td></tr
><tr id="gr_svn445_2421"

><td id="2421"><a href="#2421">2421</a></td></tr
><tr id="gr_svn445_2422"

><td id="2422"><a href="#2422">2422</a></td></tr
><tr id="gr_svn445_2423"

><td id="2423"><a href="#2423">2423</a></td></tr
><tr id="gr_svn445_2424"

><td id="2424"><a href="#2424">2424</a></td></tr
><tr id="gr_svn445_2425"

><td id="2425"><a href="#2425">2425</a></td></tr
><tr id="gr_svn445_2426"

><td id="2426"><a href="#2426">2426</a></td></tr
><tr id="gr_svn445_2427"

><td id="2427"><a href="#2427">2427</a></td></tr
><tr id="gr_svn445_2428"

><td id="2428"><a href="#2428">2428</a></td></tr
><tr id="gr_svn445_2429"

><td id="2429"><a href="#2429">2429</a></td></tr
><tr id="gr_svn445_2430"

><td id="2430"><a href="#2430">2430</a></td></tr
><tr id="gr_svn445_2431"

><td id="2431"><a href="#2431">2431</a></td></tr
><tr id="gr_svn445_2432"

><td id="2432"><a href="#2432">2432</a></td></tr
><tr id="gr_svn445_2433"

><td id="2433"><a href="#2433">2433</a></td></tr
><tr id="gr_svn445_2434"

><td id="2434"><a href="#2434">2434</a></td></tr
><tr id="gr_svn445_2435"

><td id="2435"><a href="#2435">2435</a></td></tr
><tr id="gr_svn445_2436"

><td id="2436"><a href="#2436">2436</a></td></tr
><tr id="gr_svn445_2437"

><td id="2437"><a href="#2437">2437</a></td></tr
><tr id="gr_svn445_2438"

><td id="2438"><a href="#2438">2438</a></td></tr
><tr id="gr_svn445_2439"

><td id="2439"><a href="#2439">2439</a></td></tr
><tr id="gr_svn445_2440"

><td id="2440"><a href="#2440">2440</a></td></tr
><tr id="gr_svn445_2441"

><td id="2441"><a href="#2441">2441</a></td></tr
><tr id="gr_svn445_2442"

><td id="2442"><a href="#2442">2442</a></td></tr
><tr id="gr_svn445_2443"

><td id="2443"><a href="#2443">2443</a></td></tr
><tr id="gr_svn445_2444"

><td id="2444"><a href="#2444">2444</a></td></tr
><tr id="gr_svn445_2445"

><td id="2445"><a href="#2445">2445</a></td></tr
><tr id="gr_svn445_2446"

><td id="2446"><a href="#2446">2446</a></td></tr
><tr id="gr_svn445_2447"

><td id="2447"><a href="#2447">2447</a></td></tr
><tr id="gr_svn445_2448"

><td id="2448"><a href="#2448">2448</a></td></tr
><tr id="gr_svn445_2449"

><td id="2449"><a href="#2449">2449</a></td></tr
><tr id="gr_svn445_2450"

><td id="2450"><a href="#2450">2450</a></td></tr
><tr id="gr_svn445_2451"

><td id="2451"><a href="#2451">2451</a></td></tr
><tr id="gr_svn445_2452"

><td id="2452"><a href="#2452">2452</a></td></tr
><tr id="gr_svn445_2453"

><td id="2453"><a href="#2453">2453</a></td></tr
><tr id="gr_svn445_2454"

><td id="2454"><a href="#2454">2454</a></td></tr
><tr id="gr_svn445_2455"

><td id="2455"><a href="#2455">2455</a></td></tr
><tr id="gr_svn445_2456"

><td id="2456"><a href="#2456">2456</a></td></tr
><tr id="gr_svn445_2457"

><td id="2457"><a href="#2457">2457</a></td></tr
><tr id="gr_svn445_2458"

><td id="2458"><a href="#2458">2458</a></td></tr
><tr id="gr_svn445_2459"

><td id="2459"><a href="#2459">2459</a></td></tr
><tr id="gr_svn445_2460"

><td id="2460"><a href="#2460">2460</a></td></tr
><tr id="gr_svn445_2461"

><td id="2461"><a href="#2461">2461</a></td></tr
><tr id="gr_svn445_2462"

><td id="2462"><a href="#2462">2462</a></td></tr
><tr id="gr_svn445_2463"

><td id="2463"><a href="#2463">2463</a></td></tr
><tr id="gr_svn445_2464"

><td id="2464"><a href="#2464">2464</a></td></tr
><tr id="gr_svn445_2465"

><td id="2465"><a href="#2465">2465</a></td></tr
><tr id="gr_svn445_2466"

><td id="2466"><a href="#2466">2466</a></td></tr
><tr id="gr_svn445_2467"

><td id="2467"><a href="#2467">2467</a></td></tr
><tr id="gr_svn445_2468"

><td id="2468"><a href="#2468">2468</a></td></tr
><tr id="gr_svn445_2469"

><td id="2469"><a href="#2469">2469</a></td></tr
><tr id="gr_svn445_2470"

><td id="2470"><a href="#2470">2470</a></td></tr
><tr id="gr_svn445_2471"

><td id="2471"><a href="#2471">2471</a></td></tr
><tr id="gr_svn445_2472"

><td id="2472"><a href="#2472">2472</a></td></tr
><tr id="gr_svn445_2473"

><td id="2473"><a href="#2473">2473</a></td></tr
><tr id="gr_svn445_2474"

><td id="2474"><a href="#2474">2474</a></td></tr
><tr id="gr_svn445_2475"

><td id="2475"><a href="#2475">2475</a></td></tr
><tr id="gr_svn445_2476"

><td id="2476"><a href="#2476">2476</a></td></tr
><tr id="gr_svn445_2477"

><td id="2477"><a href="#2477">2477</a></td></tr
><tr id="gr_svn445_2478"

><td id="2478"><a href="#2478">2478</a></td></tr
><tr id="gr_svn445_2479"

><td id="2479"><a href="#2479">2479</a></td></tr
><tr id="gr_svn445_2480"

><td id="2480"><a href="#2480">2480</a></td></tr
><tr id="gr_svn445_2481"

><td id="2481"><a href="#2481">2481</a></td></tr
><tr id="gr_svn445_2482"

><td id="2482"><a href="#2482">2482</a></td></tr
><tr id="gr_svn445_2483"

><td id="2483"><a href="#2483">2483</a></td></tr
><tr id="gr_svn445_2484"

><td id="2484"><a href="#2484">2484</a></td></tr
><tr id="gr_svn445_2485"

><td id="2485"><a href="#2485">2485</a></td></tr
><tr id="gr_svn445_2486"

><td id="2486"><a href="#2486">2486</a></td></tr
><tr id="gr_svn445_2487"

><td id="2487"><a href="#2487">2487</a></td></tr
><tr id="gr_svn445_2488"

><td id="2488"><a href="#2488">2488</a></td></tr
><tr id="gr_svn445_2489"

><td id="2489"><a href="#2489">2489</a></td></tr
><tr id="gr_svn445_2490"

><td id="2490"><a href="#2490">2490</a></td></tr
><tr id="gr_svn445_2491"

><td id="2491"><a href="#2491">2491</a></td></tr
><tr id="gr_svn445_2492"

><td id="2492"><a href="#2492">2492</a></td></tr
><tr id="gr_svn445_2493"

><td id="2493"><a href="#2493">2493</a></td></tr
><tr id="gr_svn445_2494"

><td id="2494"><a href="#2494">2494</a></td></tr
><tr id="gr_svn445_2495"

><td id="2495"><a href="#2495">2495</a></td></tr
><tr id="gr_svn445_2496"

><td id="2496"><a href="#2496">2496</a></td></tr
><tr id="gr_svn445_2497"

><td id="2497"><a href="#2497">2497</a></td></tr
><tr id="gr_svn445_2498"

><td id="2498"><a href="#2498">2498</a></td></tr
><tr id="gr_svn445_2499"

><td id="2499"><a href="#2499">2499</a></td></tr
><tr id="gr_svn445_2500"

><td id="2500"><a href="#2500">2500</a></td></tr
><tr id="gr_svn445_2501"

><td id="2501"><a href="#2501">2501</a></td></tr
><tr id="gr_svn445_2502"

><td id="2502"><a href="#2502">2502</a></td></tr
><tr id="gr_svn445_2503"

><td id="2503"><a href="#2503">2503</a></td></tr
><tr id="gr_svn445_2504"

><td id="2504"><a href="#2504">2504</a></td></tr
><tr id="gr_svn445_2505"

><td id="2505"><a href="#2505">2505</a></td></tr
><tr id="gr_svn445_2506"

><td id="2506"><a href="#2506">2506</a></td></tr
><tr id="gr_svn445_2507"

><td id="2507"><a href="#2507">2507</a></td></tr
><tr id="gr_svn445_2508"

><td id="2508"><a href="#2508">2508</a></td></tr
><tr id="gr_svn445_2509"

><td id="2509"><a href="#2509">2509</a></td></tr
><tr id="gr_svn445_2510"

><td id="2510"><a href="#2510">2510</a></td></tr
><tr id="gr_svn445_2511"

><td id="2511"><a href="#2511">2511</a></td></tr
><tr id="gr_svn445_2512"

><td id="2512"><a href="#2512">2512</a></td></tr
><tr id="gr_svn445_2513"

><td id="2513"><a href="#2513">2513</a></td></tr
><tr id="gr_svn445_2514"

><td id="2514"><a href="#2514">2514</a></td></tr
><tr id="gr_svn445_2515"

><td id="2515"><a href="#2515">2515</a></td></tr
><tr id="gr_svn445_2516"

><td id="2516"><a href="#2516">2516</a></td></tr
><tr id="gr_svn445_2517"

><td id="2517"><a href="#2517">2517</a></td></tr
><tr id="gr_svn445_2518"

><td id="2518"><a href="#2518">2518</a></td></tr
><tr id="gr_svn445_2519"

><td id="2519"><a href="#2519">2519</a></td></tr
><tr id="gr_svn445_2520"

><td id="2520"><a href="#2520">2520</a></td></tr
><tr id="gr_svn445_2521"

><td id="2521"><a href="#2521">2521</a></td></tr
><tr id="gr_svn445_2522"

><td id="2522"><a href="#2522">2522</a></td></tr
><tr id="gr_svn445_2523"

><td id="2523"><a href="#2523">2523</a></td></tr
><tr id="gr_svn445_2524"

><td id="2524"><a href="#2524">2524</a></td></tr
><tr id="gr_svn445_2525"

><td id="2525"><a href="#2525">2525</a></td></tr
><tr id="gr_svn445_2526"

><td id="2526"><a href="#2526">2526</a></td></tr
><tr id="gr_svn445_2527"

><td id="2527"><a href="#2527">2527</a></td></tr
><tr id="gr_svn445_2528"

><td id="2528"><a href="#2528">2528</a></td></tr
><tr id="gr_svn445_2529"

><td id="2529"><a href="#2529">2529</a></td></tr
><tr id="gr_svn445_2530"

><td id="2530"><a href="#2530">2530</a></td></tr
><tr id="gr_svn445_2531"

><td id="2531"><a href="#2531">2531</a></td></tr
><tr id="gr_svn445_2532"

><td id="2532"><a href="#2532">2532</a></td></tr
><tr id="gr_svn445_2533"

><td id="2533"><a href="#2533">2533</a></td></tr
><tr id="gr_svn445_2534"

><td id="2534"><a href="#2534">2534</a></td></tr
><tr id="gr_svn445_2535"

><td id="2535"><a href="#2535">2535</a></td></tr
><tr id="gr_svn445_2536"

><td id="2536"><a href="#2536">2536</a></td></tr
><tr id="gr_svn445_2537"

><td id="2537"><a href="#2537">2537</a></td></tr
><tr id="gr_svn445_2538"

><td id="2538"><a href="#2538">2538</a></td></tr
><tr id="gr_svn445_2539"

><td id="2539"><a href="#2539">2539</a></td></tr
><tr id="gr_svn445_2540"

><td id="2540"><a href="#2540">2540</a></td></tr
><tr id="gr_svn445_2541"

><td id="2541"><a href="#2541">2541</a></td></tr
><tr id="gr_svn445_2542"

><td id="2542"><a href="#2542">2542</a></td></tr
><tr id="gr_svn445_2543"

><td id="2543"><a href="#2543">2543</a></td></tr
><tr id="gr_svn445_2544"

><td id="2544"><a href="#2544">2544</a></td></tr
><tr id="gr_svn445_2545"

><td id="2545"><a href="#2545">2545</a></td></tr
><tr id="gr_svn445_2546"

><td id="2546"><a href="#2546">2546</a></td></tr
><tr id="gr_svn445_2547"

><td id="2547"><a href="#2547">2547</a></td></tr
><tr id="gr_svn445_2548"

><td id="2548"><a href="#2548">2548</a></td></tr
><tr id="gr_svn445_2549"

><td id="2549"><a href="#2549">2549</a></td></tr
><tr id="gr_svn445_2550"

><td id="2550"><a href="#2550">2550</a></td></tr
><tr id="gr_svn445_2551"

><td id="2551"><a href="#2551">2551</a></td></tr
><tr id="gr_svn445_2552"

><td id="2552"><a href="#2552">2552</a></td></tr
><tr id="gr_svn445_2553"

><td id="2553"><a href="#2553">2553</a></td></tr
><tr id="gr_svn445_2554"

><td id="2554"><a href="#2554">2554</a></td></tr
><tr id="gr_svn445_2555"

><td id="2555"><a href="#2555">2555</a></td></tr
><tr id="gr_svn445_2556"

><td id="2556"><a href="#2556">2556</a></td></tr
><tr id="gr_svn445_2557"

><td id="2557"><a href="#2557">2557</a></td></tr
><tr id="gr_svn445_2558"

><td id="2558"><a href="#2558">2558</a></td></tr
><tr id="gr_svn445_2559"

><td id="2559"><a href="#2559">2559</a></td></tr
><tr id="gr_svn445_2560"

><td id="2560"><a href="#2560">2560</a></td></tr
><tr id="gr_svn445_2561"

><td id="2561"><a href="#2561">2561</a></td></tr
><tr id="gr_svn445_2562"

><td id="2562"><a href="#2562">2562</a></td></tr
><tr id="gr_svn445_2563"

><td id="2563"><a href="#2563">2563</a></td></tr
><tr id="gr_svn445_2564"

><td id="2564"><a href="#2564">2564</a></td></tr
><tr id="gr_svn445_2565"

><td id="2565"><a href="#2565">2565</a></td></tr
><tr id="gr_svn445_2566"

><td id="2566"><a href="#2566">2566</a></td></tr
><tr id="gr_svn445_2567"

><td id="2567"><a href="#2567">2567</a></td></tr
><tr id="gr_svn445_2568"

><td id="2568"><a href="#2568">2568</a></td></tr
><tr id="gr_svn445_2569"

><td id="2569"><a href="#2569">2569</a></td></tr
><tr id="gr_svn445_2570"

><td id="2570"><a href="#2570">2570</a></td></tr
><tr id="gr_svn445_2571"

><td id="2571"><a href="#2571">2571</a></td></tr
><tr id="gr_svn445_2572"

><td id="2572"><a href="#2572">2572</a></td></tr
><tr id="gr_svn445_2573"

><td id="2573"><a href="#2573">2573</a></td></tr
><tr id="gr_svn445_2574"

><td id="2574"><a href="#2574">2574</a></td></tr
><tr id="gr_svn445_2575"

><td id="2575"><a href="#2575">2575</a></td></tr
><tr id="gr_svn445_2576"

><td id="2576"><a href="#2576">2576</a></td></tr
><tr id="gr_svn445_2577"

><td id="2577"><a href="#2577">2577</a></td></tr
><tr id="gr_svn445_2578"

><td id="2578"><a href="#2578">2578</a></td></tr
><tr id="gr_svn445_2579"

><td id="2579"><a href="#2579">2579</a></td></tr
><tr id="gr_svn445_2580"

><td id="2580"><a href="#2580">2580</a></td></tr
><tr id="gr_svn445_2581"

><td id="2581"><a href="#2581">2581</a></td></tr
><tr id="gr_svn445_2582"

><td id="2582"><a href="#2582">2582</a></td></tr
><tr id="gr_svn445_2583"

><td id="2583"><a href="#2583">2583</a></td></tr
><tr id="gr_svn445_2584"

><td id="2584"><a href="#2584">2584</a></td></tr
><tr id="gr_svn445_2585"

><td id="2585"><a href="#2585">2585</a></td></tr
><tr id="gr_svn445_2586"

><td id="2586"><a href="#2586">2586</a></td></tr
><tr id="gr_svn445_2587"

><td id="2587"><a href="#2587">2587</a></td></tr
><tr id="gr_svn445_2588"

><td id="2588"><a href="#2588">2588</a></td></tr
><tr id="gr_svn445_2589"

><td id="2589"><a href="#2589">2589</a></td></tr
><tr id="gr_svn445_2590"

><td id="2590"><a href="#2590">2590</a></td></tr
><tr id="gr_svn445_2591"

><td id="2591"><a href="#2591">2591</a></td></tr
><tr id="gr_svn445_2592"

><td id="2592"><a href="#2592">2592</a></td></tr
><tr id="gr_svn445_2593"

><td id="2593"><a href="#2593">2593</a></td></tr
><tr id="gr_svn445_2594"

><td id="2594"><a href="#2594">2594</a></td></tr
><tr id="gr_svn445_2595"

><td id="2595"><a href="#2595">2595</a></td></tr
><tr id="gr_svn445_2596"

><td id="2596"><a href="#2596">2596</a></td></tr
><tr id="gr_svn445_2597"

><td id="2597"><a href="#2597">2597</a></td></tr
><tr id="gr_svn445_2598"

><td id="2598"><a href="#2598">2598</a></td></tr
><tr id="gr_svn445_2599"

><td id="2599"><a href="#2599">2599</a></td></tr
><tr id="gr_svn445_2600"

><td id="2600"><a href="#2600">2600</a></td></tr
><tr id="gr_svn445_2601"

><td id="2601"><a href="#2601">2601</a></td></tr
><tr id="gr_svn445_2602"

><td id="2602"><a href="#2602">2602</a></td></tr
><tr id="gr_svn445_2603"

><td id="2603"><a href="#2603">2603</a></td></tr
><tr id="gr_svn445_2604"

><td id="2604"><a href="#2604">2604</a></td></tr
><tr id="gr_svn445_2605"

><td id="2605"><a href="#2605">2605</a></td></tr
><tr id="gr_svn445_2606"

><td id="2606"><a href="#2606">2606</a></td></tr
><tr id="gr_svn445_2607"

><td id="2607"><a href="#2607">2607</a></td></tr
><tr id="gr_svn445_2608"

><td id="2608"><a href="#2608">2608</a></td></tr
><tr id="gr_svn445_2609"

><td id="2609"><a href="#2609">2609</a></td></tr
><tr id="gr_svn445_2610"

><td id="2610"><a href="#2610">2610</a></td></tr
><tr id="gr_svn445_2611"

><td id="2611"><a href="#2611">2611</a></td></tr
><tr id="gr_svn445_2612"

><td id="2612"><a href="#2612">2612</a></td></tr
><tr id="gr_svn445_2613"

><td id="2613"><a href="#2613">2613</a></td></tr
><tr id="gr_svn445_2614"

><td id="2614"><a href="#2614">2614</a></td></tr
><tr id="gr_svn445_2615"

><td id="2615"><a href="#2615">2615</a></td></tr
><tr id="gr_svn445_2616"

><td id="2616"><a href="#2616">2616</a></td></tr
><tr id="gr_svn445_2617"

><td id="2617"><a href="#2617">2617</a></td></tr
><tr id="gr_svn445_2618"

><td id="2618"><a href="#2618">2618</a></td></tr
><tr id="gr_svn445_2619"

><td id="2619"><a href="#2619">2619</a></td></tr
><tr id="gr_svn445_2620"

><td id="2620"><a href="#2620">2620</a></td></tr
><tr id="gr_svn445_2621"

><td id="2621"><a href="#2621">2621</a></td></tr
><tr id="gr_svn445_2622"

><td id="2622"><a href="#2622">2622</a></td></tr
><tr id="gr_svn445_2623"

><td id="2623"><a href="#2623">2623</a></td></tr
><tr id="gr_svn445_2624"

><td id="2624"><a href="#2624">2624</a></td></tr
><tr id="gr_svn445_2625"

><td id="2625"><a href="#2625">2625</a></td></tr
><tr id="gr_svn445_2626"

><td id="2626"><a href="#2626">2626</a></td></tr
><tr id="gr_svn445_2627"

><td id="2627"><a href="#2627">2627</a></td></tr
><tr id="gr_svn445_2628"

><td id="2628"><a href="#2628">2628</a></td></tr
><tr id="gr_svn445_2629"

><td id="2629"><a href="#2629">2629</a></td></tr
><tr id="gr_svn445_2630"

><td id="2630"><a href="#2630">2630</a></td></tr
><tr id="gr_svn445_2631"

><td id="2631"><a href="#2631">2631</a></td></tr
><tr id="gr_svn445_2632"

><td id="2632"><a href="#2632">2632</a></td></tr
><tr id="gr_svn445_2633"

><td id="2633"><a href="#2633">2633</a></td></tr
><tr id="gr_svn445_2634"

><td id="2634"><a href="#2634">2634</a></td></tr
><tr id="gr_svn445_2635"

><td id="2635"><a href="#2635">2635</a></td></tr
><tr id="gr_svn445_2636"

><td id="2636"><a href="#2636">2636</a></td></tr
><tr id="gr_svn445_2637"

><td id="2637"><a href="#2637">2637</a></td></tr
><tr id="gr_svn445_2638"

><td id="2638"><a href="#2638">2638</a></td></tr
><tr id="gr_svn445_2639"

><td id="2639"><a href="#2639">2639</a></td></tr
><tr id="gr_svn445_2640"

><td id="2640"><a href="#2640">2640</a></td></tr
><tr id="gr_svn445_2641"

><td id="2641"><a href="#2641">2641</a></td></tr
><tr id="gr_svn445_2642"

><td id="2642"><a href="#2642">2642</a></td></tr
><tr id="gr_svn445_2643"

><td id="2643"><a href="#2643">2643</a></td></tr
><tr id="gr_svn445_2644"

><td id="2644"><a href="#2644">2644</a></td></tr
><tr id="gr_svn445_2645"

><td id="2645"><a href="#2645">2645</a></td></tr
><tr id="gr_svn445_2646"

><td id="2646"><a href="#2646">2646</a></td></tr
><tr id="gr_svn445_2647"

><td id="2647"><a href="#2647">2647</a></td></tr
><tr id="gr_svn445_2648"

><td id="2648"><a href="#2648">2648</a></td></tr
><tr id="gr_svn445_2649"

><td id="2649"><a href="#2649">2649</a></td></tr
><tr id="gr_svn445_2650"

><td id="2650"><a href="#2650">2650</a></td></tr
><tr id="gr_svn445_2651"

><td id="2651"><a href="#2651">2651</a></td></tr
><tr id="gr_svn445_2652"

><td id="2652"><a href="#2652">2652</a></td></tr
><tr id="gr_svn445_2653"

><td id="2653"><a href="#2653">2653</a></td></tr
><tr id="gr_svn445_2654"

><td id="2654"><a href="#2654">2654</a></td></tr
><tr id="gr_svn445_2655"

><td id="2655"><a href="#2655">2655</a></td></tr
><tr id="gr_svn445_2656"

><td id="2656"><a href="#2656">2656</a></td></tr
><tr id="gr_svn445_2657"

><td id="2657"><a href="#2657">2657</a></td></tr
><tr id="gr_svn445_2658"

><td id="2658"><a href="#2658">2658</a></td></tr
><tr id="gr_svn445_2659"

><td id="2659"><a href="#2659">2659</a></td></tr
><tr id="gr_svn445_2660"

><td id="2660"><a href="#2660">2660</a></td></tr
><tr id="gr_svn445_2661"

><td id="2661"><a href="#2661">2661</a></td></tr
><tr id="gr_svn445_2662"

><td id="2662"><a href="#2662">2662</a></td></tr
><tr id="gr_svn445_2663"

><td id="2663"><a href="#2663">2663</a></td></tr
><tr id="gr_svn445_2664"

><td id="2664"><a href="#2664">2664</a></td></tr
><tr id="gr_svn445_2665"

><td id="2665"><a href="#2665">2665</a></td></tr
><tr id="gr_svn445_2666"

><td id="2666"><a href="#2666">2666</a></td></tr
><tr id="gr_svn445_2667"

><td id="2667"><a href="#2667">2667</a></td></tr
><tr id="gr_svn445_2668"

><td id="2668"><a href="#2668">2668</a></td></tr
><tr id="gr_svn445_2669"

><td id="2669"><a href="#2669">2669</a></td></tr
><tr id="gr_svn445_2670"

><td id="2670"><a href="#2670">2670</a></td></tr
><tr id="gr_svn445_2671"

><td id="2671"><a href="#2671">2671</a></td></tr
><tr id="gr_svn445_2672"

><td id="2672"><a href="#2672">2672</a></td></tr
><tr id="gr_svn445_2673"

><td id="2673"><a href="#2673">2673</a></td></tr
><tr id="gr_svn445_2674"

><td id="2674"><a href="#2674">2674</a></td></tr
><tr id="gr_svn445_2675"

><td id="2675"><a href="#2675">2675</a></td></tr
><tr id="gr_svn445_2676"

><td id="2676"><a href="#2676">2676</a></td></tr
><tr id="gr_svn445_2677"

><td id="2677"><a href="#2677">2677</a></td></tr
><tr id="gr_svn445_2678"

><td id="2678"><a href="#2678">2678</a></td></tr
><tr id="gr_svn445_2679"

><td id="2679"><a href="#2679">2679</a></td></tr
><tr id="gr_svn445_2680"

><td id="2680"><a href="#2680">2680</a></td></tr
><tr id="gr_svn445_2681"

><td id="2681"><a href="#2681">2681</a></td></tr
><tr id="gr_svn445_2682"

><td id="2682"><a href="#2682">2682</a></td></tr
><tr id="gr_svn445_2683"

><td id="2683"><a href="#2683">2683</a></td></tr
><tr id="gr_svn445_2684"

><td id="2684"><a href="#2684">2684</a></td></tr
><tr id="gr_svn445_2685"

><td id="2685"><a href="#2685">2685</a></td></tr
><tr id="gr_svn445_2686"

><td id="2686"><a href="#2686">2686</a></td></tr
><tr id="gr_svn445_2687"

><td id="2687"><a href="#2687">2687</a></td></tr
><tr id="gr_svn445_2688"

><td id="2688"><a href="#2688">2688</a></td></tr
><tr id="gr_svn445_2689"

><td id="2689"><a href="#2689">2689</a></td></tr
><tr id="gr_svn445_2690"

><td id="2690"><a href="#2690">2690</a></td></tr
><tr id="gr_svn445_2691"

><td id="2691"><a href="#2691">2691</a></td></tr
><tr id="gr_svn445_2692"

><td id="2692"><a href="#2692">2692</a></td></tr
><tr id="gr_svn445_2693"

><td id="2693"><a href="#2693">2693</a></td></tr
><tr id="gr_svn445_2694"

><td id="2694"><a href="#2694">2694</a></td></tr
><tr id="gr_svn445_2695"

><td id="2695"><a href="#2695">2695</a></td></tr
><tr id="gr_svn445_2696"

><td id="2696"><a href="#2696">2696</a></td></tr
><tr id="gr_svn445_2697"

><td id="2697"><a href="#2697">2697</a></td></tr
><tr id="gr_svn445_2698"

><td id="2698"><a href="#2698">2698</a></td></tr
><tr id="gr_svn445_2699"

><td id="2699"><a href="#2699">2699</a></td></tr
><tr id="gr_svn445_2700"

><td id="2700"><a href="#2700">2700</a></td></tr
><tr id="gr_svn445_2701"

><td id="2701"><a href="#2701">2701</a></td></tr
><tr id="gr_svn445_2702"

><td id="2702"><a href="#2702">2702</a></td></tr
><tr id="gr_svn445_2703"

><td id="2703"><a href="#2703">2703</a></td></tr
><tr id="gr_svn445_2704"

><td id="2704"><a href="#2704">2704</a></td></tr
><tr id="gr_svn445_2705"

><td id="2705"><a href="#2705">2705</a></td></tr
><tr id="gr_svn445_2706"

><td id="2706"><a href="#2706">2706</a></td></tr
><tr id="gr_svn445_2707"

><td id="2707"><a href="#2707">2707</a></td></tr
><tr id="gr_svn445_2708"

><td id="2708"><a href="#2708">2708</a></td></tr
><tr id="gr_svn445_2709"

><td id="2709"><a href="#2709">2709</a></td></tr
><tr id="gr_svn445_2710"

><td id="2710"><a href="#2710">2710</a></td></tr
><tr id="gr_svn445_2711"

><td id="2711"><a href="#2711">2711</a></td></tr
><tr id="gr_svn445_2712"

><td id="2712"><a href="#2712">2712</a></td></tr
><tr id="gr_svn445_2713"

><td id="2713"><a href="#2713">2713</a></td></tr
><tr id="gr_svn445_2714"

><td id="2714"><a href="#2714">2714</a></td></tr
><tr id="gr_svn445_2715"

><td id="2715"><a href="#2715">2715</a></td></tr
><tr id="gr_svn445_2716"

><td id="2716"><a href="#2716">2716</a></td></tr
><tr id="gr_svn445_2717"

><td id="2717"><a href="#2717">2717</a></td></tr
><tr id="gr_svn445_2718"

><td id="2718"><a href="#2718">2718</a></td></tr
><tr id="gr_svn445_2719"

><td id="2719"><a href="#2719">2719</a></td></tr
><tr id="gr_svn445_2720"

><td id="2720"><a href="#2720">2720</a></td></tr
><tr id="gr_svn445_2721"

><td id="2721"><a href="#2721">2721</a></td></tr
><tr id="gr_svn445_2722"

><td id="2722"><a href="#2722">2722</a></td></tr
><tr id="gr_svn445_2723"

><td id="2723"><a href="#2723">2723</a></td></tr
><tr id="gr_svn445_2724"

><td id="2724"><a href="#2724">2724</a></td></tr
><tr id="gr_svn445_2725"

><td id="2725"><a href="#2725">2725</a></td></tr
><tr id="gr_svn445_2726"

><td id="2726"><a href="#2726">2726</a></td></tr
><tr id="gr_svn445_2727"

><td id="2727"><a href="#2727">2727</a></td></tr
><tr id="gr_svn445_2728"

><td id="2728"><a href="#2728">2728</a></td></tr
><tr id="gr_svn445_2729"

><td id="2729"><a href="#2729">2729</a></td></tr
><tr id="gr_svn445_2730"

><td id="2730"><a href="#2730">2730</a></td></tr
><tr id="gr_svn445_2731"

><td id="2731"><a href="#2731">2731</a></td></tr
><tr id="gr_svn445_2732"

><td id="2732"><a href="#2732">2732</a></td></tr
><tr id="gr_svn445_2733"

><td id="2733"><a href="#2733">2733</a></td></tr
><tr id="gr_svn445_2734"

><td id="2734"><a href="#2734">2734</a></td></tr
><tr id="gr_svn445_2735"

><td id="2735"><a href="#2735">2735</a></td></tr
><tr id="gr_svn445_2736"

><td id="2736"><a href="#2736">2736</a></td></tr
><tr id="gr_svn445_2737"

><td id="2737"><a href="#2737">2737</a></td></tr
><tr id="gr_svn445_2738"

><td id="2738"><a href="#2738">2738</a></td></tr
><tr id="gr_svn445_2739"

><td id="2739"><a href="#2739">2739</a></td></tr
><tr id="gr_svn445_2740"

><td id="2740"><a href="#2740">2740</a></td></tr
><tr id="gr_svn445_2741"

><td id="2741"><a href="#2741">2741</a></td></tr
><tr id="gr_svn445_2742"

><td id="2742"><a href="#2742">2742</a></td></tr
></table></pre>
<pre><table width="100%"><tr class="nocursor"><td></td></tr></table></pre>
</td>
<td id="lines">
<pre><table width="100%"><tr class="cursor_stop cursor_hidden"><td></td></tr></table></pre>
<pre class="prettyprint "><table id="src_table_0"><tr
id=sl_svn445_1

><td class="source">&lt;?php<br></td></tr
><tr
id=sl_svn445_2

><td class="source">/*<br></td></tr
><tr
id=sl_svn445_3

><td class="source"> * Copyright 2010 Google Inc.<br></td></tr
><tr
id=sl_svn445_4

><td class="source"> *<br></td></tr
><tr
id=sl_svn445_5

><td class="source"> * Licensed under the Apache License, Version 2.0 (the &quot;License&quot;); you may not<br></td></tr
><tr
id=sl_svn445_6

><td class="source"> * use this file except in compliance with the License. You may obtain a copy of<br></td></tr
><tr
id=sl_svn445_7

><td class="source"> * the License at<br></td></tr
><tr
id=sl_svn445_8

><td class="source"> *<br></td></tr
><tr
id=sl_svn445_9

><td class="source"> * http://www.apache.org/licenses/LICENSE-2.0<br></td></tr
><tr
id=sl_svn445_10

><td class="source"> *<br></td></tr
><tr
id=sl_svn445_11

><td class="source"> * Unless required by applicable law or agreed to in writing, software<br></td></tr
><tr
id=sl_svn445_12

><td class="source"> * distributed under the License is distributed on an &quot;AS IS&quot; BASIS, WITHOUT<br></td></tr
><tr
id=sl_svn445_13

><td class="source"> * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the<br></td></tr
><tr
id=sl_svn445_14

><td class="source"> * License for the specific language governing permissions and limitations under<br></td></tr
><tr
id=sl_svn445_15

><td class="source"> * the License.<br></td></tr
><tr
id=sl_svn445_16

><td class="source"> */<br></td></tr
><tr
id=sl_svn445_17

><td class="source"><br></td></tr
><tr
id=sl_svn445_18

><td class="source"><br></td></tr
><tr
id=sl_svn445_19

><td class="source">  /**<br></td></tr
><tr
id=sl_svn445_20

><td class="source">   * The &quot;layers&quot; collection of methods.<br></td></tr
><tr
id=sl_svn445_21

><td class="source">   * Typical usage is:<br></td></tr
><tr
id=sl_svn445_22

><td class="source">   *  &lt;code&gt;<br></td></tr
><tr
id=sl_svn445_23

><td class="source">   *   $booksService = new apiBooksService(...);<br></td></tr
><tr
id=sl_svn445_24

><td class="source">   *   $layers = $booksService-&gt;layers;<br></td></tr
><tr
id=sl_svn445_25

><td class="source">   *  &lt;/code&gt;<br></td></tr
><tr
id=sl_svn445_26

><td class="source">   */<br></td></tr
><tr
id=sl_svn445_27

><td class="source">  class LayersServiceResource extends apiServiceResource {<br></td></tr
><tr
id=sl_svn445_28

><td class="source"><br></td></tr
><tr
id=sl_svn445_29

><td class="source"><br></td></tr
><tr
id=sl_svn445_30

><td class="source">    /**<br></td></tr
><tr
id=sl_svn445_31

><td class="source">     * List the layer summaries for a volume. (layers.list)<br></td></tr
><tr
id=sl_svn445_32

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_33

><td class="source">     * @param string $volumeId The volume to retrieve layers for.<br></td></tr
><tr
id=sl_svn445_34

><td class="source">     * @param array $optParams Optional parameters. Valid optional parameters are listed below.<br></td></tr
><tr
id=sl_svn445_35

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_36

><td class="source">     * @opt_param string pageToken The value of the nextToken from the previous page.<br></td></tr
><tr
id=sl_svn445_37

><td class="source">     * @opt_param string contentVersion The content version for the requested volume.<br></td></tr
><tr
id=sl_svn445_38

><td class="source">     * @opt_param string maxResults Maximum number of results to return<br></td></tr
><tr
id=sl_svn445_39

><td class="source">     * @opt_param string source String to identify the originator of this request.<br></td></tr
><tr
id=sl_svn445_40

><td class="source">     * @return Layersummaries<br></td></tr
><tr
id=sl_svn445_41

><td class="source">     */<br></td></tr
><tr
id=sl_svn445_42

><td class="source">    public function listLayers($volumeId, $optParams = array()) {<br></td></tr
><tr
id=sl_svn445_43

><td class="source">      $params = array(&#39;volumeId&#39; =&gt; $volumeId);<br></td></tr
><tr
id=sl_svn445_44

><td class="source">      $params = array_merge($params, $optParams);<br></td></tr
><tr
id=sl_svn445_45

><td class="source">      $data = $this-&gt;__call(&#39;list&#39;, array($params));<br></td></tr
><tr
id=sl_svn445_46

><td class="source">      if ($this-&gt;useObjects()) {<br></td></tr
><tr
id=sl_svn445_47

><td class="source">        return new Layersummaries($data);<br></td></tr
><tr
id=sl_svn445_48

><td class="source">      } else {<br></td></tr
><tr
id=sl_svn445_49

><td class="source">        return $data;<br></td></tr
><tr
id=sl_svn445_50

><td class="source">      }<br></td></tr
><tr
id=sl_svn445_51

><td class="source">    }<br></td></tr
><tr
id=sl_svn445_52

><td class="source">    /**<br></td></tr
><tr
id=sl_svn445_53

><td class="source">     * Gets the layer summary for a volume. (layers.get)<br></td></tr
><tr
id=sl_svn445_54

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_55

><td class="source">     * @param string $summaryId The ID for the layer to get the summary for.<br></td></tr
><tr
id=sl_svn445_56

><td class="source">     * @param array $optParams Optional parameters. Valid optional parameters are listed below.<br></td></tr
><tr
id=sl_svn445_57

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_58

><td class="source">     * @opt_param string source String to identify the originator of this request.<br></td></tr
><tr
id=sl_svn445_59

><td class="source">     * @return Layersummary<br></td></tr
><tr
id=sl_svn445_60

><td class="source">     */<br></td></tr
><tr
id=sl_svn445_61

><td class="source">    public function get($summaryId, $optParams = array()) {<br></td></tr
><tr
id=sl_svn445_62

><td class="source">      $params = array(&#39;summaryId&#39; =&gt; $summaryId);<br></td></tr
><tr
id=sl_svn445_63

><td class="source">      $params = array_merge($params, $optParams);<br></td></tr
><tr
id=sl_svn445_64

><td class="source">      $data = $this-&gt;__call(&#39;get&#39;, array($params));<br></td></tr
><tr
id=sl_svn445_65

><td class="source">      if ($this-&gt;useObjects()) {<br></td></tr
><tr
id=sl_svn445_66

><td class="source">        return new Layersummary($data);<br></td></tr
><tr
id=sl_svn445_67

><td class="source">      } else {<br></td></tr
><tr
id=sl_svn445_68

><td class="source">        return $data;<br></td></tr
><tr
id=sl_svn445_69

><td class="source">      }<br></td></tr
><tr
id=sl_svn445_70

><td class="source">    }<br></td></tr
><tr
id=sl_svn445_71

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_72

><td class="source"><br></td></tr
><tr
id=sl_svn445_73

><td class="source">  /**<br></td></tr
><tr
id=sl_svn445_74

><td class="source">   * The &quot;annotationData&quot; collection of methods.<br></td></tr
><tr
id=sl_svn445_75

><td class="source">   * Typical usage is:<br></td></tr
><tr
id=sl_svn445_76

><td class="source">   *  &lt;code&gt;<br></td></tr
><tr
id=sl_svn445_77

><td class="source">   *   $booksService = new apiBooksService(...);<br></td></tr
><tr
id=sl_svn445_78

><td class="source">   *   $annotationData = $booksService-&gt;annotationData;<br></td></tr
><tr
id=sl_svn445_79

><td class="source">   *  &lt;/code&gt;<br></td></tr
><tr
id=sl_svn445_80

><td class="source">   */<br></td></tr
><tr
id=sl_svn445_81

><td class="source">  class LayersAnnotationDataServiceResource extends apiServiceResource {<br></td></tr
><tr
id=sl_svn445_82

><td class="source"><br></td></tr
><tr
id=sl_svn445_83

><td class="source"><br></td></tr
><tr
id=sl_svn445_84

><td class="source">    /**<br></td></tr
><tr
id=sl_svn445_85

><td class="source">     * Gets the annotation data for a volume and layer. (annotationData.list)<br></td></tr
><tr
id=sl_svn445_86

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_87

><td class="source">     * @param string $volumeId The volume to retrieve annotation data for.<br></td></tr
><tr
id=sl_svn445_88

><td class="source">     * @param string $layerId The ID for the layer to get the annotation data.<br></td></tr
><tr
id=sl_svn445_89

><td class="source">     * @param string $contentVersion The content version for the requested volume.<br></td></tr
><tr
id=sl_svn445_90

><td class="source">     * @param array $optParams Optional parameters. Valid optional parameters are listed below.<br></td></tr
><tr
id=sl_svn445_91

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_92

><td class="source">     * @opt_param string source String to identify the originator of this request.<br></td></tr
><tr
id=sl_svn445_93

><td class="source">     * @opt_param string locale The locale information for the data. ISO-639-1 language and ISO-3166-1 country code. Ex: &#39;en_US&#39;.<br></td></tr
><tr
id=sl_svn445_94

><td class="source">     * @opt_param int h The requested pixel height for any images. If height is provided width must also be provided.<br></td></tr
><tr
id=sl_svn445_95

><td class="source">     * @opt_param string updatedMax RFC 3339 timestamp to restrict to items updated prior to this timestamp (exclusive).<br></td></tr
><tr
id=sl_svn445_96

><td class="source">     * @opt_param string maxResults Maximum number of results to return<br></td></tr
><tr
id=sl_svn445_97

><td class="source">     * @opt_param string annotationDataId The list of Annotation Data Ids to retrieve. Pagination is ignored if this is set.<br></td></tr
><tr
id=sl_svn445_98

><td class="source">     * @opt_param string pageToken The value of the nextToken from the previous page.<br></td></tr
><tr
id=sl_svn445_99

><td class="source">     * @opt_param int w The requested pixel width for any images. If width is provided height must also be provided.<br></td></tr
><tr
id=sl_svn445_100

><td class="source">     * @opt_param string updatedMin RFC 3339 timestamp to restrict to items updated since this timestamp (inclusive).<br></td></tr
><tr
id=sl_svn445_101

><td class="source">     * @return Annotationsdata<br></td></tr
><tr
id=sl_svn445_102

><td class="source">     */<br></td></tr
><tr
id=sl_svn445_103

><td class="source">    public function listLayersAnnotationData($volumeId, $layerId, $contentVersion, $optParams = array()) {<br></td></tr
><tr
id=sl_svn445_104

><td class="source">      $params = array(&#39;volumeId&#39; =&gt; $volumeId, &#39;layerId&#39; =&gt; $layerId, &#39;contentVersion&#39; =&gt; $contentVersion);<br></td></tr
><tr
id=sl_svn445_105

><td class="source">      $params = array_merge($params, $optParams);<br></td></tr
><tr
id=sl_svn445_106

><td class="source">      $data = $this-&gt;__call(&#39;list&#39;, array($params));<br></td></tr
><tr
id=sl_svn445_107

><td class="source">      if ($this-&gt;useObjects()) {<br></td></tr
><tr
id=sl_svn445_108

><td class="source">        return new Annotationsdata($data);<br></td></tr
><tr
id=sl_svn445_109

><td class="source">      } else {<br></td></tr
><tr
id=sl_svn445_110

><td class="source">        return $data;<br></td></tr
><tr
id=sl_svn445_111

><td class="source">      }<br></td></tr
><tr
id=sl_svn445_112

><td class="source">    }<br></td></tr
><tr
id=sl_svn445_113

><td class="source">    /**<br></td></tr
><tr
id=sl_svn445_114

><td class="source">     * Gets the annotation data. (annotationData.get)<br></td></tr
><tr
id=sl_svn445_115

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_116

><td class="source">     * @param string $volumeId The volume to retrieve annotations for.<br></td></tr
><tr
id=sl_svn445_117

><td class="source">     * @param string $layerId The ID for the layer to get the annotations.<br></td></tr
><tr
id=sl_svn445_118

><td class="source">     * @param string $annotationDataId The ID of the annotation data to retrieve.<br></td></tr
><tr
id=sl_svn445_119

><td class="source">     * @param array $optParams Optional parameters. Valid optional parameters are listed below.<br></td></tr
><tr
id=sl_svn445_120

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_121

><td class="source">     * @opt_param string locale The locale information for the data. ISO-639-1 language and ISO-3166-1 country code. Ex: &#39;en_US&#39;.<br></td></tr
><tr
id=sl_svn445_122

><td class="source">     * @opt_param int h The requested pixel height for any images. If height is provided width must also be provided.<br></td></tr
><tr
id=sl_svn445_123

><td class="source">     * @opt_param string source String to identify the originator of this request.<br></td></tr
><tr
id=sl_svn445_124

><td class="source">     * @opt_param int w The requested pixel width for any images. If width is provided height must also be provided.<br></td></tr
><tr
id=sl_svn445_125

><td class="source">     * @return Annotationdata<br></td></tr
><tr
id=sl_svn445_126

><td class="source">     */<br></td></tr
><tr
id=sl_svn445_127

><td class="source">    public function get($volumeId, $layerId, $annotationDataId, $optParams = array()) {<br></td></tr
><tr
id=sl_svn445_128

><td class="source">      $params = array(&#39;volumeId&#39; =&gt; $volumeId, &#39;layerId&#39; =&gt; $layerId, &#39;annotationDataId&#39; =&gt; $annotationDataId);<br></td></tr
><tr
id=sl_svn445_129

><td class="source">      $params = array_merge($params, $optParams);<br></td></tr
><tr
id=sl_svn445_130

><td class="source">      $data = $this-&gt;__call(&#39;get&#39;, array($params));<br></td></tr
><tr
id=sl_svn445_131

><td class="source">      if ($this-&gt;useObjects()) {<br></td></tr
><tr
id=sl_svn445_132

><td class="source">        return new Annotationdata($data);<br></td></tr
><tr
id=sl_svn445_133

><td class="source">      } else {<br></td></tr
><tr
id=sl_svn445_134

><td class="source">        return $data;<br></td></tr
><tr
id=sl_svn445_135

><td class="source">      }<br></td></tr
><tr
id=sl_svn445_136

><td class="source">    }<br></td></tr
><tr
id=sl_svn445_137

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_138

><td class="source">  /**<br></td></tr
><tr
id=sl_svn445_139

><td class="source">   * The &quot;volumeAnnotations&quot; collection of methods.<br></td></tr
><tr
id=sl_svn445_140

><td class="source">   * Typical usage is:<br></td></tr
><tr
id=sl_svn445_141

><td class="source">   *  &lt;code&gt;<br></td></tr
><tr
id=sl_svn445_142

><td class="source">   *   $booksService = new apiBooksService(...);<br></td></tr
><tr
id=sl_svn445_143

><td class="source">   *   $volumeAnnotations = $booksService-&gt;volumeAnnotations;<br></td></tr
><tr
id=sl_svn445_144

><td class="source">   *  &lt;/code&gt;<br></td></tr
><tr
id=sl_svn445_145

><td class="source">   */<br></td></tr
><tr
id=sl_svn445_146

><td class="source">  class LayersVolumeAnnotationsServiceResource extends apiServiceResource {<br></td></tr
><tr
id=sl_svn445_147

><td class="source"><br></td></tr
><tr
id=sl_svn445_148

><td class="source"><br></td></tr
><tr
id=sl_svn445_149

><td class="source">    /**<br></td></tr
><tr
id=sl_svn445_150

><td class="source">     * Gets the volume annotations for a volume and layer. (volumeAnnotations.list)<br></td></tr
><tr
id=sl_svn445_151

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_152

><td class="source">     * @param string $volumeId The volume to retrieve annotations for.<br></td></tr
><tr
id=sl_svn445_153

><td class="source">     * @param string $layerId The ID for the layer to get the annotations.<br></td></tr
><tr
id=sl_svn445_154

><td class="source">     * @param string $contentVersion The content version for the requested volume.<br></td></tr
><tr
id=sl_svn445_155

><td class="source">     * @param array $optParams Optional parameters. Valid optional parameters are listed below.<br></td></tr
><tr
id=sl_svn445_156

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_157

><td class="source">     * @opt_param bool showDeleted Set to true to return deleted annotations. updatedMin must be in the request to use this. Defaults to false.<br></td></tr
><tr
id=sl_svn445_158

><td class="source">     * @opt_param string endPosition The end position to end retrieving data from.<br></td></tr
><tr
id=sl_svn445_159

><td class="source">     * @opt_param string endOffset The end offset to end retrieving data from.<br></td></tr
><tr
id=sl_svn445_160

><td class="source">     * @opt_param string locale The locale information for the data. ISO-639-1 language and ISO-3166-1 country code. Ex: &#39;en_US&#39;.<br></td></tr
><tr
id=sl_svn445_161

><td class="source">     * @opt_param string updatedMin RFC 3339 timestamp to restrict to items updated since this timestamp (inclusive).<br></td></tr
><tr
id=sl_svn445_162

><td class="source">     * @opt_param string updatedMax RFC 3339 timestamp to restrict to items updated prior to this timestamp (exclusive).<br></td></tr
><tr
id=sl_svn445_163

><td class="source">     * @opt_param string maxResults Maximum number of results to return<br></td></tr
><tr
id=sl_svn445_164

><td class="source">     * @opt_param string pageToken The value of the nextToken from the previous page.<br></td></tr
><tr
id=sl_svn445_165

><td class="source">     * @opt_param string source String to identify the originator of this request.<br></td></tr
><tr
id=sl_svn445_166

><td class="source">     * @opt_param string startOffset The start offset to start retrieving data from.<br></td></tr
><tr
id=sl_svn445_167

><td class="source">     * @opt_param string startPosition The start position to start retrieving data from.<br></td></tr
><tr
id=sl_svn445_168

><td class="source">     * @return Volumeannotations<br></td></tr
><tr
id=sl_svn445_169

><td class="source">     */<br></td></tr
><tr
id=sl_svn445_170

><td class="source">    public function listLayersVolumeAnnotations($volumeId, $layerId, $contentVersion, $optParams = array()) {<br></td></tr
><tr
id=sl_svn445_171

><td class="source">      $params = array(&#39;volumeId&#39; =&gt; $volumeId, &#39;layerId&#39; =&gt; $layerId, &#39;contentVersion&#39; =&gt; $contentVersion);<br></td></tr
><tr
id=sl_svn445_172

><td class="source">      $params = array_merge($params, $optParams);<br></td></tr
><tr
id=sl_svn445_173

><td class="source">      $data = $this-&gt;__call(&#39;list&#39;, array($params));<br></td></tr
><tr
id=sl_svn445_174

><td class="source">      if ($this-&gt;useObjects()) {<br></td></tr
><tr
id=sl_svn445_175

><td class="source">        return new Volumeannotations($data);<br></td></tr
><tr
id=sl_svn445_176

><td class="source">      } else {<br></td></tr
><tr
id=sl_svn445_177

><td class="source">        return $data;<br></td></tr
><tr
id=sl_svn445_178

><td class="source">      }<br></td></tr
><tr
id=sl_svn445_179

><td class="source">    }<br></td></tr
><tr
id=sl_svn445_180

><td class="source">    /**<br></td></tr
><tr
id=sl_svn445_181

><td class="source">     * Gets the volume annotation. (volumeAnnotations.get)<br></td></tr
><tr
id=sl_svn445_182

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_183

><td class="source">     * @param string $volumeId The volume to retrieve annotations for.<br></td></tr
><tr
id=sl_svn445_184

><td class="source">     * @param string $layerId The ID for the layer to get the annotations.<br></td></tr
><tr
id=sl_svn445_185

><td class="source">     * @param string $annotationId The ID of the volume annotation to retrieve.<br></td></tr
><tr
id=sl_svn445_186

><td class="source">     * @param array $optParams Optional parameters. Valid optional parameters are listed below.<br></td></tr
><tr
id=sl_svn445_187

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_188

><td class="source">     * @opt_param string locale The locale information for the data. ISO-639-1 language and ISO-3166-1 country code. Ex: &#39;en_US&#39;.<br></td></tr
><tr
id=sl_svn445_189

><td class="source">     * @opt_param string source String to identify the originator of this request.<br></td></tr
><tr
id=sl_svn445_190

><td class="source">     * @return Volumeannotation<br></td></tr
><tr
id=sl_svn445_191

><td class="source">     */<br></td></tr
><tr
id=sl_svn445_192

><td class="source">    public function get($volumeId, $layerId, $annotationId, $optParams = array()) {<br></td></tr
><tr
id=sl_svn445_193

><td class="source">      $params = array(&#39;volumeId&#39; =&gt; $volumeId, &#39;layerId&#39; =&gt; $layerId, &#39;annotationId&#39; =&gt; $annotationId);<br></td></tr
><tr
id=sl_svn445_194

><td class="source">      $params = array_merge($params, $optParams);<br></td></tr
><tr
id=sl_svn445_195

><td class="source">      $data = $this-&gt;__call(&#39;get&#39;, array($params));<br></td></tr
><tr
id=sl_svn445_196

><td class="source">      if ($this-&gt;useObjects()) {<br></td></tr
><tr
id=sl_svn445_197

><td class="source">        return new Volumeannotation($data);<br></td></tr
><tr
id=sl_svn445_198

><td class="source">      } else {<br></td></tr
><tr
id=sl_svn445_199

><td class="source">        return $data;<br></td></tr
><tr
id=sl_svn445_200

><td class="source">      }<br></td></tr
><tr
id=sl_svn445_201

><td class="source">    }<br></td></tr
><tr
id=sl_svn445_202

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_203

><td class="source"><br></td></tr
><tr
id=sl_svn445_204

><td class="source">  /**<br></td></tr
><tr
id=sl_svn445_205

><td class="source">   * The &quot;bookshelves&quot; collection of methods.<br></td></tr
><tr
id=sl_svn445_206

><td class="source">   * Typical usage is:<br></td></tr
><tr
id=sl_svn445_207

><td class="source">   *  &lt;code&gt;<br></td></tr
><tr
id=sl_svn445_208

><td class="source">   *   $booksService = new apiBooksService(...);<br></td></tr
><tr
id=sl_svn445_209

><td class="source">   *   $bookshelves = $booksService-&gt;bookshelves;<br></td></tr
><tr
id=sl_svn445_210

><td class="source">   *  &lt;/code&gt;<br></td></tr
><tr
id=sl_svn445_211

><td class="source">   */<br></td></tr
><tr
id=sl_svn445_212

><td class="source">  class BookshelvesServiceResource extends apiServiceResource {<br></td></tr
><tr
id=sl_svn445_213

><td class="source"><br></td></tr
><tr
id=sl_svn445_214

><td class="source"><br></td></tr
><tr
id=sl_svn445_215

><td class="source">    /**<br></td></tr
><tr
id=sl_svn445_216

><td class="source">     * Retrieves a list of public bookshelves for the specified user. (bookshelves.list)<br></td></tr
><tr
id=sl_svn445_217

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_218

><td class="source">     * @param string $userId ID of user for whom to retrieve bookshelves.<br></td></tr
><tr
id=sl_svn445_219

><td class="source">     * @param array $optParams Optional parameters. Valid optional parameters are listed below.<br></td></tr
><tr
id=sl_svn445_220

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_221

><td class="source">     * @opt_param string source String to identify the originator of this request.<br></td></tr
><tr
id=sl_svn445_222

><td class="source">     * @return Bookshelves<br></td></tr
><tr
id=sl_svn445_223

><td class="source">     */<br></td></tr
><tr
id=sl_svn445_224

><td class="source">    public function listBookshelves($userId, $optParams = array()) {<br></td></tr
><tr
id=sl_svn445_225

><td class="source">      $params = array(&#39;userId&#39; =&gt; $userId);<br></td></tr
><tr
id=sl_svn445_226

><td class="source">      $params = array_merge($params, $optParams);<br></td></tr
><tr
id=sl_svn445_227

><td class="source">      $data = $this-&gt;__call(&#39;list&#39;, array($params));<br></td></tr
><tr
id=sl_svn445_228

><td class="source">      if ($this-&gt;useObjects()) {<br></td></tr
><tr
id=sl_svn445_229

><td class="source">        return new Bookshelves($data);<br></td></tr
><tr
id=sl_svn445_230

><td class="source">      } else {<br></td></tr
><tr
id=sl_svn445_231

><td class="source">        return $data;<br></td></tr
><tr
id=sl_svn445_232

><td class="source">      }<br></td></tr
><tr
id=sl_svn445_233

><td class="source">    }<br></td></tr
><tr
id=sl_svn445_234

><td class="source">    /**<br></td></tr
><tr
id=sl_svn445_235

><td class="source">     * Retrieves metadata for a specific bookshelf for the specified user. (bookshelves.get)<br></td></tr
><tr
id=sl_svn445_236

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_237

><td class="source">     * @param string $userId ID of user for whom to retrieve bookshelves.<br></td></tr
><tr
id=sl_svn445_238

><td class="source">     * @param string $shelf ID of bookshelf to retrieve.<br></td></tr
><tr
id=sl_svn445_239

><td class="source">     * @param array $optParams Optional parameters. Valid optional parameters are listed below.<br></td></tr
><tr
id=sl_svn445_240

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_241

><td class="source">     * @opt_param string source String to identify the originator of this request.<br></td></tr
><tr
id=sl_svn445_242

><td class="source">     * @return Bookshelf<br></td></tr
><tr
id=sl_svn445_243

><td class="source">     */<br></td></tr
><tr
id=sl_svn445_244

><td class="source">    public function get($userId, $shelf, $optParams = array()) {<br></td></tr
><tr
id=sl_svn445_245

><td class="source">      $params = array(&#39;userId&#39; =&gt; $userId, &#39;shelf&#39; =&gt; $shelf);<br></td></tr
><tr
id=sl_svn445_246

><td class="source">      $params = array_merge($params, $optParams);<br></td></tr
><tr
id=sl_svn445_247

><td class="source">      $data = $this-&gt;__call(&#39;get&#39;, array($params));<br></td></tr
><tr
id=sl_svn445_248

><td class="source">      if ($this-&gt;useObjects()) {<br></td></tr
><tr
id=sl_svn445_249

><td class="source">        return new Bookshelf($data);<br></td></tr
><tr
id=sl_svn445_250

><td class="source">      } else {<br></td></tr
><tr
id=sl_svn445_251

><td class="source">        return $data;<br></td></tr
><tr
id=sl_svn445_252

><td class="source">      }<br></td></tr
><tr
id=sl_svn445_253

><td class="source">    }<br></td></tr
><tr
id=sl_svn445_254

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_255

><td class="source"><br></td></tr
><tr
id=sl_svn445_256

><td class="source">  /**<br></td></tr
><tr
id=sl_svn445_257

><td class="source">   * The &quot;volumes&quot; collection of methods.<br></td></tr
><tr
id=sl_svn445_258

><td class="source">   * Typical usage is:<br></td></tr
><tr
id=sl_svn445_259

><td class="source">   *  &lt;code&gt;<br></td></tr
><tr
id=sl_svn445_260

><td class="source">   *   $booksService = new apiBooksService(...);<br></td></tr
><tr
id=sl_svn445_261

><td class="source">   *   $volumes = $booksService-&gt;volumes;<br></td></tr
><tr
id=sl_svn445_262

><td class="source">   *  &lt;/code&gt;<br></td></tr
><tr
id=sl_svn445_263

><td class="source">   */<br></td></tr
><tr
id=sl_svn445_264

><td class="source">  class BookshelvesVolumesServiceResource extends apiServiceResource {<br></td></tr
><tr
id=sl_svn445_265

><td class="source"><br></td></tr
><tr
id=sl_svn445_266

><td class="source"><br></td></tr
><tr
id=sl_svn445_267

><td class="source">    /**<br></td></tr
><tr
id=sl_svn445_268

><td class="source">     * Retrieves volumes in a specific bookshelf for the specified user. (volumes.list)<br></td></tr
><tr
id=sl_svn445_269

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_270

><td class="source">     * @param string $userId ID of user for whom to retrieve bookshelf volumes.<br></td></tr
><tr
id=sl_svn445_271

><td class="source">     * @param string $shelf ID of bookshelf to retrieve volumes.<br></td></tr
><tr
id=sl_svn445_272

><td class="source">     * @param array $optParams Optional parameters. Valid optional parameters are listed below.<br></td></tr
><tr
id=sl_svn445_273

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_274

><td class="source">     * @opt_param bool showPreorders Set to true to show pre-ordered books. Defaults to false.<br></td></tr
><tr
id=sl_svn445_275

><td class="source">     * @opt_param string maxResults Maximum number of results to return<br></td></tr
><tr
id=sl_svn445_276

><td class="source">     * @opt_param string source String to identify the originator of this request.<br></td></tr
><tr
id=sl_svn445_277

><td class="source">     * @opt_param string startIndex Index of the first element to return (starts at 0)<br></td></tr
><tr
id=sl_svn445_278

><td class="source">     * @return Volumes<br></td></tr
><tr
id=sl_svn445_279

><td class="source">     */<br></td></tr
><tr
id=sl_svn445_280

><td class="source">    public function listBookshelvesVolumes($userId, $shelf, $optParams = array()) {<br></td></tr
><tr
id=sl_svn445_281

><td class="source">      $params = array(&#39;userId&#39; =&gt; $userId, &#39;shelf&#39; =&gt; $shelf);<br></td></tr
><tr
id=sl_svn445_282

><td class="source">      $params = array_merge($params, $optParams);<br></td></tr
><tr
id=sl_svn445_283

><td class="source">      $data = $this-&gt;__call(&#39;list&#39;, array($params));<br></td></tr
><tr
id=sl_svn445_284

><td class="source">      if ($this-&gt;useObjects()) {<br></td></tr
><tr
id=sl_svn445_285

><td class="source">        return new Volumes($data);<br></td></tr
><tr
id=sl_svn445_286

><td class="source">      } else {<br></td></tr
><tr
id=sl_svn445_287

><td class="source">        return $data;<br></td></tr
><tr
id=sl_svn445_288

><td class="source">      }<br></td></tr
><tr
id=sl_svn445_289

><td class="source">    }<br></td></tr
><tr
id=sl_svn445_290

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_291

><td class="source"><br></td></tr
><tr
id=sl_svn445_292

><td class="source">  /**<br></td></tr
><tr
id=sl_svn445_293

><td class="source">   * The &quot;myconfig&quot; collection of methods.<br></td></tr
><tr
id=sl_svn445_294

><td class="source">   * Typical usage is:<br></td></tr
><tr
id=sl_svn445_295

><td class="source">   *  &lt;code&gt;<br></td></tr
><tr
id=sl_svn445_296

><td class="source">   *   $booksService = new apiBooksService(...);<br></td></tr
><tr
id=sl_svn445_297

><td class="source">   *   $myconfig = $booksService-&gt;myconfig;<br></td></tr
><tr
id=sl_svn445_298

><td class="source">   *  &lt;/code&gt;<br></td></tr
><tr
id=sl_svn445_299

><td class="source">   */<br></td></tr
><tr
id=sl_svn445_300

><td class="source">  class MyconfigServiceResource extends apiServiceResource {<br></td></tr
><tr
id=sl_svn445_301

><td class="source"><br></td></tr
><tr
id=sl_svn445_302

><td class="source"><br></td></tr
><tr
id=sl_svn445_303

><td class="source">    /**<br></td></tr
><tr
id=sl_svn445_304

><td class="source">     * Release downloaded content access restriction. (myconfig.releaseDownloadAccess)<br></td></tr
><tr
id=sl_svn445_305

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_306

><td class="source">     * @param string $volumeIds The volume(s) to release restrictions for.<br></td></tr
><tr
id=sl_svn445_307

><td class="source">     * @param string $cpksver The device/version ID from which to release the restriction.<br></td></tr
><tr
id=sl_svn445_308

><td class="source">     * @param array $optParams Optional parameters. Valid optional parameters are listed below.<br></td></tr
><tr
id=sl_svn445_309

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_310

><td class="source">     * @opt_param string locale ISO-639-1, ISO-3166-1 codes for message localization, i.e. en_US.<br></td></tr
><tr
id=sl_svn445_311

><td class="source">     * @opt_param string source String to identify the originator of this request.<br></td></tr
><tr
id=sl_svn445_312

><td class="source">     * @return DownloadAccesses<br></td></tr
><tr
id=sl_svn445_313

><td class="source">     */<br></td></tr
><tr
id=sl_svn445_314

><td class="source">    public function releaseDownloadAccess($volumeIds, $cpksver, $optParams = array()) {<br></td></tr
><tr
id=sl_svn445_315

><td class="source">      $params = array(&#39;volumeIds&#39; =&gt; $volumeIds, &#39;cpksver&#39; =&gt; $cpksver);<br></td></tr
><tr
id=sl_svn445_316

><td class="source">      $params = array_merge($params, $optParams);<br></td></tr
><tr
id=sl_svn445_317

><td class="source">      $data = $this-&gt;__call(&#39;releaseDownloadAccess&#39;, array($params));<br></td></tr
><tr
id=sl_svn445_318

><td class="source">      if ($this-&gt;useObjects()) {<br></td></tr
><tr
id=sl_svn445_319

><td class="source">        return new DownloadAccesses($data);<br></td></tr
><tr
id=sl_svn445_320

><td class="source">      } else {<br></td></tr
><tr
id=sl_svn445_321

><td class="source">        return $data;<br></td></tr
><tr
id=sl_svn445_322

><td class="source">      }<br></td></tr
><tr
id=sl_svn445_323

><td class="source">    }<br></td></tr
><tr
id=sl_svn445_324

><td class="source">    /**<br></td></tr
><tr
id=sl_svn445_325

><td class="source">     * Request concurrent and download access restrictions. (myconfig.requestAccess)<br></td></tr
><tr
id=sl_svn445_326

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_327

><td class="source">     * @param string $source String to identify the originator of this request.<br></td></tr
><tr
id=sl_svn445_328

><td class="source">     * @param string $volumeId The volume to request concurrent/download restrictions for.<br></td></tr
><tr
id=sl_svn445_329

><td class="source">     * @param string $nonce The client nonce value.<br></td></tr
><tr
id=sl_svn445_330

><td class="source">     * @param string $cpksver The device/version ID from which to request the restrictions.<br></td></tr
><tr
id=sl_svn445_331

><td class="source">     * @param array $optParams Optional parameters. Valid optional parameters are listed below.<br></td></tr
><tr
id=sl_svn445_332

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_333

><td class="source">     * @opt_param string locale ISO-639-1, ISO-3166-1 codes for message localization, i.e. en_US.<br></td></tr
><tr
id=sl_svn445_334

><td class="source">     * @return RequestAccess<br></td></tr
><tr
id=sl_svn445_335

><td class="source">     */<br></td></tr
><tr
id=sl_svn445_336

><td class="source">    public function requestAccess($source, $volumeId, $nonce, $cpksver, $optParams = array()) {<br></td></tr
><tr
id=sl_svn445_337

><td class="source">      $params = array(&#39;source&#39; =&gt; $source, &#39;volumeId&#39; =&gt; $volumeId, &#39;nonce&#39; =&gt; $nonce, &#39;cpksver&#39; =&gt; $cpksver);<br></td></tr
><tr
id=sl_svn445_338

><td class="source">      $params = array_merge($params, $optParams);<br></td></tr
><tr
id=sl_svn445_339

><td class="source">      $data = $this-&gt;__call(&#39;requestAccess&#39;, array($params));<br></td></tr
><tr
id=sl_svn445_340

><td class="source">      if ($this-&gt;useObjects()) {<br></td></tr
><tr
id=sl_svn445_341

><td class="source">        return new RequestAccess($data);<br></td></tr
><tr
id=sl_svn445_342

><td class="source">      } else {<br></td></tr
><tr
id=sl_svn445_343

><td class="source">        return $data;<br></td></tr
><tr
id=sl_svn445_344

><td class="source">      }<br></td></tr
><tr
id=sl_svn445_345

><td class="source">    }<br></td></tr
><tr
id=sl_svn445_346

><td class="source">    /**<br></td></tr
><tr
id=sl_svn445_347

><td class="source">     * Request downloaded content access for specified volumes on the My eBooks shelf.<br></td></tr
><tr
id=sl_svn445_348

><td class="source">     * (myconfig.syncVolumeLicenses)<br></td></tr
><tr
id=sl_svn445_349

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_350

><td class="source">     * @param string $source String to identify the originator of this request.<br></td></tr
><tr
id=sl_svn445_351

><td class="source">     * @param string $nonce The client nonce value.<br></td></tr
><tr
id=sl_svn445_352

><td class="source">     * @param string $cpksver The device/version ID from which to release the restriction.<br></td></tr
><tr
id=sl_svn445_353

><td class="source">     * @param array $optParams Optional parameters. Valid optional parameters are listed below.<br></td></tr
><tr
id=sl_svn445_354

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_355

><td class="source">     * @opt_param string locale ISO-639-1, ISO-3166-1 codes for message localization, i.e. en_US.<br></td></tr
><tr
id=sl_svn445_356

><td class="source">     * @opt_param bool showPreorders Set to true to show pre-ordered books. Defaults to false.<br></td></tr
><tr
id=sl_svn445_357

><td class="source">     * @opt_param string volumeIds The volume(s) to request download restrictions for.<br></td></tr
><tr
id=sl_svn445_358

><td class="source">     * @return Volumes<br></td></tr
><tr
id=sl_svn445_359

><td class="source">     */<br></td></tr
><tr
id=sl_svn445_360

><td class="source">    public function syncVolumeLicenses($source, $nonce, $cpksver, $optParams = array()) {<br></td></tr
><tr
id=sl_svn445_361

><td class="source">      $params = array(&#39;source&#39; =&gt; $source, &#39;nonce&#39; =&gt; $nonce, &#39;cpksver&#39; =&gt; $cpksver);<br></td></tr
><tr
id=sl_svn445_362

><td class="source">      $params = array_merge($params, $optParams);<br></td></tr
><tr
id=sl_svn445_363

><td class="source">      $data = $this-&gt;__call(&#39;syncVolumeLicenses&#39;, array($params));<br></td></tr
><tr
id=sl_svn445_364

><td class="source">      if ($this-&gt;useObjects()) {<br></td></tr
><tr
id=sl_svn445_365

><td class="source">        return new Volumes($data);<br></td></tr
><tr
id=sl_svn445_366

><td class="source">      } else {<br></td></tr
><tr
id=sl_svn445_367

><td class="source">        return $data;<br></td></tr
><tr
id=sl_svn445_368

><td class="source">      }<br></td></tr
><tr
id=sl_svn445_369

><td class="source">    }<br></td></tr
><tr
id=sl_svn445_370

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_371

><td class="source"><br></td></tr
><tr
id=sl_svn445_372

><td class="source">  /**<br></td></tr
><tr
id=sl_svn445_373

><td class="source">   * The &quot;volumes&quot; collection of methods.<br></td></tr
><tr
id=sl_svn445_374

><td class="source">   * Typical usage is:<br></td></tr
><tr
id=sl_svn445_375

><td class="source">   *  &lt;code&gt;<br></td></tr
><tr
id=sl_svn445_376

><td class="source">   *   $booksService = new apiBooksService(...);<br></td></tr
><tr
id=sl_svn445_377

><td class="source">   *   $volumes = $booksService-&gt;volumes;<br></td></tr
><tr
id=sl_svn445_378

><td class="source">   *  &lt;/code&gt;<br></td></tr
><tr
id=sl_svn445_379

><td class="source">   */<br></td></tr
><tr
id=sl_svn445_380

><td class="source">  class VolumesServiceResource extends apiServiceResource {<br></td></tr
><tr
id=sl_svn445_381

><td class="source"><br></td></tr
><tr
id=sl_svn445_382

><td class="source"><br></td></tr
><tr
id=sl_svn445_383

><td class="source">    /**<br></td></tr
><tr
id=sl_svn445_384

><td class="source">     * Performs a book search. (volumes.list)<br></td></tr
><tr
id=sl_svn445_385

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_386

><td class="source">     * @param string $q Full-text search query string.<br></td></tr
><tr
id=sl_svn445_387

><td class="source">     * @param array $optParams Optional parameters. Valid optional parameters are listed below.<br></td></tr
><tr
id=sl_svn445_388

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_389

><td class="source">     * @opt_param string orderBy Sort search results.<br></td></tr
><tr
id=sl_svn445_390

><td class="source">     * @opt_param string projection Restrict information returned to a set of selected fields.<br></td></tr
><tr
id=sl_svn445_391

><td class="source">     * @opt_param string libraryRestrict Restrict search to this user&#39;s library.<br></td></tr
><tr
id=sl_svn445_392

><td class="source">     * @opt_param string langRestrict Restrict results to books with this language code.<br></td></tr
><tr
id=sl_svn445_393

><td class="source">     * @opt_param bool showPreorders Set to true to show books available for preorder. Defaults to false.<br></td></tr
><tr
id=sl_svn445_394

><td class="source">     * @opt_param string printType Restrict to books or magazines.<br></td></tr
><tr
id=sl_svn445_395

><td class="source">     * @opt_param string maxResults Maximum number of results to return.<br></td></tr
><tr
id=sl_svn445_396

><td class="source">     * @opt_param string filter Filter search results.<br></td></tr
><tr
id=sl_svn445_397

><td class="source">     * @opt_param string source String to identify the originator of this request.<br></td></tr
><tr
id=sl_svn445_398

><td class="source">     * @opt_param string startIndex Index of the first result to return (starts at 0)<br></td></tr
><tr
id=sl_svn445_399

><td class="source">     * @opt_param string download Restrict to volumes by download availability.<br></td></tr
><tr
id=sl_svn445_400

><td class="source">     * @opt_param string partner Restrict and brand results for partner ID.<br></td></tr
><tr
id=sl_svn445_401

><td class="source">     * @return Volumes<br></td></tr
><tr
id=sl_svn445_402

><td class="source">     */<br></td></tr
><tr
id=sl_svn445_403

><td class="source">    public function listVolumes($q, $optParams = array()) {<br></td></tr
><tr
id=sl_svn445_404

><td class="source">      $params = array(&#39;q&#39; =&gt; $q);<br></td></tr
><tr
id=sl_svn445_405

><td class="source">      $params = array_merge($params, $optParams);<br></td></tr
><tr
id=sl_svn445_406

><td class="source">      $data = $this-&gt;__call(&#39;list&#39;, array($params));<br></td></tr
><tr
id=sl_svn445_407

><td class="source">      if ($this-&gt;useObjects()) {<br></td></tr
><tr
id=sl_svn445_408

><td class="source">        return new Volumes($data);<br></td></tr
><tr
id=sl_svn445_409

><td class="source">      } else {<br></td></tr
><tr
id=sl_svn445_410

><td class="source">        return $data;<br></td></tr
><tr
id=sl_svn445_411

><td class="source">      }<br></td></tr
><tr
id=sl_svn445_412

><td class="source">    }<br></td></tr
><tr
id=sl_svn445_413

><td class="source">    /**<br></td></tr
><tr
id=sl_svn445_414

><td class="source">     * Gets volume information for a single volume. (volumes.get)<br></td></tr
><tr
id=sl_svn445_415

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_416

><td class="source">     * @param string $volumeId ID of volume to retrieve.<br></td></tr
><tr
id=sl_svn445_417

><td class="source">     * @param array $optParams Optional parameters. Valid optional parameters are listed below.<br></td></tr
><tr
id=sl_svn445_418

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_419

><td class="source">     * @opt_param string partner Brand results for partner ID.<br></td></tr
><tr
id=sl_svn445_420

><td class="source">     * @opt_param string projection Restrict information returned to a set of selected fields.<br></td></tr
><tr
id=sl_svn445_421

><td class="source">     * @opt_param string source String to identify the originator of this request.<br></td></tr
><tr
id=sl_svn445_422

><td class="source">     * @return Volume<br></td></tr
><tr
id=sl_svn445_423

><td class="source">     */<br></td></tr
><tr
id=sl_svn445_424

><td class="source">    public function get($volumeId, $optParams = array()) {<br></td></tr
><tr
id=sl_svn445_425

><td class="source">      $params = array(&#39;volumeId&#39; =&gt; $volumeId);<br></td></tr
><tr
id=sl_svn445_426

><td class="source">      $params = array_merge($params, $optParams);<br></td></tr
><tr
id=sl_svn445_427

><td class="source">      $data = $this-&gt;__call(&#39;get&#39;, array($params));<br></td></tr
><tr
id=sl_svn445_428

><td class="source">      if ($this-&gt;useObjects()) {<br></td></tr
><tr
id=sl_svn445_429

><td class="source">        return new Volume($data);<br></td></tr
><tr
id=sl_svn445_430

><td class="source">      } else {<br></td></tr
><tr
id=sl_svn445_431

><td class="source">        return $data;<br></td></tr
><tr
id=sl_svn445_432

><td class="source">      }<br></td></tr
><tr
id=sl_svn445_433

><td class="source">    }<br></td></tr
><tr
id=sl_svn445_434

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_435

><td class="source"><br></td></tr
><tr
id=sl_svn445_436

><td class="source">  /**<br></td></tr
><tr
id=sl_svn445_437

><td class="source">   * The &quot;mylibrary&quot; collection of methods.<br></td></tr
><tr
id=sl_svn445_438

><td class="source">   * Typical usage is:<br></td></tr
><tr
id=sl_svn445_439

><td class="source">   *  &lt;code&gt;<br></td></tr
><tr
id=sl_svn445_440

><td class="source">   *   $booksService = new apiBooksService(...);<br></td></tr
><tr
id=sl_svn445_441

><td class="source">   *   $mylibrary = $booksService-&gt;mylibrary;<br></td></tr
><tr
id=sl_svn445_442

><td class="source">   *  &lt;/code&gt;<br></td></tr
><tr
id=sl_svn445_443

><td class="source">   */<br></td></tr
><tr
id=sl_svn445_444

><td class="source">  class MylibraryServiceResource extends apiServiceResource {<br></td></tr
><tr
id=sl_svn445_445

><td class="source"><br></td></tr
><tr
id=sl_svn445_446

><td class="source"><br></td></tr
><tr
id=sl_svn445_447

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_448

><td class="source"><br></td></tr
><tr
id=sl_svn445_449

><td class="source">  /**<br></td></tr
><tr
id=sl_svn445_450

><td class="source">   * The &quot;bookshelves&quot; collection of methods.<br></td></tr
><tr
id=sl_svn445_451

><td class="source">   * Typical usage is:<br></td></tr
><tr
id=sl_svn445_452

><td class="source">   *  &lt;code&gt;<br></td></tr
><tr
id=sl_svn445_453

><td class="source">   *   $booksService = new apiBooksService(...);<br></td></tr
><tr
id=sl_svn445_454

><td class="source">   *   $bookshelves = $booksService-&gt;bookshelves;<br></td></tr
><tr
id=sl_svn445_455

><td class="source">   *  &lt;/code&gt;<br></td></tr
><tr
id=sl_svn445_456

><td class="source">   */<br></td></tr
><tr
id=sl_svn445_457

><td class="source">  class MylibraryBookshelvesServiceResource extends apiServiceResource {<br></td></tr
><tr
id=sl_svn445_458

><td class="source"><br></td></tr
><tr
id=sl_svn445_459

><td class="source"><br></td></tr
><tr
id=sl_svn445_460

><td class="source">    /**<br></td></tr
><tr
id=sl_svn445_461

><td class="source">     * Removes a volume from a bookshelf. (bookshelves.removeVolume)<br></td></tr
><tr
id=sl_svn445_462

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_463

><td class="source">     * @param string $shelf ID of bookshelf from which to remove a volume.<br></td></tr
><tr
id=sl_svn445_464

><td class="source">     * @param string $volumeId ID of volume to remove.<br></td></tr
><tr
id=sl_svn445_465

><td class="source">     * @param array $optParams Optional parameters. Valid optional parameters are listed below.<br></td></tr
><tr
id=sl_svn445_466

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_467

><td class="source">     * @opt_param string source String to identify the originator of this request.<br></td></tr
><tr
id=sl_svn445_468

><td class="source">     */<br></td></tr
><tr
id=sl_svn445_469

><td class="source">    public function removeVolume($shelf, $volumeId, $optParams = array()) {<br></td></tr
><tr
id=sl_svn445_470

><td class="source">      $params = array(&#39;shelf&#39; =&gt; $shelf, &#39;volumeId&#39; =&gt; $volumeId);<br></td></tr
><tr
id=sl_svn445_471

><td class="source">      $params = array_merge($params, $optParams);<br></td></tr
><tr
id=sl_svn445_472

><td class="source">      $data = $this-&gt;__call(&#39;removeVolume&#39;, array($params));<br></td></tr
><tr
id=sl_svn445_473

><td class="source">      return $data;<br></td></tr
><tr
id=sl_svn445_474

><td class="source">    }<br></td></tr
><tr
id=sl_svn445_475

><td class="source">    /**<br></td></tr
><tr
id=sl_svn445_476

><td class="source">     * Retrieves metadata for a specific bookshelf belonging to the authenticated user.<br></td></tr
><tr
id=sl_svn445_477

><td class="source">     * (bookshelves.get)<br></td></tr
><tr
id=sl_svn445_478

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_479

><td class="source">     * @param string $shelf ID of bookshelf to retrieve.<br></td></tr
><tr
id=sl_svn445_480

><td class="source">     * @param array $optParams Optional parameters. Valid optional parameters are listed below.<br></td></tr
><tr
id=sl_svn445_481

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_482

><td class="source">     * @opt_param string source String to identify the originator of this request.<br></td></tr
><tr
id=sl_svn445_483

><td class="source">     * @return Bookshelf<br></td></tr
><tr
id=sl_svn445_484

><td class="source">     */<br></td></tr
><tr
id=sl_svn445_485

><td class="source">    public function get($shelf, $optParams = array()) {<br></td></tr
><tr
id=sl_svn445_486

><td class="source">      $params = array(&#39;shelf&#39; =&gt; $shelf);<br></td></tr
><tr
id=sl_svn445_487

><td class="source">      $params = array_merge($params, $optParams);<br></td></tr
><tr
id=sl_svn445_488

><td class="source">      $data = $this-&gt;__call(&#39;get&#39;, array($params));<br></td></tr
><tr
id=sl_svn445_489

><td class="source">      if ($this-&gt;useObjects()) {<br></td></tr
><tr
id=sl_svn445_490

><td class="source">        return new Bookshelf($data);<br></td></tr
><tr
id=sl_svn445_491

><td class="source">      } else {<br></td></tr
><tr
id=sl_svn445_492

><td class="source">        return $data;<br></td></tr
><tr
id=sl_svn445_493

><td class="source">      }<br></td></tr
><tr
id=sl_svn445_494

><td class="source">    }<br></td></tr
><tr
id=sl_svn445_495

><td class="source">    /**<br></td></tr
><tr
id=sl_svn445_496

><td class="source">     * Clears all volumes from a bookshelf. (bookshelves.clearVolumes)<br></td></tr
><tr
id=sl_svn445_497

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_498

><td class="source">     * @param string $shelf ID of bookshelf from which to remove a volume.<br></td></tr
><tr
id=sl_svn445_499

><td class="source">     * @param array $optParams Optional parameters. Valid optional parameters are listed below.<br></td></tr
><tr
id=sl_svn445_500

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_501

><td class="source">     * @opt_param string source String to identify the originator of this request.<br></td></tr
><tr
id=sl_svn445_502

><td class="source">     */<br></td></tr
><tr
id=sl_svn445_503

><td class="source">    public function clearVolumes($shelf, $optParams = array()) {<br></td></tr
><tr
id=sl_svn445_504

><td class="source">      $params = array(&#39;shelf&#39; =&gt; $shelf);<br></td></tr
><tr
id=sl_svn445_505

><td class="source">      $params = array_merge($params, $optParams);<br></td></tr
><tr
id=sl_svn445_506

><td class="source">      $data = $this-&gt;__call(&#39;clearVolumes&#39;, array($params));<br></td></tr
><tr
id=sl_svn445_507

><td class="source">      return $data;<br></td></tr
><tr
id=sl_svn445_508

><td class="source">    }<br></td></tr
><tr
id=sl_svn445_509

><td class="source">    /**<br></td></tr
><tr
id=sl_svn445_510

><td class="source">     * Retrieves a list of bookshelves belonging to the authenticated user. (bookshelves.list)<br></td></tr
><tr
id=sl_svn445_511

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_512

><td class="source">     * @param array $optParams Optional parameters. Valid optional parameters are listed below.<br></td></tr
><tr
id=sl_svn445_513

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_514

><td class="source">     * @opt_param string source String to identify the originator of this request.<br></td></tr
><tr
id=sl_svn445_515

><td class="source">     * @return Bookshelves<br></td></tr
><tr
id=sl_svn445_516

><td class="source">     */<br></td></tr
><tr
id=sl_svn445_517

><td class="source">    public function listMylibraryBookshelves($optParams = array()) {<br></td></tr
><tr
id=sl_svn445_518

><td class="source">      $params = array();<br></td></tr
><tr
id=sl_svn445_519

><td class="source">      $params = array_merge($params, $optParams);<br></td></tr
><tr
id=sl_svn445_520

><td class="source">      $data = $this-&gt;__call(&#39;list&#39;, array($params));<br></td></tr
><tr
id=sl_svn445_521

><td class="source">      if ($this-&gt;useObjects()) {<br></td></tr
><tr
id=sl_svn445_522

><td class="source">        return new Bookshelves($data);<br></td></tr
><tr
id=sl_svn445_523

><td class="source">      } else {<br></td></tr
><tr
id=sl_svn445_524

><td class="source">        return $data;<br></td></tr
><tr
id=sl_svn445_525

><td class="source">      }<br></td></tr
><tr
id=sl_svn445_526

><td class="source">    }<br></td></tr
><tr
id=sl_svn445_527

><td class="source">    /**<br></td></tr
><tr
id=sl_svn445_528

><td class="source">     * Adds a volume to a bookshelf. (bookshelves.addVolume)<br></td></tr
><tr
id=sl_svn445_529

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_530

><td class="source">     * @param string $shelf ID of bookshelf to which to add a volume.<br></td></tr
><tr
id=sl_svn445_531

><td class="source">     * @param string $volumeId ID of volume to add.<br></td></tr
><tr
id=sl_svn445_532

><td class="source">     * @param array $optParams Optional parameters. Valid optional parameters are listed below.<br></td></tr
><tr
id=sl_svn445_533

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_534

><td class="source">     * @opt_param string source String to identify the originator of this request.<br></td></tr
><tr
id=sl_svn445_535

><td class="source">     */<br></td></tr
><tr
id=sl_svn445_536

><td class="source">    public function addVolume($shelf, $volumeId, $optParams = array()) {<br></td></tr
><tr
id=sl_svn445_537

><td class="source">      $params = array(&#39;shelf&#39; =&gt; $shelf, &#39;volumeId&#39; =&gt; $volumeId);<br></td></tr
><tr
id=sl_svn445_538

><td class="source">      $params = array_merge($params, $optParams);<br></td></tr
><tr
id=sl_svn445_539

><td class="source">      $data = $this-&gt;__call(&#39;addVolume&#39;, array($params));<br></td></tr
><tr
id=sl_svn445_540

><td class="source">      return $data;<br></td></tr
><tr
id=sl_svn445_541

><td class="source">    }<br></td></tr
><tr
id=sl_svn445_542

><td class="source">    /**<br></td></tr
><tr
id=sl_svn445_543

><td class="source">     * Moves a volume within a bookshelf. (bookshelves.moveVolume)<br></td></tr
><tr
id=sl_svn445_544

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_545

><td class="source">     * @param string $shelf ID of bookshelf with the volume.<br></td></tr
><tr
id=sl_svn445_546

><td class="source">     * @param string $volumeId ID of volume to move.<br></td></tr
><tr
id=sl_svn445_547

><td class="source">     * @param int $volumePosition Position on shelf to move the item (0 puts the item before the current first item, 1 puts it between the first and the second and so on.)<br></td></tr
><tr
id=sl_svn445_548

><td class="source">     * @param array $optParams Optional parameters. Valid optional parameters are listed below.<br></td></tr
><tr
id=sl_svn445_549

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_550

><td class="source">     * @opt_param string source String to identify the originator of this request.<br></td></tr
><tr
id=sl_svn445_551

><td class="source">     */<br></td></tr
><tr
id=sl_svn445_552

><td class="source">    public function moveVolume($shelf, $volumeId, $volumePosition, $optParams = array()) {<br></td></tr
><tr
id=sl_svn445_553

><td class="source">      $params = array(&#39;shelf&#39; =&gt; $shelf, &#39;volumeId&#39; =&gt; $volumeId, &#39;volumePosition&#39; =&gt; $volumePosition);<br></td></tr
><tr
id=sl_svn445_554

><td class="source">      $params = array_merge($params, $optParams);<br></td></tr
><tr
id=sl_svn445_555

><td class="source">      $data = $this-&gt;__call(&#39;moveVolume&#39;, array($params));<br></td></tr
><tr
id=sl_svn445_556

><td class="source">      return $data;<br></td></tr
><tr
id=sl_svn445_557

><td class="source">    }<br></td></tr
><tr
id=sl_svn445_558

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_559

><td class="source"><br></td></tr
><tr
id=sl_svn445_560

><td class="source">  /**<br></td></tr
><tr
id=sl_svn445_561

><td class="source">   * The &quot;volumes&quot; collection of methods.<br></td></tr
><tr
id=sl_svn445_562

><td class="source">   * Typical usage is:<br></td></tr
><tr
id=sl_svn445_563

><td class="source">   *  &lt;code&gt;<br></td></tr
><tr
id=sl_svn445_564

><td class="source">   *   $booksService = new apiBooksService(...);<br></td></tr
><tr
id=sl_svn445_565

><td class="source">   *   $volumes = $booksService-&gt;volumes;<br></td></tr
><tr
id=sl_svn445_566

><td class="source">   *  &lt;/code&gt;<br></td></tr
><tr
id=sl_svn445_567

><td class="source">   */<br></td></tr
><tr
id=sl_svn445_568

><td class="source">  class MylibraryBookshelvesVolumesServiceResource extends apiServiceResource {<br></td></tr
><tr
id=sl_svn445_569

><td class="source"><br></td></tr
><tr
id=sl_svn445_570

><td class="source"><br></td></tr
><tr
id=sl_svn445_571

><td class="source">    /**<br></td></tr
><tr
id=sl_svn445_572

><td class="source">     * Gets volume information for volumes on a bookshelf. (volumes.list)<br></td></tr
><tr
id=sl_svn445_573

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_574

><td class="source">     * @param string $shelf The bookshelf ID or name retrieve volumes for.<br></td></tr
><tr
id=sl_svn445_575

><td class="source">     * @param array $optParams Optional parameters. Valid optional parameters are listed below.<br></td></tr
><tr
id=sl_svn445_576

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_577

><td class="source">     * @opt_param string projection Restrict information returned to a set of selected fields.<br></td></tr
><tr
id=sl_svn445_578

><td class="source">     * @opt_param bool showPreorders Set to true to show pre-ordered books. Defaults to false.<br></td></tr
><tr
id=sl_svn445_579

><td class="source">     * @opt_param string maxResults Maximum number of results to return<br></td></tr
><tr
id=sl_svn445_580

><td class="source">     * @opt_param string q Full-text search query string in this bookshelf.<br></td></tr
><tr
id=sl_svn445_581

><td class="source">     * @opt_param string source String to identify the originator of this request.<br></td></tr
><tr
id=sl_svn445_582

><td class="source">     * @opt_param string startIndex Index of the first element to return (starts at 0)<br></td></tr
><tr
id=sl_svn445_583

><td class="source">     * @return Volumes<br></td></tr
><tr
id=sl_svn445_584

><td class="source">     */<br></td></tr
><tr
id=sl_svn445_585

><td class="source">    public function listMylibraryBookshelvesVolumes($shelf, $optParams = array()) {<br></td></tr
><tr
id=sl_svn445_586

><td class="source">      $params = array(&#39;shelf&#39; =&gt; $shelf);<br></td></tr
><tr
id=sl_svn445_587

><td class="source">      $params = array_merge($params, $optParams);<br></td></tr
><tr
id=sl_svn445_588

><td class="source">      $data = $this-&gt;__call(&#39;list&#39;, array($params));<br></td></tr
><tr
id=sl_svn445_589

><td class="source">      if ($this-&gt;useObjects()) {<br></td></tr
><tr
id=sl_svn445_590

><td class="source">        return new Volumes($data);<br></td></tr
><tr
id=sl_svn445_591

><td class="source">      } else {<br></td></tr
><tr
id=sl_svn445_592

><td class="source">        return $data;<br></td></tr
><tr
id=sl_svn445_593

><td class="source">      }<br></td></tr
><tr
id=sl_svn445_594

><td class="source">    }<br></td></tr
><tr
id=sl_svn445_595

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_596

><td class="source">  /**<br></td></tr
><tr
id=sl_svn445_597

><td class="source">   * The &quot;readingpositions&quot; collection of methods.<br></td></tr
><tr
id=sl_svn445_598

><td class="source">   * Typical usage is:<br></td></tr
><tr
id=sl_svn445_599

><td class="source">   *  &lt;code&gt;<br></td></tr
><tr
id=sl_svn445_600

><td class="source">   *   $booksService = new apiBooksService(...);<br></td></tr
><tr
id=sl_svn445_601

><td class="source">   *   $readingpositions = $booksService-&gt;readingpositions;<br></td></tr
><tr
id=sl_svn445_602

><td class="source">   *  &lt;/code&gt;<br></td></tr
><tr
id=sl_svn445_603

><td class="source">   */<br></td></tr
><tr
id=sl_svn445_604

><td class="source">  class MylibraryReadingpositionsServiceResource extends apiServiceResource {<br></td></tr
><tr
id=sl_svn445_605

><td class="source"><br></td></tr
><tr
id=sl_svn445_606

><td class="source"><br></td></tr
><tr
id=sl_svn445_607

><td class="source">    /**<br></td></tr
><tr
id=sl_svn445_608

><td class="source">     * Sets my reading position information for a volume. (readingpositions.setPosition)<br></td></tr
><tr
id=sl_svn445_609

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_610

><td class="source">     * @param string $volumeId ID of volume for which to update the reading position.<br></td></tr
><tr
id=sl_svn445_611

><td class="source">     * @param string $timestamp RFC 3339 UTC format timestamp associated with this reading position.<br></td></tr
><tr
id=sl_svn445_612

><td class="source">     * @param string $position Position string for the new volume reading position.<br></td></tr
><tr
id=sl_svn445_613

><td class="source">     * @param array $optParams Optional parameters. Valid optional parameters are listed below.<br></td></tr
><tr
id=sl_svn445_614

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_615

><td class="source">     * @opt_param string source String to identify the originator of this request.<br></td></tr
><tr
id=sl_svn445_616

><td class="source">     * @opt_param string contentVersion Volume content version for which this reading position applies.<br></td></tr
><tr
id=sl_svn445_617

><td class="source">     * @opt_param string action Action that caused this reading position to be set.<br></td></tr
><tr
id=sl_svn445_618

><td class="source">     */<br></td></tr
><tr
id=sl_svn445_619

><td class="source">    public function setPosition($volumeId, $timestamp, $position, $optParams = array()) {<br></td></tr
><tr
id=sl_svn445_620

><td class="source">      $params = array(&#39;volumeId&#39; =&gt; $volumeId, &#39;timestamp&#39; =&gt; $timestamp, &#39;position&#39; =&gt; $position);<br></td></tr
><tr
id=sl_svn445_621

><td class="source">      $params = array_merge($params, $optParams);<br></td></tr
><tr
id=sl_svn445_622

><td class="source">      $data = $this-&gt;__call(&#39;setPosition&#39;, array($params));<br></td></tr
><tr
id=sl_svn445_623

><td class="source">      return $data;<br></td></tr
><tr
id=sl_svn445_624

><td class="source">    }<br></td></tr
><tr
id=sl_svn445_625

><td class="source">    /**<br></td></tr
><tr
id=sl_svn445_626

><td class="source">     * Retrieves my reading position information for a volume. (readingpositions.get)<br></td></tr
><tr
id=sl_svn445_627

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_628

><td class="source">     * @param string $volumeId ID of volume for which to retrieve a reading position.<br></td></tr
><tr
id=sl_svn445_629

><td class="source">     * @param array $optParams Optional parameters. Valid optional parameters are listed below.<br></td></tr
><tr
id=sl_svn445_630

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_631

><td class="source">     * @opt_param string source String to identify the originator of this request.<br></td></tr
><tr
id=sl_svn445_632

><td class="source">     * @opt_param string contentVersion Volume content version for which this reading position is requested.<br></td></tr
><tr
id=sl_svn445_633

><td class="source">     * @return ReadingPosition<br></td></tr
><tr
id=sl_svn445_634

><td class="source">     */<br></td></tr
><tr
id=sl_svn445_635

><td class="source">    public function get($volumeId, $optParams = array()) {<br></td></tr
><tr
id=sl_svn445_636

><td class="source">      $params = array(&#39;volumeId&#39; =&gt; $volumeId);<br></td></tr
><tr
id=sl_svn445_637

><td class="source">      $params = array_merge($params, $optParams);<br></td></tr
><tr
id=sl_svn445_638

><td class="source">      $data = $this-&gt;__call(&#39;get&#39;, array($params));<br></td></tr
><tr
id=sl_svn445_639

><td class="source">      if ($this-&gt;useObjects()) {<br></td></tr
><tr
id=sl_svn445_640

><td class="source">        return new ReadingPosition($data);<br></td></tr
><tr
id=sl_svn445_641

><td class="source">      } else {<br></td></tr
><tr
id=sl_svn445_642

><td class="source">        return $data;<br></td></tr
><tr
id=sl_svn445_643

><td class="source">      }<br></td></tr
><tr
id=sl_svn445_644

><td class="source">    }<br></td></tr
><tr
id=sl_svn445_645

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_646

><td class="source">  /**<br></td></tr
><tr
id=sl_svn445_647

><td class="source">   * The &quot;annotations&quot; collection of methods.<br></td></tr
><tr
id=sl_svn445_648

><td class="source">   * Typical usage is:<br></td></tr
><tr
id=sl_svn445_649

><td class="source">   *  &lt;code&gt;<br></td></tr
><tr
id=sl_svn445_650

><td class="source">   *   $booksService = new apiBooksService(...);<br></td></tr
><tr
id=sl_svn445_651

><td class="source">   *   $annotations = $booksService-&gt;annotations;<br></td></tr
><tr
id=sl_svn445_652

><td class="source">   *  &lt;/code&gt;<br></td></tr
><tr
id=sl_svn445_653

><td class="source">   */<br></td></tr
><tr
id=sl_svn445_654

><td class="source">  class MylibraryAnnotationsServiceResource extends apiServiceResource {<br></td></tr
><tr
id=sl_svn445_655

><td class="source"><br></td></tr
><tr
id=sl_svn445_656

><td class="source"><br></td></tr
><tr
id=sl_svn445_657

><td class="source">    /**<br></td></tr
><tr
id=sl_svn445_658

><td class="source">     * Inserts a new annotation. (annotations.insert)<br></td></tr
><tr
id=sl_svn445_659

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_660

><td class="source">     * @param Annotation $postBody<br></td></tr
><tr
id=sl_svn445_661

><td class="source">     * @param array $optParams Optional parameters. Valid optional parameters are listed below.<br></td></tr
><tr
id=sl_svn445_662

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_663

><td class="source">     * @opt_param string source String to identify the originator of this request.<br></td></tr
><tr
id=sl_svn445_664

><td class="source">     * @return Annotation<br></td></tr
><tr
id=sl_svn445_665

><td class="source">     */<br></td></tr
><tr
id=sl_svn445_666

><td class="source">    public function insert(Annotation $postBody, $optParams = array()) {<br></td></tr
><tr
id=sl_svn445_667

><td class="source">      $params = array(&#39;postBody&#39; =&gt; $postBody);<br></td></tr
><tr
id=sl_svn445_668

><td class="source">      $params = array_merge($params, $optParams);<br></td></tr
><tr
id=sl_svn445_669

><td class="source">      $data = $this-&gt;__call(&#39;insert&#39;, array($params));<br></td></tr
><tr
id=sl_svn445_670

><td class="source">      if ($this-&gt;useObjects()) {<br></td></tr
><tr
id=sl_svn445_671

><td class="source">        return new Annotation($data);<br></td></tr
><tr
id=sl_svn445_672

><td class="source">      } else {<br></td></tr
><tr
id=sl_svn445_673

><td class="source">        return $data;<br></td></tr
><tr
id=sl_svn445_674

><td class="source">      }<br></td></tr
><tr
id=sl_svn445_675

><td class="source">    }<br></td></tr
><tr
id=sl_svn445_676

><td class="source">    /**<br></td></tr
><tr
id=sl_svn445_677

><td class="source">     * Gets an annotation by its ID. (annotations.get)<br></td></tr
><tr
id=sl_svn445_678

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_679

><td class="source">     * @param string $annotationId The ID for the annotation to retrieve.<br></td></tr
><tr
id=sl_svn445_680

><td class="source">     * @param array $optParams Optional parameters. Valid optional parameters are listed below.<br></td></tr
><tr
id=sl_svn445_681

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_682

><td class="source">     * @opt_param string source String to identify the originator of this request.<br></td></tr
><tr
id=sl_svn445_683

><td class="source">     * @return Annotation<br></td></tr
><tr
id=sl_svn445_684

><td class="source">     */<br></td></tr
><tr
id=sl_svn445_685

><td class="source">    public function get($annotationId, $optParams = array()) {<br></td></tr
><tr
id=sl_svn445_686

><td class="source">      $params = array(&#39;annotationId&#39; =&gt; $annotationId);<br></td></tr
><tr
id=sl_svn445_687

><td class="source">      $params = array_merge($params, $optParams);<br></td></tr
><tr
id=sl_svn445_688

><td class="source">      $data = $this-&gt;__call(&#39;get&#39;, array($params));<br></td></tr
><tr
id=sl_svn445_689

><td class="source">      if ($this-&gt;useObjects()) {<br></td></tr
><tr
id=sl_svn445_690

><td class="source">        return new Annotation($data);<br></td></tr
><tr
id=sl_svn445_691

><td class="source">      } else {<br></td></tr
><tr
id=sl_svn445_692

><td class="source">        return $data;<br></td></tr
><tr
id=sl_svn445_693

><td class="source">      }<br></td></tr
><tr
id=sl_svn445_694

><td class="source">    }<br></td></tr
><tr
id=sl_svn445_695

><td class="source">    /**<br></td></tr
><tr
id=sl_svn445_696

><td class="source">     * Retrieves a list of annotations, possibly filtered. (annotations.list)<br></td></tr
><tr
id=sl_svn445_697

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_698

><td class="source">     * @param array $optParams Optional parameters. Valid optional parameters are listed below.<br></td></tr
><tr
id=sl_svn445_699

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_700

><td class="source">     * @opt_param bool showDeleted Set to true to return deleted annotations. updatedMin must be in the request to use this. Defaults to false.<br></td></tr
><tr
id=sl_svn445_701

><td class="source">     * @opt_param string updatedMin RFC 3339 timestamp to restrict to items updated since this timestamp (inclusive).<br></td></tr
><tr
id=sl_svn445_702

><td class="source">     * @opt_param string updatedMax RFC 3339 timestamp to restrict to items updated prior to this timestamp (exclusive).<br></td></tr
><tr
id=sl_svn445_703

><td class="source">     * @opt_param string volumeId The volume to restrict annotations to.<br></td></tr
><tr
id=sl_svn445_704

><td class="source">     * @opt_param string maxResults Maximum number of results to return<br></td></tr
><tr
id=sl_svn445_705

><td class="source">     * @opt_param string pageToken The value of the nextToken from the previous page.<br></td></tr
><tr
id=sl_svn445_706

><td class="source">     * @opt_param string pageIds The page ID(s) for the volume that is being queried.<br></td></tr
><tr
id=sl_svn445_707

><td class="source">     * @opt_param string contentVersion The content version for the requested volume.<br></td></tr
><tr
id=sl_svn445_708

><td class="source">     * @opt_param string source String to identify the originator of this request.<br></td></tr
><tr
id=sl_svn445_709

><td class="source">     * @opt_param string layerId The layer ID to limit annotation by.<br></td></tr
><tr
id=sl_svn445_710

><td class="source">     * @return Annotations<br></td></tr
><tr
id=sl_svn445_711

><td class="source">     */<br></td></tr
><tr
id=sl_svn445_712

><td class="source">    public function listMylibraryAnnotations($optParams = array()) {<br></td></tr
><tr
id=sl_svn445_713

><td class="source">      $params = array();<br></td></tr
><tr
id=sl_svn445_714

><td class="source">      $params = array_merge($params, $optParams);<br></td></tr
><tr
id=sl_svn445_715

><td class="source">      $data = $this-&gt;__call(&#39;list&#39;, array($params));<br></td></tr
><tr
id=sl_svn445_716

><td class="source">      if ($this-&gt;useObjects()) {<br></td></tr
><tr
id=sl_svn445_717

><td class="source">        return new Annotations($data);<br></td></tr
><tr
id=sl_svn445_718

><td class="source">      } else {<br></td></tr
><tr
id=sl_svn445_719

><td class="source">        return $data;<br></td></tr
><tr
id=sl_svn445_720

><td class="source">      }<br></td></tr
><tr
id=sl_svn445_721

><td class="source">    }<br></td></tr
><tr
id=sl_svn445_722

><td class="source">    /**<br></td></tr
><tr
id=sl_svn445_723

><td class="source">     * Updates an existing annotation. (annotations.update)<br></td></tr
><tr
id=sl_svn445_724

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_725

><td class="source">     * @param string $annotationId The ID for the annotation to update.<br></td></tr
><tr
id=sl_svn445_726

><td class="source">     * @param Annotation $postBody<br></td></tr
><tr
id=sl_svn445_727

><td class="source">     * @param array $optParams Optional parameters. Valid optional parameters are listed below.<br></td></tr
><tr
id=sl_svn445_728

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_729

><td class="source">     * @opt_param string source String to identify the originator of this request.<br></td></tr
><tr
id=sl_svn445_730

><td class="source">     * @return Annotation<br></td></tr
><tr
id=sl_svn445_731

><td class="source">     */<br></td></tr
><tr
id=sl_svn445_732

><td class="source">    public function update($annotationId, Annotation $postBody, $optParams = array()) {<br></td></tr
><tr
id=sl_svn445_733

><td class="source">      $params = array(&#39;annotationId&#39; =&gt; $annotationId, &#39;postBody&#39; =&gt; $postBody);<br></td></tr
><tr
id=sl_svn445_734

><td class="source">      $params = array_merge($params, $optParams);<br></td></tr
><tr
id=sl_svn445_735

><td class="source">      $data = $this-&gt;__call(&#39;update&#39;, array($params));<br></td></tr
><tr
id=sl_svn445_736

><td class="source">      if ($this-&gt;useObjects()) {<br></td></tr
><tr
id=sl_svn445_737

><td class="source">        return new Annotation($data);<br></td></tr
><tr
id=sl_svn445_738

><td class="source">      } else {<br></td></tr
><tr
id=sl_svn445_739

><td class="source">        return $data;<br></td></tr
><tr
id=sl_svn445_740

><td class="source">      }<br></td></tr
><tr
id=sl_svn445_741

><td class="source">    }<br></td></tr
><tr
id=sl_svn445_742

><td class="source">    /**<br></td></tr
><tr
id=sl_svn445_743

><td class="source">     * Deletes an annotation. (annotations.delete)<br></td></tr
><tr
id=sl_svn445_744

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_745

><td class="source">     * @param string $annotationId The ID for the annotation to delete.<br></td></tr
><tr
id=sl_svn445_746

><td class="source">     * @param array $optParams Optional parameters. Valid optional parameters are listed below.<br></td></tr
><tr
id=sl_svn445_747

><td class="source">     *<br></td></tr
><tr
id=sl_svn445_748

><td class="source">     * @opt_param string source String to identify the originator of this request.<br></td></tr
><tr
id=sl_svn445_749

><td class="source">     */<br></td></tr
><tr
id=sl_svn445_750

><td class="source">    public function delete($annotationId, $optParams = array()) {<br></td></tr
><tr
id=sl_svn445_751

><td class="source">      $params = array(&#39;annotationId&#39; =&gt; $annotationId);<br></td></tr
><tr
id=sl_svn445_752

><td class="source">      $params = array_merge($params, $optParams);<br></td></tr
><tr
id=sl_svn445_753

><td class="source">      $data = $this-&gt;__call(&#39;delete&#39;, array($params));<br></td></tr
><tr
id=sl_svn445_754

><td class="source">      return $data;<br></td></tr
><tr
id=sl_svn445_755

><td class="source">    }<br></td></tr
><tr
id=sl_svn445_756

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_757

><td class="source"><br></td></tr
><tr
id=sl_svn445_758

><td class="source">/**<br></td></tr
><tr
id=sl_svn445_759

><td class="source"> * Service definition for Books (v1).<br></td></tr
><tr
id=sl_svn445_760

><td class="source"> *<br></td></tr
><tr
id=sl_svn445_761

><td class="source"> * &lt;p&gt;<br></td></tr
><tr
id=sl_svn445_762

><td class="source"> * Lets you search for books and manage your Google Books library.<br></td></tr
><tr
id=sl_svn445_763

><td class="source"> * &lt;/p&gt;<br></td></tr
><tr
id=sl_svn445_764

><td class="source"> *<br></td></tr
><tr
id=sl_svn445_765

><td class="source"> * &lt;p&gt;<br></td></tr
><tr
id=sl_svn445_766

><td class="source"> * For more information about this service, see the<br></td></tr
><tr
id=sl_svn445_767

><td class="source"> * &lt;a href=&quot;https://code.google.com/apis/books/docs/v1/getting_started.html&quot; target=&quot;_blank&quot;&gt;API Documentation&lt;/a&gt;<br></td></tr
><tr
id=sl_svn445_768

><td class="source"> * &lt;/p&gt;<br></td></tr
><tr
id=sl_svn445_769

><td class="source"> *<br></td></tr
><tr
id=sl_svn445_770

><td class="source"> * @author Google, Inc.<br></td></tr
><tr
id=sl_svn445_771

><td class="source"> */<br></td></tr
><tr
id=sl_svn445_772

><td class="source">class apiBooksService extends apiService {<br></td></tr
><tr
id=sl_svn445_773

><td class="source">  public $layers;<br></td></tr
><tr
id=sl_svn445_774

><td class="source">  public $layers_annotationData;<br></td></tr
><tr
id=sl_svn445_775

><td class="source">  public $layers_volumeAnnotations;<br></td></tr
><tr
id=sl_svn445_776

><td class="source">  public $bookshelves;<br></td></tr
><tr
id=sl_svn445_777

><td class="source">  public $bookshelves_volumes;<br></td></tr
><tr
id=sl_svn445_778

><td class="source">  public $myconfig;<br></td></tr
><tr
id=sl_svn445_779

><td class="source">  public $volumes;<br></td></tr
><tr
id=sl_svn445_780

><td class="source">  public $mylibrary_bookshelves;<br></td></tr
><tr
id=sl_svn445_781

><td class="source">  public $mylibrary_bookshelves_volumes;<br></td></tr
><tr
id=sl_svn445_782

><td class="source">  public $mylibrary_readingpositions;<br></td></tr
><tr
id=sl_svn445_783

><td class="source">  public $mylibrary_annotations;<br></td></tr
><tr
id=sl_svn445_784

><td class="source">  /**<br></td></tr
><tr
id=sl_svn445_785

><td class="source">   * Constructs the internal representation of the Books service.<br></td></tr
><tr
id=sl_svn445_786

><td class="source">   *<br></td></tr
><tr
id=sl_svn445_787

><td class="source">   * @param apiClient apiClient<br></td></tr
><tr
id=sl_svn445_788

><td class="source">   */<br></td></tr
><tr
id=sl_svn445_789

><td class="source">  public function __construct(apiClient $apiClient) {<br></td></tr
><tr
id=sl_svn445_790

><td class="source">    $this-&gt;restBasePath = &#39;/books/v1/&#39;;<br></td></tr
><tr
id=sl_svn445_791

><td class="source">    $this-&gt;version = &#39;v1&#39;;<br></td></tr
><tr
id=sl_svn445_792

><td class="source">    $this-&gt;serviceName = &#39;books&#39;;<br></td></tr
><tr
id=sl_svn445_793

><td class="source"><br></td></tr
><tr
id=sl_svn445_794

><td class="source">    $apiClient-&gt;addService($this-&gt;serviceName, $this-&gt;version);<br></td></tr
><tr
id=sl_svn445_795

><td class="source">    $this-&gt;layers = new LayersServiceResource($this, $this-&gt;serviceName, &#39;layers&#39;, json_decode(&#39;{&quot;methods&quot;: {&quot;list&quot;: {&quot;scopes&quot;: [&quot;https://www.googleapis.com/auth/books&quot;], &quot;parameters&quot;: {&quot;pageToken&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;contentVersion&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;volumeId&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;path&quot;}, &quot;maxResults&quot;: {&quot;format&quot;: &quot;uint32&quot;, &quot;maximum&quot;: &quot;40&quot;, &quot;minimum&quot;: &quot;0&quot;, &quot;location&quot;: &quot;query&quot;, &quot;type&quot;: &quot;integer&quot;}, &quot;source&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}}, &quot;id&quot;: &quot;books.layers.list&quot;, &quot;httpMethod&quot;: &quot;GET&quot;, &quot;path&quot;: &quot;volumes/{volumeId}/layersummary&quot;, &quot;response&quot;: {&quot;$ref&quot;: &quot;Layersummaries&quot;}}, &quot;get&quot;: {&quot;scopes&quot;: [&quot;https://www.googleapis.com/auth/books&quot;], &quot;parameters&quot;: {&quot;source&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;summaryId&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;path&quot;}}, &quot;id&quot;: &quot;books.layers.get&quot;, &quot;httpMethod&quot;: &quot;GET&quot;, &quot;path&quot;: &quot;volumes/layersummary/{summaryId}&quot;, &quot;response&quot;: {&quot;$ref&quot;: &quot;Layersummary&quot;}}}}&#39;, true));<br></td></tr
><tr
id=sl_svn445_796

><td class="source">    $this-&gt;layers_annotationData = new LayersAnnotationDataServiceResource($this, $this-&gt;serviceName, &#39;annotationData&#39;, json_decode(&#39;{&quot;methods&quot;: {&quot;list&quot;: {&quot;scopes&quot;: [&quot;https://www.googleapis.com/auth/books&quot;], &quot;parameters&quot;: {&quot;pageToken&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;updatedMax&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;locale&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;h&quot;: {&quot;format&quot;: &quot;int32&quot;, &quot;type&quot;: &quot;integer&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;volumeId&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;path&quot;}, &quot;maxResults&quot;: {&quot;format&quot;: &quot;uint32&quot;, &quot;maximum&quot;: &quot;40&quot;, &quot;minimum&quot;: &quot;0&quot;, &quot;location&quot;: &quot;query&quot;, &quot;type&quot;: &quot;integer&quot;}, &quot;annotationDataId&quot;: {&quot;repeated&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;source&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;contentVersion&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;w&quot;: {&quot;format&quot;: &quot;int32&quot;, &quot;type&quot;: &quot;integer&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;layerId&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;path&quot;}, &quot;updatedMin&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}}, &quot;id&quot;: &quot;books.layers.annotationData.list&quot;, &quot;httpMethod&quot;: &quot;GET&quot;, &quot;path&quot;: &quot;volumes/{volumeId}/layers/{layerId}/data&quot;, &quot;response&quot;: {&quot;$ref&quot;: &quot;Annotationsdata&quot;}}, &quot;get&quot;: {&quot;scopes&quot;: [&quot;https://www.googleapis.com/auth/books&quot;], &quot;parameters&quot;: {&quot;locale&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;h&quot;: {&quot;format&quot;: &quot;int32&quot;, &quot;type&quot;: &quot;integer&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;volumeId&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;path&quot;}, &quot;annotationDataId&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;path&quot;}, &quot;source&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;w&quot;: {&quot;format&quot;: &quot;int32&quot;, &quot;type&quot;: &quot;integer&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;layerId&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;path&quot;}}, &quot;id&quot;: &quot;books.layers.annotationData.get&quot;, &quot;httpMethod&quot;: &quot;GET&quot;, &quot;path&quot;: &quot;volumes/{volumeId}/layers/{layerId}/data/{annotationDataId}&quot;, &quot;response&quot;: {&quot;$ref&quot;: &quot;Annotationdata&quot;}}}}&#39;, true));<br></td></tr
><tr
id=sl_svn445_797

><td class="source">    $this-&gt;layers_volumeAnnotations = new LayersVolumeAnnotationsServiceResource($this, $this-&gt;serviceName, &#39;volumeAnnotations&#39;, json_decode(&#39;{&quot;methods&quot;: {&quot;list&quot;: {&quot;scopes&quot;: [&quot;https://www.googleapis.com/auth/books&quot;], &quot;parameters&quot;: {&quot;pageToken&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;endPosition&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;updatedMax&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;locale&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;updatedMin&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;endOffset&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;volumeId&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;path&quot;}, &quot;maxResults&quot;: {&quot;format&quot;: &quot;uint32&quot;, &quot;maximum&quot;: &quot;40&quot;, &quot;minimum&quot;: &quot;0&quot;, &quot;location&quot;: &quot;query&quot;, &quot;type&quot;: &quot;integer&quot;}, &quot;showDeleted&quot;: {&quot;type&quot;: &quot;boolean&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;contentVersion&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;source&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;startOffset&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;layerId&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;path&quot;}, &quot;startPosition&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}}, &quot;id&quot;: &quot;books.layers.volumeAnnotations.list&quot;, &quot;httpMethod&quot;: &quot;GET&quot;, &quot;path&quot;: &quot;volumes/{volumeId}/layers/{layerId}&quot;, &quot;response&quot;: {&quot;$ref&quot;: &quot;Volumeannotations&quot;}}, &quot;get&quot;: {&quot;scopes&quot;: [&quot;https://www.googleapis.com/auth/books&quot;], &quot;parameters&quot;: {&quot;locale&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;source&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;annotationId&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;path&quot;}, &quot;volumeId&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;path&quot;}, &quot;layerId&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;path&quot;}}, &quot;id&quot;: &quot;books.layers.volumeAnnotations.get&quot;, &quot;httpMethod&quot;: &quot;GET&quot;, &quot;path&quot;: &quot;volumes/{volumeId}/layers/{layerId}/annotations/{annotationId}&quot;, &quot;response&quot;: {&quot;$ref&quot;: &quot;Volumeannotation&quot;}}}}&#39;, true));<br></td></tr
><tr
id=sl_svn445_798

><td class="source">    $this-&gt;bookshelves = new BookshelvesServiceResource($this, $this-&gt;serviceName, &#39;bookshelves&#39;, json_decode(&#39;{&quot;methods&quot;: {&quot;list&quot;: {&quot;scopes&quot;: [&quot;https://www.googleapis.com/auth/books&quot;], &quot;parameters&quot;: {&quot;source&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;userId&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;path&quot;}}, &quot;id&quot;: &quot;books.bookshelves.list&quot;, &quot;httpMethod&quot;: &quot;GET&quot;, &quot;path&quot;: &quot;users/{userId}/bookshelves&quot;, &quot;response&quot;: {&quot;$ref&quot;: &quot;Bookshelves&quot;}}, &quot;get&quot;: {&quot;scopes&quot;: [&quot;https://www.googleapis.com/auth/books&quot;], &quot;parameters&quot;: {&quot;shelf&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;path&quot;}, &quot;userId&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;path&quot;}, &quot;source&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}}, &quot;id&quot;: &quot;books.bookshelves.get&quot;, &quot;httpMethod&quot;: &quot;GET&quot;, &quot;path&quot;: &quot;users/{userId}/bookshelves/{shelf}&quot;, &quot;response&quot;: {&quot;$ref&quot;: &quot;Bookshelf&quot;}}}}&#39;, true));<br></td></tr
><tr
id=sl_svn445_799

><td class="source">    $this-&gt;bookshelves_volumes = new BookshelvesVolumesServiceResource($this, $this-&gt;serviceName, &#39;volumes&#39;, json_decode(&#39;{&quot;methods&quot;: {&quot;list&quot;: {&quot;scopes&quot;: [&quot;https://www.googleapis.com/auth/books&quot;], &quot;parameters&quot;: {&quot;shelf&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;path&quot;}, &quot;showPreorders&quot;: {&quot;type&quot;: &quot;boolean&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;maxResults&quot;: {&quot;format&quot;: &quot;uint32&quot;, &quot;minimum&quot;: &quot;0&quot;, &quot;type&quot;: &quot;integer&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;source&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;startIndex&quot;: {&quot;format&quot;: &quot;uint32&quot;, &quot;minimum&quot;: &quot;0&quot;, &quot;type&quot;: &quot;integer&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;userId&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;path&quot;}}, &quot;id&quot;: &quot;books.bookshelves.volumes.list&quot;, &quot;httpMethod&quot;: &quot;GET&quot;, &quot;path&quot;: &quot;users/{userId}/bookshelves/{shelf}/volumes&quot;, &quot;response&quot;: {&quot;$ref&quot;: &quot;Volumes&quot;}}}}&#39;, true));<br></td></tr
><tr
id=sl_svn445_800

><td class="source">    $this-&gt;myconfig = new MyconfigServiceResource($this, $this-&gt;serviceName, &#39;myconfig&#39;, json_decode(&#39;{&quot;methods&quot;: {&quot;releaseDownloadAccess&quot;: {&quot;scopes&quot;: [&quot;https://www.googleapis.com/auth/books&quot;], &quot;parameters&quot;: {&quot;locale&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;source&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;cpksver&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;volumeIds&quot;: {&quot;repeated&quot;: true, &quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}}, &quot;id&quot;: &quot;books.myconfig.releaseDownloadAccess&quot;, &quot;httpMethod&quot;: &quot;POST&quot;, &quot;path&quot;: &quot;myconfig/releaseDownloadAccess&quot;, &quot;response&quot;: {&quot;$ref&quot;: &quot;DownloadAccesses&quot;}}, &quot;requestAccess&quot;: {&quot;scopes&quot;: [&quot;https://www.googleapis.com/auth/books&quot;], &quot;parameters&quot;: {&quot;locale&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;nonce&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;source&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;cpksver&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;volumeId&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}}, &quot;id&quot;: &quot;books.myconfig.requestAccess&quot;, &quot;httpMethod&quot;: &quot;POST&quot;, &quot;path&quot;: &quot;myconfig/requestAccess&quot;, &quot;response&quot;: {&quot;$ref&quot;: &quot;RequestAccess&quot;}}, &quot;syncVolumeLicenses&quot;: {&quot;scopes&quot;: [&quot;https://www.googleapis.com/auth/books&quot;], &quot;parameters&quot;: {&quot;nonce&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;locale&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;showPreorders&quot;: {&quot;type&quot;: &quot;boolean&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;cpksver&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;source&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;volumeIds&quot;: {&quot;repeated&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}}, &quot;id&quot;: &quot;books.myconfig.syncVolumeLicenses&quot;, &quot;httpMethod&quot;: &quot;POST&quot;, &quot;path&quot;: &quot;myconfig/syncVolumeLicenses&quot;, &quot;response&quot;: {&quot;$ref&quot;: &quot;Volumes&quot;}}}}&#39;, true));<br></td></tr
><tr
id=sl_svn445_801

><td class="source">    $this-&gt;volumes = new VolumesServiceResource($this, $this-&gt;serviceName, &#39;volumes&#39;, json_decode(&#39;{&quot;methods&quot;: {&quot;list&quot;: {&quot;scopes&quot;: [&quot;https://www.googleapis.com/auth/books&quot;], &quot;parameters&quot;: {&quot;orderBy&quot;: {&quot;enum&quot;: [&quot;newest&quot;, &quot;relevance&quot;], &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;filter&quot;: {&quot;enum&quot;: [&quot;ebooks&quot;, &quot;free-ebooks&quot;, &quot;full&quot;, &quot;paid-ebooks&quot;, &quot;partial&quot;], &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;projection&quot;: {&quot;enum&quot;: [&quot;full&quot;, &quot;lite&quot;], &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;libraryRestrict&quot;: {&quot;enum&quot;: [&quot;my-library&quot;, &quot;no-restrict&quot;], &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;langRestrict&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;printType&quot;: {&quot;enum&quot;: [&quot;all&quot;, &quot;books&quot;, &quot;magazines&quot;], &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;showPreorders&quot;: {&quot;type&quot;: &quot;boolean&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;maxResults&quot;: {&quot;format&quot;: &quot;uint32&quot;, &quot;maximum&quot;: &quot;40&quot;, &quot;minimum&quot;: &quot;0&quot;, &quot;location&quot;: &quot;query&quot;, &quot;type&quot;: &quot;integer&quot;}, &quot;q&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;source&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;startIndex&quot;: {&quot;format&quot;: &quot;uint32&quot;, &quot;minimum&quot;: &quot;0&quot;, &quot;type&quot;: &quot;integer&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;download&quot;: {&quot;enum&quot;: [&quot;epub&quot;], &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;partner&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}}, &quot;id&quot;: &quot;books.volumes.list&quot;, &quot;httpMethod&quot;: &quot;GET&quot;, &quot;path&quot;: &quot;volumes&quot;, &quot;response&quot;: {&quot;$ref&quot;: &quot;Volumes&quot;}}, &quot;get&quot;: {&quot;scopes&quot;: [&quot;https://www.googleapis.com/auth/books&quot;], &quot;parameters&quot;: {&quot;source&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;partner&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;projection&quot;: {&quot;enum&quot;: [&quot;full&quot;, &quot;lite&quot;], &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;volumeId&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;path&quot;}}, &quot;id&quot;: &quot;books.volumes.get&quot;, &quot;httpMethod&quot;: &quot;GET&quot;, &quot;path&quot;: &quot;volumes/{volumeId}&quot;, &quot;response&quot;: {&quot;$ref&quot;: &quot;Volume&quot;}}}}&#39;, true));<br></td></tr
><tr
id=sl_svn445_802

><td class="source">    $this-&gt;mylibrary_bookshelves = new MylibraryBookshelvesServiceResource($this, $this-&gt;serviceName, &#39;bookshelves&#39;, json_decode(&#39;{&quot;methods&quot;: {&quot;removeVolume&quot;: {&quot;scopes&quot;: [&quot;https://www.googleapis.com/auth/books&quot;], &quot;parameters&quot;: {&quot;shelf&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;path&quot;}, &quot;volumeId&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;source&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}}, &quot;httpMethod&quot;: &quot;POST&quot;, &quot;path&quot;: &quot;mylibrary/bookshelves/{shelf}/removeVolume&quot;, &quot;id&quot;: &quot;books.mylibrary.bookshelves.removeVolume&quot;}, &quot;get&quot;: {&quot;scopes&quot;: [&quot;https://www.googleapis.com/auth/books&quot;], &quot;parameters&quot;: {&quot;shelf&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;path&quot;}, &quot;source&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}}, &quot;id&quot;: &quot;books.mylibrary.bookshelves.get&quot;, &quot;httpMethod&quot;: &quot;GET&quot;, &quot;path&quot;: &quot;mylibrary/bookshelves/{shelf}&quot;, &quot;response&quot;: {&quot;$ref&quot;: &quot;Bookshelf&quot;}}, &quot;clearVolumes&quot;: {&quot;scopes&quot;: [&quot;https://www.googleapis.com/auth/books&quot;], &quot;parameters&quot;: {&quot;shelf&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;path&quot;}, &quot;source&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}}, &quot;httpMethod&quot;: &quot;POST&quot;, &quot;path&quot;: &quot;mylibrary/bookshelves/{shelf}/clearVolumes&quot;, &quot;id&quot;: &quot;books.mylibrary.bookshelves.clearVolumes&quot;}, &quot;list&quot;: {&quot;scopes&quot;: [&quot;https://www.googleapis.com/auth/books&quot;], &quot;parameters&quot;: {&quot;source&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}}, &quot;response&quot;: {&quot;$ref&quot;: &quot;Bookshelves&quot;}, &quot;httpMethod&quot;: &quot;GET&quot;, &quot;path&quot;: &quot;mylibrary/bookshelves&quot;, &quot;id&quot;: &quot;books.mylibrary.bookshelves.list&quot;}, &quot;addVolume&quot;: {&quot;scopes&quot;: [&quot;https://www.googleapis.com/auth/books&quot;], &quot;parameters&quot;: {&quot;shelf&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;path&quot;}, &quot;volumeId&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;source&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}}, &quot;httpMethod&quot;: &quot;POST&quot;, &quot;path&quot;: &quot;mylibrary/bookshelves/{shelf}/addVolume&quot;, &quot;id&quot;: &quot;books.mylibrary.bookshelves.addVolume&quot;}, &quot;moveVolume&quot;: {&quot;scopes&quot;: [&quot;https://www.googleapis.com/auth/books&quot;], &quot;parameters&quot;: {&quot;source&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;shelf&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;path&quot;}, &quot;volumeId&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;volumePosition&quot;: {&quot;format&quot;: &quot;int32&quot;, &quot;required&quot;: true, &quot;type&quot;: &quot;integer&quot;, &quot;location&quot;: &quot;query&quot;}}, &quot;httpMethod&quot;: &quot;POST&quot;, &quot;path&quot;: &quot;mylibrary/bookshelves/{shelf}/moveVolume&quot;, &quot;id&quot;: &quot;books.mylibrary.bookshelves.moveVolume&quot;}}}&#39;, true));<br></td></tr
><tr
id=sl_svn445_803

><td class="source">    $this-&gt;mylibrary_bookshelves_volumes = new MylibraryBookshelvesVolumesServiceResource($this, $this-&gt;serviceName, &#39;volumes&#39;, json_decode(&#39;{&quot;methods&quot;: {&quot;list&quot;: {&quot;scopes&quot;: [&quot;https://www.googleapis.com/auth/books&quot;], &quot;parameters&quot;: {&quot;projection&quot;: {&quot;enum&quot;: [&quot;full&quot;, &quot;lite&quot;], &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;shelf&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;path&quot;}, &quot;showPreorders&quot;: {&quot;type&quot;: &quot;boolean&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;maxResults&quot;: {&quot;format&quot;: &quot;uint32&quot;, &quot;minimum&quot;: &quot;0&quot;, &quot;type&quot;: &quot;integer&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;q&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;source&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;startIndex&quot;: {&quot;format&quot;: &quot;uint32&quot;, &quot;minimum&quot;: &quot;0&quot;, &quot;type&quot;: &quot;integer&quot;, &quot;location&quot;: &quot;query&quot;}}, &quot;id&quot;: &quot;books.mylibrary.bookshelves.volumes.list&quot;, &quot;httpMethod&quot;: &quot;GET&quot;, &quot;path&quot;: &quot;mylibrary/bookshelves/{shelf}/volumes&quot;, &quot;response&quot;: {&quot;$ref&quot;: &quot;Volumes&quot;}}}}&#39;, true));<br></td></tr
><tr
id=sl_svn445_804

><td class="source">    $this-&gt;mylibrary_readingpositions = new MylibraryReadingpositionsServiceResource($this, $this-&gt;serviceName, &#39;readingpositions&#39;, json_decode(&#39;{&quot;methods&quot;: {&quot;setPosition&quot;: {&quot;scopes&quot;: [&quot;https://www.googleapis.com/auth/books&quot;], &quot;parameters&quot;: {&quot;timestamp&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;volumeId&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;path&quot;}, &quot;source&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;contentVersion&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;action&quot;: {&quot;enum&quot;: [&quot;bookmark&quot;, &quot;chapter&quot;, &quot;next-page&quot;, &quot;prev-page&quot;, &quot;scroll&quot;, &quot;search&quot;], &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;position&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}}, &quot;httpMethod&quot;: &quot;POST&quot;, &quot;path&quot;: &quot;mylibrary/readingpositions/{volumeId}/setPosition&quot;, &quot;id&quot;: &quot;books.mylibrary.readingpositions.setPosition&quot;}, &quot;get&quot;: {&quot;scopes&quot;: [&quot;https://www.googleapis.com/auth/books&quot;], &quot;parameters&quot;: {&quot;source&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;contentVersion&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;volumeId&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;path&quot;}}, &quot;id&quot;: &quot;books.mylibrary.readingpositions.get&quot;, &quot;httpMethod&quot;: &quot;GET&quot;, &quot;path&quot;: &quot;mylibrary/readingpositions/{volumeId}&quot;, &quot;response&quot;: {&quot;$ref&quot;: &quot;ReadingPosition&quot;}}}}&#39;, true));<br></td></tr
><tr
id=sl_svn445_805

><td class="source">    $this-&gt;mylibrary_annotations = new MylibraryAnnotationsServiceResource($this, $this-&gt;serviceName, &#39;annotations&#39;, json_decode(&#39;{&quot;methods&quot;: {&quot;insert&quot;: {&quot;scopes&quot;: [&quot;https://www.googleapis.com/auth/books&quot;], &quot;parameters&quot;: {&quot;source&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}}, &quot;request&quot;: {&quot;$ref&quot;: &quot;Annotation&quot;}, &quot;id&quot;: &quot;books.mylibrary.annotations.insert&quot;, &quot;httpMethod&quot;: &quot;POST&quot;, &quot;path&quot;: &quot;mylibrary/annotations&quot;, &quot;response&quot;: {&quot;$ref&quot;: &quot;Annotation&quot;}}, &quot;delete&quot;: {&quot;scopes&quot;: [&quot;https://www.googleapis.com/auth/books&quot;], &quot;parameters&quot;: {&quot;source&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;annotationId&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;path&quot;}}, &quot;httpMethod&quot;: &quot;DELETE&quot;, &quot;path&quot;: &quot;mylibrary/annotations/{annotationId}&quot;, &quot;id&quot;: &quot;books.mylibrary.annotations.delete&quot;}, &quot;list&quot;: {&quot;scopes&quot;: [&quot;https://www.googleapis.com/auth/books&quot;], &quot;parameters&quot;: {&quot;pageToken&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;updatedMax&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;updatedMin&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;volumeId&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;maxResults&quot;: {&quot;format&quot;: &quot;uint32&quot;, &quot;maximum&quot;: &quot;40&quot;, &quot;minimum&quot;: &quot;0&quot;, &quot;location&quot;: &quot;query&quot;, &quot;type&quot;: &quot;integer&quot;}, &quot;showDeleted&quot;: {&quot;type&quot;: &quot;boolean&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;pageIds&quot;: {&quot;repeated&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;contentVersion&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;source&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;layerId&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}}, &quot;response&quot;: {&quot;$ref&quot;: &quot;Annotations&quot;}, &quot;httpMethod&quot;: &quot;GET&quot;, &quot;path&quot;: &quot;mylibrary/annotations&quot;, &quot;id&quot;: &quot;books.mylibrary.annotations.list&quot;}, &quot;update&quot;: {&quot;scopes&quot;: [&quot;https://www.googleapis.com/auth/books&quot;], &quot;parameters&quot;: {&quot;source&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;annotationId&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;path&quot;}}, &quot;request&quot;: {&quot;$ref&quot;: &quot;Annotation&quot;}, &quot;id&quot;: &quot;books.mylibrary.annotations.update&quot;, &quot;httpMethod&quot;: &quot;PUT&quot;, &quot;path&quot;: &quot;mylibrary/annotations/{annotationId}&quot;, &quot;response&quot;: {&quot;$ref&quot;: &quot;Annotation&quot;}}, &quot;get&quot;: {&quot;scopes&quot;: [&quot;https://www.googleapis.com/auth/books&quot;], &quot;parameters&quot;: {&quot;source&quot;: {&quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;query&quot;}, &quot;annotationId&quot;: {&quot;required&quot;: true, &quot;type&quot;: &quot;string&quot;, &quot;location&quot;: &quot;path&quot;}}, &quot;id&quot;: &quot;books.mylibrary.annotations.get&quot;, &quot;httpMethod&quot;: &quot;GET&quot;, &quot;path&quot;: &quot;mylibrary/annotations/{annotationId}&quot;, &quot;response&quot;: {&quot;$ref&quot;: &quot;Annotation&quot;}}}}&#39;, true));<br></td></tr
><tr
id=sl_svn445_806

><td class="source"><br></td></tr
><tr
id=sl_svn445_807

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_808

><td class="source">}<br></td></tr
><tr
id=sl_svn445_809

><td class="source"><br></td></tr
><tr
id=sl_svn445_810

><td class="source">class Annotation extends apiModel {<br></td></tr
><tr
id=sl_svn445_811

><td class="source">  public $kind;<br></td></tr
><tr
id=sl_svn445_812

><td class="source">  public $updated;<br></td></tr
><tr
id=sl_svn445_813

><td class="source">  public $created;<br></td></tr
><tr
id=sl_svn445_814

><td class="source">  public $deleted;<br></td></tr
><tr
id=sl_svn445_815

><td class="source">  public $beforeSelectedText;<br></td></tr
><tr
id=sl_svn445_816

><td class="source">  protected $__currentVersionRangesType = &#39;AnnotationCurrentVersionRanges&#39;;<br></td></tr
><tr
id=sl_svn445_817

><td class="source">  protected $__currentVersionRangesDataType = &#39;&#39;;<br></td></tr
><tr
id=sl_svn445_818

><td class="source">  public $currentVersionRanges;<br></td></tr
><tr
id=sl_svn445_819

><td class="source">  public $afterSelectedText;<br></td></tr
><tr
id=sl_svn445_820

><td class="source">  protected $__clientVersionRangesType = &#39;AnnotationClientVersionRanges&#39;;<br></td></tr
><tr
id=sl_svn445_821

><td class="source">  protected $__clientVersionRangesDataType = &#39;&#39;;<br></td></tr
><tr
id=sl_svn445_822

><td class="source">  public $clientVersionRanges;<br></td></tr
><tr
id=sl_svn445_823

><td class="source">  public $volumeId;<br></td></tr
><tr
id=sl_svn445_824

><td class="source">  public $pageIds;<br></td></tr
><tr
id=sl_svn445_825

><td class="source">  public $layerId;<br></td></tr
><tr
id=sl_svn445_826

><td class="source">  public $selectedText;<br></td></tr
><tr
id=sl_svn445_827

><td class="source">  public $highlightStyle;<br></td></tr
><tr
id=sl_svn445_828

><td class="source">  public $data;<br></td></tr
><tr
id=sl_svn445_829

><td class="source">  public $id;<br></td></tr
><tr
id=sl_svn445_830

><td class="source">  public $selfLink;<br></td></tr
><tr
id=sl_svn445_831

><td class="source">  public function setKind($kind) {<br></td></tr
><tr
id=sl_svn445_832

><td class="source">    $this-&gt;kind = $kind;<br></td></tr
><tr
id=sl_svn445_833

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_834

><td class="source">  public function getKind() {<br></td></tr
><tr
id=sl_svn445_835

><td class="source">    return $this-&gt;kind;<br></td></tr
><tr
id=sl_svn445_836

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_837

><td class="source">  public function setUpdated($updated) {<br></td></tr
><tr
id=sl_svn445_838

><td class="source">    $this-&gt;updated = $updated;<br></td></tr
><tr
id=sl_svn445_839

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_840

><td class="source">  public function getUpdated() {<br></td></tr
><tr
id=sl_svn445_841

><td class="source">    return $this-&gt;updated;<br></td></tr
><tr
id=sl_svn445_842

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_843

><td class="source">  public function setCreated($created) {<br></td></tr
><tr
id=sl_svn445_844

><td class="source">    $this-&gt;created = $created;<br></td></tr
><tr
id=sl_svn445_845

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_846

><td class="source">  public function getCreated() {<br></td></tr
><tr
id=sl_svn445_847

><td class="source">    return $this-&gt;created;<br></td></tr
><tr
id=sl_svn445_848

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_849

><td class="source">  public function setDeleted($deleted) {<br></td></tr
><tr
id=sl_svn445_850

><td class="source">    $this-&gt;deleted = $deleted;<br></td></tr
><tr
id=sl_svn445_851

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_852

><td class="source">  public function getDeleted() {<br></td></tr
><tr
id=sl_svn445_853

><td class="source">    return $this-&gt;deleted;<br></td></tr
><tr
id=sl_svn445_854

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_855

><td class="source">  public function setBeforeSelectedText($beforeSelectedText) {<br></td></tr
><tr
id=sl_svn445_856

><td class="source">    $this-&gt;beforeSelectedText = $beforeSelectedText;<br></td></tr
><tr
id=sl_svn445_857

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_858

><td class="source">  public function getBeforeSelectedText() {<br></td></tr
><tr
id=sl_svn445_859

><td class="source">    return $this-&gt;beforeSelectedText;<br></td></tr
><tr
id=sl_svn445_860

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_861

><td class="source">  public function setCurrentVersionRanges(AnnotationCurrentVersionRanges $currentVersionRanges) {<br></td></tr
><tr
id=sl_svn445_862

><td class="source">    $this-&gt;currentVersionRanges = $currentVersionRanges;<br></td></tr
><tr
id=sl_svn445_863

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_864

><td class="source">  public function getCurrentVersionRanges() {<br></td></tr
><tr
id=sl_svn445_865

><td class="source">    return $this-&gt;currentVersionRanges;<br></td></tr
><tr
id=sl_svn445_866

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_867

><td class="source">  public function setAfterSelectedText($afterSelectedText) {<br></td></tr
><tr
id=sl_svn445_868

><td class="source">    $this-&gt;afterSelectedText = $afterSelectedText;<br></td></tr
><tr
id=sl_svn445_869

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_870

><td class="source">  public function getAfterSelectedText() {<br></td></tr
><tr
id=sl_svn445_871

><td class="source">    return $this-&gt;afterSelectedText;<br></td></tr
><tr
id=sl_svn445_872

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_873

><td class="source">  public function setClientVersionRanges(AnnotationClientVersionRanges $clientVersionRanges) {<br></td></tr
><tr
id=sl_svn445_874

><td class="source">    $this-&gt;clientVersionRanges = $clientVersionRanges;<br></td></tr
><tr
id=sl_svn445_875

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_876

><td class="source">  public function getClientVersionRanges() {<br></td></tr
><tr
id=sl_svn445_877

><td class="source">    return $this-&gt;clientVersionRanges;<br></td></tr
><tr
id=sl_svn445_878

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_879

><td class="source">  public function setVolumeId($volumeId) {<br></td></tr
><tr
id=sl_svn445_880

><td class="source">    $this-&gt;volumeId = $volumeId;<br></td></tr
><tr
id=sl_svn445_881

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_882

><td class="source">  public function getVolumeId() {<br></td></tr
><tr
id=sl_svn445_883

><td class="source">    return $this-&gt;volumeId;<br></td></tr
><tr
id=sl_svn445_884

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_885

><td class="source">  public function setPageIds(/* array(string) */ $pageIds) {<br></td></tr
><tr
id=sl_svn445_886

><td class="source">    $this-&gt;assertIsArray($pageIds, &#39;string&#39;, __METHOD__);<br></td></tr
><tr
id=sl_svn445_887

><td class="source">    $this-&gt;pageIds = $pageIds;<br></td></tr
><tr
id=sl_svn445_888

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_889

><td class="source">  public function getPageIds() {<br></td></tr
><tr
id=sl_svn445_890

><td class="source">    return $this-&gt;pageIds;<br></td></tr
><tr
id=sl_svn445_891

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_892

><td class="source">  public function setLayerId($layerId) {<br></td></tr
><tr
id=sl_svn445_893

><td class="source">    $this-&gt;layerId = $layerId;<br></td></tr
><tr
id=sl_svn445_894

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_895

><td class="source">  public function getLayerId() {<br></td></tr
><tr
id=sl_svn445_896

><td class="source">    return $this-&gt;layerId;<br></td></tr
><tr
id=sl_svn445_897

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_898

><td class="source">  public function setSelectedText($selectedText) {<br></td></tr
><tr
id=sl_svn445_899

><td class="source">    $this-&gt;selectedText = $selectedText;<br></td></tr
><tr
id=sl_svn445_900

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_901

><td class="source">  public function getSelectedText() {<br></td></tr
><tr
id=sl_svn445_902

><td class="source">    return $this-&gt;selectedText;<br></td></tr
><tr
id=sl_svn445_903

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_904

><td class="source">  public function setHighlightStyle($highlightStyle) {<br></td></tr
><tr
id=sl_svn445_905

><td class="source">    $this-&gt;highlightStyle = $highlightStyle;<br></td></tr
><tr
id=sl_svn445_906

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_907

><td class="source">  public function getHighlightStyle() {<br></td></tr
><tr
id=sl_svn445_908

><td class="source">    return $this-&gt;highlightStyle;<br></td></tr
><tr
id=sl_svn445_909

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_910

><td class="source">  public function setData($data) {<br></td></tr
><tr
id=sl_svn445_911

><td class="source">    $this-&gt;data = $data;<br></td></tr
><tr
id=sl_svn445_912

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_913

><td class="source">  public function getData() {<br></td></tr
><tr
id=sl_svn445_914

><td class="source">    return $this-&gt;data;<br></td></tr
><tr
id=sl_svn445_915

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_916

><td class="source">  public function setId($id) {<br></td></tr
><tr
id=sl_svn445_917

><td class="source">    $this-&gt;id = $id;<br></td></tr
><tr
id=sl_svn445_918

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_919

><td class="source">  public function getId() {<br></td></tr
><tr
id=sl_svn445_920

><td class="source">    return $this-&gt;id;<br></td></tr
><tr
id=sl_svn445_921

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_922

><td class="source">  public function setSelfLink($selfLink) {<br></td></tr
><tr
id=sl_svn445_923

><td class="source">    $this-&gt;selfLink = $selfLink;<br></td></tr
><tr
id=sl_svn445_924

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_925

><td class="source">  public function getSelfLink() {<br></td></tr
><tr
id=sl_svn445_926

><td class="source">    return $this-&gt;selfLink;<br></td></tr
><tr
id=sl_svn445_927

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_928

><td class="source">}<br></td></tr
><tr
id=sl_svn445_929

><td class="source"><br></td></tr
><tr
id=sl_svn445_930

><td class="source">class AnnotationClientVersionRanges extends apiModel {<br></td></tr
><tr
id=sl_svn445_931

><td class="source">  public $contentVersion;<br></td></tr
><tr
id=sl_svn445_932

><td class="source">  protected $__gbTextRangeType = &#39;BooksAnnotationsRange&#39;;<br></td></tr
><tr
id=sl_svn445_933

><td class="source">  protected $__gbTextRangeDataType = &#39;&#39;;<br></td></tr
><tr
id=sl_svn445_934

><td class="source">  public $gbTextRange;<br></td></tr
><tr
id=sl_svn445_935

><td class="source">  protected $__cfiRangeType = &#39;BooksAnnotationsRange&#39;;<br></td></tr
><tr
id=sl_svn445_936

><td class="source">  protected $__cfiRangeDataType = &#39;&#39;;<br></td></tr
><tr
id=sl_svn445_937

><td class="source">  public $cfiRange;<br></td></tr
><tr
id=sl_svn445_938

><td class="source">  protected $__gbImageRangeType = &#39;BooksAnnotationsRange&#39;;<br></td></tr
><tr
id=sl_svn445_939

><td class="source">  protected $__gbImageRangeDataType = &#39;&#39;;<br></td></tr
><tr
id=sl_svn445_940

><td class="source">  public $gbImageRange;<br></td></tr
><tr
id=sl_svn445_941

><td class="source">  public function setContentVersion($contentVersion) {<br></td></tr
><tr
id=sl_svn445_942

><td class="source">    $this-&gt;contentVersion = $contentVersion;<br></td></tr
><tr
id=sl_svn445_943

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_944

><td class="source">  public function getContentVersion() {<br></td></tr
><tr
id=sl_svn445_945

><td class="source">    return $this-&gt;contentVersion;<br></td></tr
><tr
id=sl_svn445_946

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_947

><td class="source">  public function setGbTextRange(BooksAnnotationsRange $gbTextRange) {<br></td></tr
><tr
id=sl_svn445_948

><td class="source">    $this-&gt;gbTextRange = $gbTextRange;<br></td></tr
><tr
id=sl_svn445_949

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_950

><td class="source">  public function getGbTextRange() {<br></td></tr
><tr
id=sl_svn445_951

><td class="source">    return $this-&gt;gbTextRange;<br></td></tr
><tr
id=sl_svn445_952

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_953

><td class="source">  public function setCfiRange(BooksAnnotationsRange $cfiRange) {<br></td></tr
><tr
id=sl_svn445_954

><td class="source">    $this-&gt;cfiRange = $cfiRange;<br></td></tr
><tr
id=sl_svn445_955

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_956

><td class="source">  public function getCfiRange() {<br></td></tr
><tr
id=sl_svn445_957

><td class="source">    return $this-&gt;cfiRange;<br></td></tr
><tr
id=sl_svn445_958

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_959

><td class="source">  public function setGbImageRange(BooksAnnotationsRange $gbImageRange) {<br></td></tr
><tr
id=sl_svn445_960

><td class="source">    $this-&gt;gbImageRange = $gbImageRange;<br></td></tr
><tr
id=sl_svn445_961

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_962

><td class="source">  public function getGbImageRange() {<br></td></tr
><tr
id=sl_svn445_963

><td class="source">    return $this-&gt;gbImageRange;<br></td></tr
><tr
id=sl_svn445_964

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_965

><td class="source">}<br></td></tr
><tr
id=sl_svn445_966

><td class="source"><br></td></tr
><tr
id=sl_svn445_967

><td class="source">class AnnotationCurrentVersionRanges extends apiModel {<br></td></tr
><tr
id=sl_svn445_968

><td class="source">  public $contentVersion;<br></td></tr
><tr
id=sl_svn445_969

><td class="source">  protected $__gbTextRangeType = &#39;BooksAnnotationsRange&#39;;<br></td></tr
><tr
id=sl_svn445_970

><td class="source">  protected $__gbTextRangeDataType = &#39;&#39;;<br></td></tr
><tr
id=sl_svn445_971

><td class="source">  public $gbTextRange;<br></td></tr
><tr
id=sl_svn445_972

><td class="source">  protected $__cfiRangeType = &#39;BooksAnnotationsRange&#39;;<br></td></tr
><tr
id=sl_svn445_973

><td class="source">  protected $__cfiRangeDataType = &#39;&#39;;<br></td></tr
><tr
id=sl_svn445_974

><td class="source">  public $cfiRange;<br></td></tr
><tr
id=sl_svn445_975

><td class="source">  protected $__gbImageRangeType = &#39;BooksAnnotationsRange&#39;;<br></td></tr
><tr
id=sl_svn445_976

><td class="source">  protected $__gbImageRangeDataType = &#39;&#39;;<br></td></tr
><tr
id=sl_svn445_977

><td class="source">  public $gbImageRange;<br></td></tr
><tr
id=sl_svn445_978

><td class="source">  public function setContentVersion($contentVersion) {<br></td></tr
><tr
id=sl_svn445_979

><td class="source">    $this-&gt;contentVersion = $contentVersion;<br></td></tr
><tr
id=sl_svn445_980

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_981

><td class="source">  public function getContentVersion() {<br></td></tr
><tr
id=sl_svn445_982

><td class="source">    return $this-&gt;contentVersion;<br></td></tr
><tr
id=sl_svn445_983

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_984

><td class="source">  public function setGbTextRange(BooksAnnotationsRange $gbTextRange) {<br></td></tr
><tr
id=sl_svn445_985

><td class="source">    $this-&gt;gbTextRange = $gbTextRange;<br></td></tr
><tr
id=sl_svn445_986

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_987

><td class="source">  public function getGbTextRange() {<br></td></tr
><tr
id=sl_svn445_988

><td class="source">    return $this-&gt;gbTextRange;<br></td></tr
><tr
id=sl_svn445_989

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_990

><td class="source">  public function setCfiRange(BooksAnnotationsRange $cfiRange) {<br></td></tr
><tr
id=sl_svn445_991

><td class="source">    $this-&gt;cfiRange = $cfiRange;<br></td></tr
><tr
id=sl_svn445_992

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_993

><td class="source">  public function getCfiRange() {<br></td></tr
><tr
id=sl_svn445_994

><td class="source">    return $this-&gt;cfiRange;<br></td></tr
><tr
id=sl_svn445_995

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_996

><td class="source">  public function setGbImageRange(BooksAnnotationsRange $gbImageRange) {<br></td></tr
><tr
id=sl_svn445_997

><td class="source">    $this-&gt;gbImageRange = $gbImageRange;<br></td></tr
><tr
id=sl_svn445_998

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_999

><td class="source">  public function getGbImageRange() {<br></td></tr
><tr
id=sl_svn445_1000

><td class="source">    return $this-&gt;gbImageRange;<br></td></tr
><tr
id=sl_svn445_1001

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1002

><td class="source">}<br></td></tr
><tr
id=sl_svn445_1003

><td class="source"><br></td></tr
><tr
id=sl_svn445_1004

><td class="source">class Annotationdata extends apiModel {<br></td></tr
><tr
id=sl_svn445_1005

><td class="source">  public $annotationType;<br></td></tr
><tr
id=sl_svn445_1006

><td class="source">  public $kind;<br></td></tr
><tr
id=sl_svn445_1007

><td class="source">  public $updated;<br></td></tr
><tr
id=sl_svn445_1008

><td class="source">  public $volumeId;<br></td></tr
><tr
id=sl_svn445_1009

><td class="source">  public $encoded_data;<br></td></tr
><tr
id=sl_svn445_1010

><td class="source">  public $layerId;<br></td></tr
><tr
id=sl_svn445_1011

><td class="source">  protected $__dataType = &#39;BooksLayerGeoData&#39;;<br></td></tr
><tr
id=sl_svn445_1012

><td class="source">  protected $__dataDataType = &#39;&#39;;<br></td></tr
><tr
id=sl_svn445_1013

><td class="source">  public $data;<br></td></tr
><tr
id=sl_svn445_1014

><td class="source">  public $id;<br></td></tr
><tr
id=sl_svn445_1015

><td class="source">  public $selfLink;<br></td></tr
><tr
id=sl_svn445_1016

><td class="source">  public function setAnnotationType($annotationType) {<br></td></tr
><tr
id=sl_svn445_1017

><td class="source">    $this-&gt;annotationType = $annotationType;<br></td></tr
><tr
id=sl_svn445_1018

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1019

><td class="source">  public function getAnnotationType() {<br></td></tr
><tr
id=sl_svn445_1020

><td class="source">    return $this-&gt;annotationType;<br></td></tr
><tr
id=sl_svn445_1021

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1022

><td class="source">  public function setKind($kind) {<br></td></tr
><tr
id=sl_svn445_1023

><td class="source">    $this-&gt;kind = $kind;<br></td></tr
><tr
id=sl_svn445_1024

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1025

><td class="source">  public function getKind() {<br></td></tr
><tr
id=sl_svn445_1026

><td class="source">    return $this-&gt;kind;<br></td></tr
><tr
id=sl_svn445_1027

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1028

><td class="source">  public function setUpdated($updated) {<br></td></tr
><tr
id=sl_svn445_1029

><td class="source">    $this-&gt;updated = $updated;<br></td></tr
><tr
id=sl_svn445_1030

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1031

><td class="source">  public function getUpdated() {<br></td></tr
><tr
id=sl_svn445_1032

><td class="source">    return $this-&gt;updated;<br></td></tr
><tr
id=sl_svn445_1033

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1034

><td class="source">  public function setVolumeId($volumeId) {<br></td></tr
><tr
id=sl_svn445_1035

><td class="source">    $this-&gt;volumeId = $volumeId;<br></td></tr
><tr
id=sl_svn445_1036

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1037

><td class="source">  public function getVolumeId() {<br></td></tr
><tr
id=sl_svn445_1038

><td class="source">    return $this-&gt;volumeId;<br></td></tr
><tr
id=sl_svn445_1039

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1040

><td class="source">  public function setEncoded_data($encoded_data) {<br></td></tr
><tr
id=sl_svn445_1041

><td class="source">    $this-&gt;encoded_data = $encoded_data;<br></td></tr
><tr
id=sl_svn445_1042

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1043

><td class="source">  public function getEncoded_data() {<br></td></tr
><tr
id=sl_svn445_1044

><td class="source">    return $this-&gt;encoded_data;<br></td></tr
><tr
id=sl_svn445_1045

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1046

><td class="source">  public function setLayerId($layerId) {<br></td></tr
><tr
id=sl_svn445_1047

><td class="source">    $this-&gt;layerId = $layerId;<br></td></tr
><tr
id=sl_svn445_1048

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1049

><td class="source">  public function getLayerId() {<br></td></tr
><tr
id=sl_svn445_1050

><td class="source">    return $this-&gt;layerId;<br></td></tr
><tr
id=sl_svn445_1051

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1052

><td class="source">  public function setData(BooksLayerGeoData $data) {<br></td></tr
><tr
id=sl_svn445_1053

><td class="source">    $this-&gt;data = $data;<br></td></tr
><tr
id=sl_svn445_1054

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1055

><td class="source">  public function getData() {<br></td></tr
><tr
id=sl_svn445_1056

><td class="source">    return $this-&gt;data;<br></td></tr
><tr
id=sl_svn445_1057

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1058

><td class="source">  public function setId($id) {<br></td></tr
><tr
id=sl_svn445_1059

><td class="source">    $this-&gt;id = $id;<br></td></tr
><tr
id=sl_svn445_1060

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1061

><td class="source">  public function getId() {<br></td></tr
><tr
id=sl_svn445_1062

><td class="source">    return $this-&gt;id;<br></td></tr
><tr
id=sl_svn445_1063

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1064

><td class="source">  public function setSelfLink($selfLink) {<br></td></tr
><tr
id=sl_svn445_1065

><td class="source">    $this-&gt;selfLink = $selfLink;<br></td></tr
><tr
id=sl_svn445_1066

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1067

><td class="source">  public function getSelfLink() {<br></td></tr
><tr
id=sl_svn445_1068

><td class="source">    return $this-&gt;selfLink;<br></td></tr
><tr
id=sl_svn445_1069

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1070

><td class="source">}<br></td></tr
><tr
id=sl_svn445_1071

><td class="source"><br></td></tr
><tr
id=sl_svn445_1072

><td class="source">class Annotations extends apiModel {<br></td></tr
><tr
id=sl_svn445_1073

><td class="source">  public $nextPageToken;<br></td></tr
><tr
id=sl_svn445_1074

><td class="source">  protected $__itemsType = &#39;Annotation&#39;;<br></td></tr
><tr
id=sl_svn445_1075

><td class="source">  protected $__itemsDataType = &#39;array&#39;;<br></td></tr
><tr
id=sl_svn445_1076

><td class="source">  public $items;<br></td></tr
><tr
id=sl_svn445_1077

><td class="source">  public $kind;<br></td></tr
><tr
id=sl_svn445_1078

><td class="source">  public $totalItems;<br></td></tr
><tr
id=sl_svn445_1079

><td class="source">  public function setNextPageToken($nextPageToken) {<br></td></tr
><tr
id=sl_svn445_1080

><td class="source">    $this-&gt;nextPageToken = $nextPageToken;<br></td></tr
><tr
id=sl_svn445_1081

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1082

><td class="source">  public function getNextPageToken() {<br></td></tr
><tr
id=sl_svn445_1083

><td class="source">    return $this-&gt;nextPageToken;<br></td></tr
><tr
id=sl_svn445_1084

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1085

><td class="source">  public function setItems(/* array(Annotation) */ $items) {<br></td></tr
><tr
id=sl_svn445_1086

><td class="source">    $this-&gt;assertIsArray($items, &#39;Annotation&#39;, __METHOD__);<br></td></tr
><tr
id=sl_svn445_1087

><td class="source">    $this-&gt;items = $items;<br></td></tr
><tr
id=sl_svn445_1088

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1089

><td class="source">  public function getItems() {<br></td></tr
><tr
id=sl_svn445_1090

><td class="source">    return $this-&gt;items;<br></td></tr
><tr
id=sl_svn445_1091

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1092

><td class="source">  public function setKind($kind) {<br></td></tr
><tr
id=sl_svn445_1093

><td class="source">    $this-&gt;kind = $kind;<br></td></tr
><tr
id=sl_svn445_1094

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1095

><td class="source">  public function getKind() {<br></td></tr
><tr
id=sl_svn445_1096

><td class="source">    return $this-&gt;kind;<br></td></tr
><tr
id=sl_svn445_1097

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1098

><td class="source">  public function setTotalItems($totalItems) {<br></td></tr
><tr
id=sl_svn445_1099

><td class="source">    $this-&gt;totalItems = $totalItems;<br></td></tr
><tr
id=sl_svn445_1100

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1101

><td class="source">  public function getTotalItems() {<br></td></tr
><tr
id=sl_svn445_1102

><td class="source">    return $this-&gt;totalItems;<br></td></tr
><tr
id=sl_svn445_1103

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1104

><td class="source">}<br></td></tr
><tr
id=sl_svn445_1105

><td class="source"><br></td></tr
><tr
id=sl_svn445_1106

><td class="source">class Annotationsdata extends apiModel {<br></td></tr
><tr
id=sl_svn445_1107

><td class="source">  public $nextPageToken;<br></td></tr
><tr
id=sl_svn445_1108

><td class="source">  protected $__itemsType = &#39;Annotationdata&#39;;<br></td></tr
><tr
id=sl_svn445_1109

><td class="source">  protected $__itemsDataType = &#39;array&#39;;<br></td></tr
><tr
id=sl_svn445_1110

><td class="source">  public $items;<br></td></tr
><tr
id=sl_svn445_1111

><td class="source">  public $kind;<br></td></tr
><tr
id=sl_svn445_1112

><td class="source">  public $totalItems;<br></td></tr
><tr
id=sl_svn445_1113

><td class="source">  public function setNextPageToken($nextPageToken) {<br></td></tr
><tr
id=sl_svn445_1114

><td class="source">    $this-&gt;nextPageToken = $nextPageToken;<br></td></tr
><tr
id=sl_svn445_1115

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1116

><td class="source">  public function getNextPageToken() {<br></td></tr
><tr
id=sl_svn445_1117

><td class="source">    return $this-&gt;nextPageToken;<br></td></tr
><tr
id=sl_svn445_1118

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1119

><td class="source">  public function setItems(/* array(Annotationdata) */ $items) {<br></td></tr
><tr
id=sl_svn445_1120

><td class="source">    $this-&gt;assertIsArray($items, &#39;Annotationdata&#39;, __METHOD__);<br></td></tr
><tr
id=sl_svn445_1121

><td class="source">    $this-&gt;items = $items;<br></td></tr
><tr
id=sl_svn445_1122

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1123

><td class="source">  public function getItems() {<br></td></tr
><tr
id=sl_svn445_1124

><td class="source">    return $this-&gt;items;<br></td></tr
><tr
id=sl_svn445_1125

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1126

><td class="source">  public function setKind($kind) {<br></td></tr
><tr
id=sl_svn445_1127

><td class="source">    $this-&gt;kind = $kind;<br></td></tr
><tr
id=sl_svn445_1128

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1129

><td class="source">  public function getKind() {<br></td></tr
><tr
id=sl_svn445_1130

><td class="source">    return $this-&gt;kind;<br></td></tr
><tr
id=sl_svn445_1131

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1132

><td class="source">  public function setTotalItems($totalItems) {<br></td></tr
><tr
id=sl_svn445_1133

><td class="source">    $this-&gt;totalItems = $totalItems;<br></td></tr
><tr
id=sl_svn445_1134

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1135

><td class="source">  public function getTotalItems() {<br></td></tr
><tr
id=sl_svn445_1136

><td class="source">    return $this-&gt;totalItems;<br></td></tr
><tr
id=sl_svn445_1137

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1138

><td class="source">}<br></td></tr
><tr
id=sl_svn445_1139

><td class="source"><br></td></tr
><tr
id=sl_svn445_1140

><td class="source">class BooksAnnotationsRange extends apiModel {<br></td></tr
><tr
id=sl_svn445_1141

><td class="source">  public $startPosition;<br></td></tr
><tr
id=sl_svn445_1142

><td class="source">  public $endPosition;<br></td></tr
><tr
id=sl_svn445_1143

><td class="source">  public $startOffset;<br></td></tr
><tr
id=sl_svn445_1144

><td class="source">  public $endOffset;<br></td></tr
><tr
id=sl_svn445_1145

><td class="source">  public function setStartPosition($startPosition) {<br></td></tr
><tr
id=sl_svn445_1146

><td class="source">    $this-&gt;startPosition = $startPosition;<br></td></tr
><tr
id=sl_svn445_1147

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1148

><td class="source">  public function getStartPosition() {<br></td></tr
><tr
id=sl_svn445_1149

><td class="source">    return $this-&gt;startPosition;<br></td></tr
><tr
id=sl_svn445_1150

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1151

><td class="source">  public function setEndPosition($endPosition) {<br></td></tr
><tr
id=sl_svn445_1152

><td class="source">    $this-&gt;endPosition = $endPosition;<br></td></tr
><tr
id=sl_svn445_1153

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1154

><td class="source">  public function getEndPosition() {<br></td></tr
><tr
id=sl_svn445_1155

><td class="source">    return $this-&gt;endPosition;<br></td></tr
><tr
id=sl_svn445_1156

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1157

><td class="source">  public function setStartOffset($startOffset) {<br></td></tr
><tr
id=sl_svn445_1158

><td class="source">    $this-&gt;startOffset = $startOffset;<br></td></tr
><tr
id=sl_svn445_1159

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1160

><td class="source">  public function getStartOffset() {<br></td></tr
><tr
id=sl_svn445_1161

><td class="source">    return $this-&gt;startOffset;<br></td></tr
><tr
id=sl_svn445_1162

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1163

><td class="source">  public function setEndOffset($endOffset) {<br></td></tr
><tr
id=sl_svn445_1164

><td class="source">    $this-&gt;endOffset = $endOffset;<br></td></tr
><tr
id=sl_svn445_1165

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1166

><td class="source">  public function getEndOffset() {<br></td></tr
><tr
id=sl_svn445_1167

><td class="source">    return $this-&gt;endOffset;<br></td></tr
><tr
id=sl_svn445_1168

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1169

><td class="source">}<br></td></tr
><tr
id=sl_svn445_1170

><td class="source"><br></td></tr
><tr
id=sl_svn445_1171

><td class="source">class BooksLayerGeoData extends apiModel {<br></td></tr
><tr
id=sl_svn445_1172

><td class="source">  protected $__geoType = &#39;BooksLayerGeoDataGeo&#39;;<br></td></tr
><tr
id=sl_svn445_1173

><td class="source">  protected $__geoDataType = &#39;&#39;;<br></td></tr
><tr
id=sl_svn445_1174

><td class="source">  public $geo;<br></td></tr
><tr
id=sl_svn445_1175

><td class="source">  protected $__commonType = &#39;BooksLayerGeoDataCommon&#39;;<br></td></tr
><tr
id=sl_svn445_1176

><td class="source">  protected $__commonDataType = &#39;&#39;;<br></td></tr
><tr
id=sl_svn445_1177

><td class="source">  public $common;<br></td></tr
><tr
id=sl_svn445_1178

><td class="source">  public function setGeo(BooksLayerGeoDataGeo $geo) {<br></td></tr
><tr
id=sl_svn445_1179

><td class="source">    $this-&gt;geo = $geo;<br></td></tr
><tr
id=sl_svn445_1180

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1181

><td class="source">  public function getGeo() {<br></td></tr
><tr
id=sl_svn445_1182

><td class="source">    return $this-&gt;geo;<br></td></tr
><tr
id=sl_svn445_1183

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1184

><td class="source">  public function setCommon(BooksLayerGeoDataCommon $common) {<br></td></tr
><tr
id=sl_svn445_1185

><td class="source">    $this-&gt;common = $common;<br></td></tr
><tr
id=sl_svn445_1186

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1187

><td class="source">  public function getCommon() {<br></td></tr
><tr
id=sl_svn445_1188

><td class="source">    return $this-&gt;common;<br></td></tr
><tr
id=sl_svn445_1189

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1190

><td class="source">}<br></td></tr
><tr
id=sl_svn445_1191

><td class="source"><br></td></tr
><tr
id=sl_svn445_1192

><td class="source">class BooksLayerGeoDataCommon extends apiModel {<br></td></tr
><tr
id=sl_svn445_1193

><td class="source">  public $lang;<br></td></tr
><tr
id=sl_svn445_1194

><td class="source">  public $previewImageUrl;<br></td></tr
><tr
id=sl_svn445_1195

><td class="source">  public $snippet;<br></td></tr
><tr
id=sl_svn445_1196

><td class="source">  public $snippetUrl;<br></td></tr
><tr
id=sl_svn445_1197

><td class="source">  public function setLang($lang) {<br></td></tr
><tr
id=sl_svn445_1198

><td class="source">    $this-&gt;lang = $lang;<br></td></tr
><tr
id=sl_svn445_1199

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1200

><td class="source">  public function getLang() {<br></td></tr
><tr
id=sl_svn445_1201

><td class="source">    return $this-&gt;lang;<br></td></tr
><tr
id=sl_svn445_1202

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1203

><td class="source">  public function setPreviewImageUrl($previewImageUrl) {<br></td></tr
><tr
id=sl_svn445_1204

><td class="source">    $this-&gt;previewImageUrl = $previewImageUrl;<br></td></tr
><tr
id=sl_svn445_1205

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1206

><td class="source">  public function getPreviewImageUrl() {<br></td></tr
><tr
id=sl_svn445_1207

><td class="source">    return $this-&gt;previewImageUrl;<br></td></tr
><tr
id=sl_svn445_1208

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1209

><td class="source">  public function setSnippet($snippet) {<br></td></tr
><tr
id=sl_svn445_1210

><td class="source">    $this-&gt;snippet = $snippet;<br></td></tr
><tr
id=sl_svn445_1211

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1212

><td class="source">  public function getSnippet() {<br></td></tr
><tr
id=sl_svn445_1213

><td class="source">    return $this-&gt;snippet;<br></td></tr
><tr
id=sl_svn445_1214

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1215

><td class="source">  public function setSnippetUrl($snippetUrl) {<br></td></tr
><tr
id=sl_svn445_1216

><td class="source">    $this-&gt;snippetUrl = $snippetUrl;<br></td></tr
><tr
id=sl_svn445_1217

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1218

><td class="source">  public function getSnippetUrl() {<br></td></tr
><tr
id=sl_svn445_1219

><td class="source">    return $this-&gt;snippetUrl;<br></td></tr
><tr
id=sl_svn445_1220

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1221

><td class="source">}<br></td></tr
><tr
id=sl_svn445_1222

><td class="source"><br></td></tr
><tr
id=sl_svn445_1223

><td class="source">class BooksLayerGeoDataGeo extends apiModel {<br></td></tr
><tr
id=sl_svn445_1224

><td class="source">  public $countryCode;<br></td></tr
><tr
id=sl_svn445_1225

><td class="source">  public $longitude;<br></td></tr
><tr
id=sl_svn445_1226

><td class="source">  public $mapType;<br></td></tr
><tr
id=sl_svn445_1227

><td class="source">  public $latitude;<br></td></tr
><tr
id=sl_svn445_1228

><td class="source">  protected $__boundaryType = &#39;BooksLayerGeoDataGeoBoundary&#39;;<br></td></tr
><tr
id=sl_svn445_1229

><td class="source">  protected $__boundaryDataType = &#39;array&#39;;<br></td></tr
><tr
id=sl_svn445_1230

><td class="source">  public $boundary;<br></td></tr
><tr
id=sl_svn445_1231

><td class="source">  public $resolution;<br></td></tr
><tr
id=sl_svn445_1232

><td class="source">  protected $__viewportType = &#39;BooksLayerGeoDataGeoViewport&#39;;<br></td></tr
><tr
id=sl_svn445_1233

><td class="source">  protected $__viewportDataType = &#39;&#39;;<br></td></tr
><tr
id=sl_svn445_1234

><td class="source">  public $viewport;<br></td></tr
><tr
id=sl_svn445_1235

><td class="source">  public $cachePolicy;<br></td></tr
><tr
id=sl_svn445_1236

><td class="source">  public function setCountryCode($countryCode) {<br></td></tr
><tr
id=sl_svn445_1237

><td class="source">    $this-&gt;countryCode = $countryCode;<br></td></tr
><tr
id=sl_svn445_1238

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1239

><td class="source">  public function getCountryCode() {<br></td></tr
><tr
id=sl_svn445_1240

><td class="source">    return $this-&gt;countryCode;<br></td></tr
><tr
id=sl_svn445_1241

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1242

><td class="source">  public function setLongitude($longitude) {<br></td></tr
><tr
id=sl_svn445_1243

><td class="source">    $this-&gt;longitude = $longitude;<br></td></tr
><tr
id=sl_svn445_1244

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1245

><td class="source">  public function getLongitude() {<br></td></tr
><tr
id=sl_svn445_1246

><td class="source">    return $this-&gt;longitude;<br></td></tr
><tr
id=sl_svn445_1247

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1248

><td class="source">  public function setMapType($mapType) {<br></td></tr
><tr
id=sl_svn445_1249

><td class="source">    $this-&gt;mapType = $mapType;<br></td></tr
><tr
id=sl_svn445_1250

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1251

><td class="source">  public function getMapType() {<br></td></tr
><tr
id=sl_svn445_1252

><td class="source">    return $this-&gt;mapType;<br></td></tr
><tr
id=sl_svn445_1253

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1254

><td class="source">  public function setLatitude($latitude) {<br></td></tr
><tr
id=sl_svn445_1255

><td class="source">    $this-&gt;latitude = $latitude;<br></td></tr
><tr
id=sl_svn445_1256

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1257

><td class="source">  public function getLatitude() {<br></td></tr
><tr
id=sl_svn445_1258

><td class="source">    return $this-&gt;latitude;<br></td></tr
><tr
id=sl_svn445_1259

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1260

><td class="source">  public function setBoundary(/* array(BooksLayerGeoDataGeoBoundary) */ $boundary) {<br></td></tr
><tr
id=sl_svn445_1261

><td class="source">    $this-&gt;assertIsArray($boundary, &#39;BooksLayerGeoDataGeoBoundary&#39;, __METHOD__);<br></td></tr
><tr
id=sl_svn445_1262

><td class="source">    $this-&gt;boundary = $boundary;<br></td></tr
><tr
id=sl_svn445_1263

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1264

><td class="source">  public function getBoundary() {<br></td></tr
><tr
id=sl_svn445_1265

><td class="source">    return $this-&gt;boundary;<br></td></tr
><tr
id=sl_svn445_1266

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1267

><td class="source">  public function setResolution($resolution) {<br></td></tr
><tr
id=sl_svn445_1268

><td class="source">    $this-&gt;resolution = $resolution;<br></td></tr
><tr
id=sl_svn445_1269

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1270

><td class="source">  public function getResolution() {<br></td></tr
><tr
id=sl_svn445_1271

><td class="source">    return $this-&gt;resolution;<br></td></tr
><tr
id=sl_svn445_1272

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1273

><td class="source">  public function setViewport(BooksLayerGeoDataGeoViewport $viewport) {<br></td></tr
><tr
id=sl_svn445_1274

><td class="source">    $this-&gt;viewport = $viewport;<br></td></tr
><tr
id=sl_svn445_1275

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1276

><td class="source">  public function getViewport() {<br></td></tr
><tr
id=sl_svn445_1277

><td class="source">    return $this-&gt;viewport;<br></td></tr
><tr
id=sl_svn445_1278

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1279

><td class="source">  public function setCachePolicy($cachePolicy) {<br></td></tr
><tr
id=sl_svn445_1280

><td class="source">    $this-&gt;cachePolicy = $cachePolicy;<br></td></tr
><tr
id=sl_svn445_1281

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1282

><td class="source">  public function getCachePolicy() {<br></td></tr
><tr
id=sl_svn445_1283

><td class="source">    return $this-&gt;cachePolicy;<br></td></tr
><tr
id=sl_svn445_1284

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1285

><td class="source">}<br></td></tr
><tr
id=sl_svn445_1286

><td class="source"><br></td></tr
><tr
id=sl_svn445_1287

><td class="source">class BooksLayerGeoDataGeoBoundary extends apiModel {<br></td></tr
><tr
id=sl_svn445_1288

><td class="source">  public $latitude;<br></td></tr
><tr
id=sl_svn445_1289

><td class="source">  public $longitude;<br></td></tr
><tr
id=sl_svn445_1290

><td class="source">  public function setLatitude($latitude) {<br></td></tr
><tr
id=sl_svn445_1291

><td class="source">    $this-&gt;latitude = $latitude;<br></td></tr
><tr
id=sl_svn445_1292

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1293

><td class="source">  public function getLatitude() {<br></td></tr
><tr
id=sl_svn445_1294

><td class="source">    return $this-&gt;latitude;<br></td></tr
><tr
id=sl_svn445_1295

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1296

><td class="source">  public function setLongitude($longitude) {<br></td></tr
><tr
id=sl_svn445_1297

><td class="source">    $this-&gt;longitude = $longitude;<br></td></tr
><tr
id=sl_svn445_1298

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1299

><td class="source">  public function getLongitude() {<br></td></tr
><tr
id=sl_svn445_1300

><td class="source">    return $this-&gt;longitude;<br></td></tr
><tr
id=sl_svn445_1301

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1302

><td class="source">}<br></td></tr
><tr
id=sl_svn445_1303

><td class="source"><br></td></tr
><tr
id=sl_svn445_1304

><td class="source">class BooksLayerGeoDataGeoViewport extends apiModel {<br></td></tr
><tr
id=sl_svn445_1305

><td class="source">  protected $__loType = &#39;BooksLayerGeoDataGeoViewportLo&#39;;<br></td></tr
><tr
id=sl_svn445_1306

><td class="source">  protected $__loDataType = &#39;&#39;;<br></td></tr
><tr
id=sl_svn445_1307

><td class="source">  public $lo;<br></td></tr
><tr
id=sl_svn445_1308

><td class="source">  protected $__hiType = &#39;BooksLayerGeoDataGeoViewportHi&#39;;<br></td></tr
><tr
id=sl_svn445_1309

><td class="source">  protected $__hiDataType = &#39;&#39;;<br></td></tr
><tr
id=sl_svn445_1310

><td class="source">  public $hi;<br></td></tr
><tr
id=sl_svn445_1311

><td class="source">  public function setLo(BooksLayerGeoDataGeoViewportLo $lo) {<br></td></tr
><tr
id=sl_svn445_1312

><td class="source">    $this-&gt;lo = $lo;<br></td></tr
><tr
id=sl_svn445_1313

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1314

><td class="source">  public function getLo() {<br></td></tr
><tr
id=sl_svn445_1315

><td class="source">    return $this-&gt;lo;<br></td></tr
><tr
id=sl_svn445_1316

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1317

><td class="source">  public function setHi(BooksLayerGeoDataGeoViewportHi $hi) {<br></td></tr
><tr
id=sl_svn445_1318

><td class="source">    $this-&gt;hi = $hi;<br></td></tr
><tr
id=sl_svn445_1319

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1320

><td class="source">  public function getHi() {<br></td></tr
><tr
id=sl_svn445_1321

><td class="source">    return $this-&gt;hi;<br></td></tr
><tr
id=sl_svn445_1322

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1323

><td class="source">}<br></td></tr
><tr
id=sl_svn445_1324

><td class="source"><br></td></tr
><tr
id=sl_svn445_1325

><td class="source">class BooksLayerGeoDataGeoViewportHi extends apiModel {<br></td></tr
><tr
id=sl_svn445_1326

><td class="source">  public $latitude;<br></td></tr
><tr
id=sl_svn445_1327

><td class="source">  public $longitude;<br></td></tr
><tr
id=sl_svn445_1328

><td class="source">  public function setLatitude($latitude) {<br></td></tr
><tr
id=sl_svn445_1329

><td class="source">    $this-&gt;latitude = $latitude;<br></td></tr
><tr
id=sl_svn445_1330

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1331

><td class="source">  public function getLatitude() {<br></td></tr
><tr
id=sl_svn445_1332

><td class="source">    return $this-&gt;latitude;<br></td></tr
><tr
id=sl_svn445_1333

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1334

><td class="source">  public function setLongitude($longitude) {<br></td></tr
><tr
id=sl_svn445_1335

><td class="source">    $this-&gt;longitude = $longitude;<br></td></tr
><tr
id=sl_svn445_1336

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1337

><td class="source">  public function getLongitude() {<br></td></tr
><tr
id=sl_svn445_1338

><td class="source">    return $this-&gt;longitude;<br></td></tr
><tr
id=sl_svn445_1339

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1340

><td class="source">}<br></td></tr
><tr
id=sl_svn445_1341

><td class="source"><br></td></tr
><tr
id=sl_svn445_1342

><td class="source">class BooksLayerGeoDataGeoViewportLo extends apiModel {<br></td></tr
><tr
id=sl_svn445_1343

><td class="source">  public $latitude;<br></td></tr
><tr
id=sl_svn445_1344

><td class="source">  public $longitude;<br></td></tr
><tr
id=sl_svn445_1345

><td class="source">  public function setLatitude($latitude) {<br></td></tr
><tr
id=sl_svn445_1346

><td class="source">    $this-&gt;latitude = $latitude;<br></td></tr
><tr
id=sl_svn445_1347

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1348

><td class="source">  public function getLatitude() {<br></td></tr
><tr
id=sl_svn445_1349

><td class="source">    return $this-&gt;latitude;<br></td></tr
><tr
id=sl_svn445_1350

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1351

><td class="source">  public function setLongitude($longitude) {<br></td></tr
><tr
id=sl_svn445_1352

><td class="source">    $this-&gt;longitude = $longitude;<br></td></tr
><tr
id=sl_svn445_1353

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1354

><td class="source">  public function getLongitude() {<br></td></tr
><tr
id=sl_svn445_1355

><td class="source">    return $this-&gt;longitude;<br></td></tr
><tr
id=sl_svn445_1356

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1357

><td class="source">}<br></td></tr
><tr
id=sl_svn445_1358

><td class="source"><br></td></tr
><tr
id=sl_svn445_1359

><td class="source">class Bookshelf extends apiModel {<br></td></tr
><tr
id=sl_svn445_1360

><td class="source">  public $kind;<br></td></tr
><tr
id=sl_svn445_1361

><td class="source">  public $description;<br></td></tr
><tr
id=sl_svn445_1362

><td class="source">  public $created;<br></td></tr
><tr
id=sl_svn445_1363

><td class="source">  public $volumeCount;<br></td></tr
><tr
id=sl_svn445_1364

><td class="source">  public $title;<br></td></tr
><tr
id=sl_svn445_1365

><td class="source">  public $updated;<br></td></tr
><tr
id=sl_svn445_1366

><td class="source">  public $access;<br></td></tr
><tr
id=sl_svn445_1367

><td class="source">  public $volumesLastUpdated;<br></td></tr
><tr
id=sl_svn445_1368

><td class="source">  public $id;<br></td></tr
><tr
id=sl_svn445_1369

><td class="source">  public $selfLink;<br></td></tr
><tr
id=sl_svn445_1370

><td class="source">  public function setKind($kind) {<br></td></tr
><tr
id=sl_svn445_1371

><td class="source">    $this-&gt;kind = $kind;<br></td></tr
><tr
id=sl_svn445_1372

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1373

><td class="source">  public function getKind() {<br></td></tr
><tr
id=sl_svn445_1374

><td class="source">    return $this-&gt;kind;<br></td></tr
><tr
id=sl_svn445_1375

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1376

><td class="source">  public function setDescription($description) {<br></td></tr
><tr
id=sl_svn445_1377

><td class="source">    $this-&gt;description = $description;<br></td></tr
><tr
id=sl_svn445_1378

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1379

><td class="source">  public function getDescription() {<br></td></tr
><tr
id=sl_svn445_1380

><td class="source">    return $this-&gt;description;<br></td></tr
><tr
id=sl_svn445_1381

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1382

><td class="source">  public function setCreated($created) {<br></td></tr
><tr
id=sl_svn445_1383

><td class="source">    $this-&gt;created = $created;<br></td></tr
><tr
id=sl_svn445_1384

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1385

><td class="source">  public function getCreated() {<br></td></tr
><tr
id=sl_svn445_1386

><td class="source">    return $this-&gt;created;<br></td></tr
><tr
id=sl_svn445_1387

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1388

><td class="source">  public function setVolumeCount($volumeCount) {<br></td></tr
><tr
id=sl_svn445_1389

><td class="source">    $this-&gt;volumeCount = $volumeCount;<br></td></tr
><tr
id=sl_svn445_1390

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1391

><td class="source">  public function getVolumeCount() {<br></td></tr
><tr
id=sl_svn445_1392

><td class="source">    return $this-&gt;volumeCount;<br></td></tr
><tr
id=sl_svn445_1393

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1394

><td class="source">  public function setTitle($title) {<br></td></tr
><tr
id=sl_svn445_1395

><td class="source">    $this-&gt;title = $title;<br></td></tr
><tr
id=sl_svn445_1396

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1397

><td class="source">  public function getTitle() {<br></td></tr
><tr
id=sl_svn445_1398

><td class="source">    return $this-&gt;title;<br></td></tr
><tr
id=sl_svn445_1399

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1400

><td class="source">  public function setUpdated($updated) {<br></td></tr
><tr
id=sl_svn445_1401

><td class="source">    $this-&gt;updated = $updated;<br></td></tr
><tr
id=sl_svn445_1402

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1403

><td class="source">  public function getUpdated() {<br></td></tr
><tr
id=sl_svn445_1404

><td class="source">    return $this-&gt;updated;<br></td></tr
><tr
id=sl_svn445_1405

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1406

><td class="source">  public function setAccess($access) {<br></td></tr
><tr
id=sl_svn445_1407

><td class="source">    $this-&gt;access = $access;<br></td></tr
><tr
id=sl_svn445_1408

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1409

><td class="source">  public function getAccess() {<br></td></tr
><tr
id=sl_svn445_1410

><td class="source">    return $this-&gt;access;<br></td></tr
><tr
id=sl_svn445_1411

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1412

><td class="source">  public function setVolumesLastUpdated($volumesLastUpdated) {<br></td></tr
><tr
id=sl_svn445_1413

><td class="source">    $this-&gt;volumesLastUpdated = $volumesLastUpdated;<br></td></tr
><tr
id=sl_svn445_1414

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1415

><td class="source">  public function getVolumesLastUpdated() {<br></td></tr
><tr
id=sl_svn445_1416

><td class="source">    return $this-&gt;volumesLastUpdated;<br></td></tr
><tr
id=sl_svn445_1417

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1418

><td class="source">  public function setId($id) {<br></td></tr
><tr
id=sl_svn445_1419

><td class="source">    $this-&gt;id = $id;<br></td></tr
><tr
id=sl_svn445_1420

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1421

><td class="source">  public function getId() {<br></td></tr
><tr
id=sl_svn445_1422

><td class="source">    return $this-&gt;id;<br></td></tr
><tr
id=sl_svn445_1423

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1424

><td class="source">  public function setSelfLink($selfLink) {<br></td></tr
><tr
id=sl_svn445_1425

><td class="source">    $this-&gt;selfLink = $selfLink;<br></td></tr
><tr
id=sl_svn445_1426

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1427

><td class="source">  public function getSelfLink() {<br></td></tr
><tr
id=sl_svn445_1428

><td class="source">    return $this-&gt;selfLink;<br></td></tr
><tr
id=sl_svn445_1429

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1430

><td class="source">}<br></td></tr
><tr
id=sl_svn445_1431

><td class="source"><br></td></tr
><tr
id=sl_svn445_1432

><td class="source">class Bookshelves extends apiModel {<br></td></tr
><tr
id=sl_svn445_1433

><td class="source">  protected $__itemsType = &#39;Bookshelf&#39;;<br></td></tr
><tr
id=sl_svn445_1434

><td class="source">  protected $__itemsDataType = &#39;array&#39;;<br></td></tr
><tr
id=sl_svn445_1435

><td class="source">  public $items;<br></td></tr
><tr
id=sl_svn445_1436

><td class="source">  public $kind;<br></td></tr
><tr
id=sl_svn445_1437

><td class="source">  public function setItems(/* array(Bookshelf) */ $items) {<br></td></tr
><tr
id=sl_svn445_1438

><td class="source">    $this-&gt;assertIsArray($items, &#39;Bookshelf&#39;, __METHOD__);<br></td></tr
><tr
id=sl_svn445_1439

><td class="source">    $this-&gt;items = $items;<br></td></tr
><tr
id=sl_svn445_1440

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1441

><td class="source">  public function getItems() {<br></td></tr
><tr
id=sl_svn445_1442

><td class="source">    return $this-&gt;items;<br></td></tr
><tr
id=sl_svn445_1443

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1444

><td class="source">  public function setKind($kind) {<br></td></tr
><tr
id=sl_svn445_1445

><td class="source">    $this-&gt;kind = $kind;<br></td></tr
><tr
id=sl_svn445_1446

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1447

><td class="source">  public function getKind() {<br></td></tr
><tr
id=sl_svn445_1448

><td class="source">    return $this-&gt;kind;<br></td></tr
><tr
id=sl_svn445_1449

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1450

><td class="source">}<br></td></tr
><tr
id=sl_svn445_1451

><td class="source"><br></td></tr
><tr
id=sl_svn445_1452

><td class="source">class ConcurrentAccessRestriction extends apiModel {<br></td></tr
><tr
id=sl_svn445_1453

><td class="source">  public $nonce;<br></td></tr
><tr
id=sl_svn445_1454

><td class="source">  public $kind;<br></td></tr
><tr
id=sl_svn445_1455

><td class="source">  public $restricted;<br></td></tr
><tr
id=sl_svn445_1456

><td class="source">  public $volumeId;<br></td></tr
><tr
id=sl_svn445_1457

><td class="source">  public $maxConcurrentDevices;<br></td></tr
><tr
id=sl_svn445_1458

><td class="source">  public $deviceAllowed;<br></td></tr
><tr
id=sl_svn445_1459

><td class="source">  public $source;<br></td></tr
><tr
id=sl_svn445_1460

><td class="source">  public $timeWindowSeconds;<br></td></tr
><tr
id=sl_svn445_1461

><td class="source">  public $signature;<br></td></tr
><tr
id=sl_svn445_1462

><td class="source">  public $reasonCode;<br></td></tr
><tr
id=sl_svn445_1463

><td class="source">  public $message;<br></td></tr
><tr
id=sl_svn445_1464

><td class="source">  public function setNonce($nonce) {<br></td></tr
><tr
id=sl_svn445_1465

><td class="source">    $this-&gt;nonce = $nonce;<br></td></tr
><tr
id=sl_svn445_1466

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1467

><td class="source">  public function getNonce() {<br></td></tr
><tr
id=sl_svn445_1468

><td class="source">    return $this-&gt;nonce;<br></td></tr
><tr
id=sl_svn445_1469

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1470

><td class="source">  public function setKind($kind) {<br></td></tr
><tr
id=sl_svn445_1471

><td class="source">    $this-&gt;kind = $kind;<br></td></tr
><tr
id=sl_svn445_1472

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1473

><td class="source">  public function getKind() {<br></td></tr
><tr
id=sl_svn445_1474

><td class="source">    return $this-&gt;kind;<br></td></tr
><tr
id=sl_svn445_1475

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1476

><td class="source">  public function setRestricted($restricted) {<br></td></tr
><tr
id=sl_svn445_1477

><td class="source">    $this-&gt;restricted = $restricted;<br></td></tr
><tr
id=sl_svn445_1478

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1479

><td class="source">  public function getRestricted() {<br></td></tr
><tr
id=sl_svn445_1480

><td class="source">    return $this-&gt;restricted;<br></td></tr
><tr
id=sl_svn445_1481

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1482

><td class="source">  public function setVolumeId($volumeId) {<br></td></tr
><tr
id=sl_svn445_1483

><td class="source">    $this-&gt;volumeId = $volumeId;<br></td></tr
><tr
id=sl_svn445_1484

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1485

><td class="source">  public function getVolumeId() {<br></td></tr
><tr
id=sl_svn445_1486

><td class="source">    return $this-&gt;volumeId;<br></td></tr
><tr
id=sl_svn445_1487

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1488

><td class="source">  public function setMaxConcurrentDevices($maxConcurrentDevices) {<br></td></tr
><tr
id=sl_svn445_1489

><td class="source">    $this-&gt;maxConcurrentDevices = $maxConcurrentDevices;<br></td></tr
><tr
id=sl_svn445_1490

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1491

><td class="source">  public function getMaxConcurrentDevices() {<br></td></tr
><tr
id=sl_svn445_1492

><td class="source">    return $this-&gt;maxConcurrentDevices;<br></td></tr
><tr
id=sl_svn445_1493

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1494

><td class="source">  public function setDeviceAllowed($deviceAllowed) {<br></td></tr
><tr
id=sl_svn445_1495

><td class="source">    $this-&gt;deviceAllowed = $deviceAllowed;<br></td></tr
><tr
id=sl_svn445_1496

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1497

><td class="source">  public function getDeviceAllowed() {<br></td></tr
><tr
id=sl_svn445_1498

><td class="source">    return $this-&gt;deviceAllowed;<br></td></tr
><tr
id=sl_svn445_1499

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1500

><td class="source">  public function setSource($source) {<br></td></tr
><tr
id=sl_svn445_1501

><td class="source">    $this-&gt;source = $source;<br></td></tr
><tr
id=sl_svn445_1502

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1503

><td class="source">  public function getSource() {<br></td></tr
><tr
id=sl_svn445_1504

><td class="source">    return $this-&gt;source;<br></td></tr
><tr
id=sl_svn445_1505

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1506

><td class="source">  public function setTimeWindowSeconds($timeWindowSeconds) {<br></td></tr
><tr
id=sl_svn445_1507

><td class="source">    $this-&gt;timeWindowSeconds = $timeWindowSeconds;<br></td></tr
><tr
id=sl_svn445_1508

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1509

><td class="source">  public function getTimeWindowSeconds() {<br></td></tr
><tr
id=sl_svn445_1510

><td class="source">    return $this-&gt;timeWindowSeconds;<br></td></tr
><tr
id=sl_svn445_1511

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1512

><td class="source">  public function setSignature($signature) {<br></td></tr
><tr
id=sl_svn445_1513

><td class="source">    $this-&gt;signature = $signature;<br></td></tr
><tr
id=sl_svn445_1514

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1515

><td class="source">  public function getSignature() {<br></td></tr
><tr
id=sl_svn445_1516

><td class="source">    return $this-&gt;signature;<br></td></tr
><tr
id=sl_svn445_1517

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1518

><td class="source">  public function setReasonCode($reasonCode) {<br></td></tr
><tr
id=sl_svn445_1519

><td class="source">    $this-&gt;reasonCode = $reasonCode;<br></td></tr
><tr
id=sl_svn445_1520

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1521

><td class="source">  public function getReasonCode() {<br></td></tr
><tr
id=sl_svn445_1522

><td class="source">    return $this-&gt;reasonCode;<br></td></tr
><tr
id=sl_svn445_1523

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1524

><td class="source">  public function setMessage($message) {<br></td></tr
><tr
id=sl_svn445_1525

><td class="source">    $this-&gt;message = $message;<br></td></tr
><tr
id=sl_svn445_1526

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1527

><td class="source">  public function getMessage() {<br></td></tr
><tr
id=sl_svn445_1528

><td class="source">    return $this-&gt;message;<br></td></tr
><tr
id=sl_svn445_1529

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1530

><td class="source">}<br></td></tr
><tr
id=sl_svn445_1531

><td class="source"><br></td></tr
><tr
id=sl_svn445_1532

><td class="source">class DownloadAccessRestriction extends apiModel {<br></td></tr
><tr
id=sl_svn445_1533

><td class="source">  public $nonce;<br></td></tr
><tr
id=sl_svn445_1534

><td class="source">  public $kind;<br></td></tr
><tr
id=sl_svn445_1535

><td class="source">  public $justAcquired;<br></td></tr
><tr
id=sl_svn445_1536

><td class="source">  public $maxDownloadDevices;<br></td></tr
><tr
id=sl_svn445_1537

><td class="source">  public $downloadsAcquired;<br></td></tr
><tr
id=sl_svn445_1538

><td class="source">  public $signature;<br></td></tr
><tr
id=sl_svn445_1539

><td class="source">  public $volumeId;<br></td></tr
><tr
id=sl_svn445_1540

><td class="source">  public $deviceAllowed;<br></td></tr
><tr
id=sl_svn445_1541

><td class="source">  public $source;<br></td></tr
><tr
id=sl_svn445_1542

><td class="source">  public $restricted;<br></td></tr
><tr
id=sl_svn445_1543

><td class="source">  public $reasonCode;<br></td></tr
><tr
id=sl_svn445_1544

><td class="source">  public $message;<br></td></tr
><tr
id=sl_svn445_1545

><td class="source">  public function setNonce($nonce) {<br></td></tr
><tr
id=sl_svn445_1546

><td class="source">    $this-&gt;nonce = $nonce;<br></td></tr
><tr
id=sl_svn445_1547

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1548

><td class="source">  public function getNonce() {<br></td></tr
><tr
id=sl_svn445_1549

><td class="source">    return $this-&gt;nonce;<br></td></tr
><tr
id=sl_svn445_1550

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1551

><td class="source">  public function setKind($kind) {<br></td></tr
><tr
id=sl_svn445_1552

><td class="source">    $this-&gt;kind = $kind;<br></td></tr
><tr
id=sl_svn445_1553

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1554

><td class="source">  public function getKind() {<br></td></tr
><tr
id=sl_svn445_1555

><td class="source">    return $this-&gt;kind;<br></td></tr
><tr
id=sl_svn445_1556

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1557

><td class="source">  public function setJustAcquired($justAcquired) {<br></td></tr
><tr
id=sl_svn445_1558

><td class="source">    $this-&gt;justAcquired = $justAcquired;<br></td></tr
><tr
id=sl_svn445_1559

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1560

><td class="source">  public function getJustAcquired() {<br></td></tr
><tr
id=sl_svn445_1561

><td class="source">    return $this-&gt;justAcquired;<br></td></tr
><tr
id=sl_svn445_1562

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1563

><td class="source">  public function setMaxDownloadDevices($maxDownloadDevices) {<br></td></tr
><tr
id=sl_svn445_1564

><td class="source">    $this-&gt;maxDownloadDevices = $maxDownloadDevices;<br></td></tr
><tr
id=sl_svn445_1565

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1566

><td class="source">  public function getMaxDownloadDevices() {<br></td></tr
><tr
id=sl_svn445_1567

><td class="source">    return $this-&gt;maxDownloadDevices;<br></td></tr
><tr
id=sl_svn445_1568

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1569

><td class="source">  public function setDownloadsAcquired($downloadsAcquired) {<br></td></tr
><tr
id=sl_svn445_1570

><td class="source">    $this-&gt;downloadsAcquired = $downloadsAcquired;<br></td></tr
><tr
id=sl_svn445_1571

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1572

><td class="source">  public function getDownloadsAcquired() {<br></td></tr
><tr
id=sl_svn445_1573

><td class="source">    return $this-&gt;downloadsAcquired;<br></td></tr
><tr
id=sl_svn445_1574

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1575

><td class="source">  public function setSignature($signature) {<br></td></tr
><tr
id=sl_svn445_1576

><td class="source">    $this-&gt;signature = $signature;<br></td></tr
><tr
id=sl_svn445_1577

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1578

><td class="source">  public function getSignature() {<br></td></tr
><tr
id=sl_svn445_1579

><td class="source">    return $this-&gt;signature;<br></td></tr
><tr
id=sl_svn445_1580

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1581

><td class="source">  public function setVolumeId($volumeId) {<br></td></tr
><tr
id=sl_svn445_1582

><td class="source">    $this-&gt;volumeId = $volumeId;<br></td></tr
><tr
id=sl_svn445_1583

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1584

><td class="source">  public function getVolumeId() {<br></td></tr
><tr
id=sl_svn445_1585

><td class="source">    return $this-&gt;volumeId;<br></td></tr
><tr
id=sl_svn445_1586

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1587

><td class="source">  public function setDeviceAllowed($deviceAllowed) {<br></td></tr
><tr
id=sl_svn445_1588

><td class="source">    $this-&gt;deviceAllowed = $deviceAllowed;<br></td></tr
><tr
id=sl_svn445_1589

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1590

><td class="source">  public function getDeviceAllowed() {<br></td></tr
><tr
id=sl_svn445_1591

><td class="source">    return $this-&gt;deviceAllowed;<br></td></tr
><tr
id=sl_svn445_1592

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1593

><td class="source">  public function setSource($source) {<br></td></tr
><tr
id=sl_svn445_1594

><td class="source">    $this-&gt;source = $source;<br></td></tr
><tr
id=sl_svn445_1595

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1596

><td class="source">  public function getSource() {<br></td></tr
><tr
id=sl_svn445_1597

><td class="source">    return $this-&gt;source;<br></td></tr
><tr
id=sl_svn445_1598

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1599

><td class="source">  public function setRestricted($restricted) {<br></td></tr
><tr
id=sl_svn445_1600

><td class="source">    $this-&gt;restricted = $restricted;<br></td></tr
><tr
id=sl_svn445_1601

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1602

><td class="source">  public function getRestricted() {<br></td></tr
><tr
id=sl_svn445_1603

><td class="source">    return $this-&gt;restricted;<br></td></tr
><tr
id=sl_svn445_1604

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1605

><td class="source">  public function setReasonCode($reasonCode) {<br></td></tr
><tr
id=sl_svn445_1606

><td class="source">    $this-&gt;reasonCode = $reasonCode;<br></td></tr
><tr
id=sl_svn445_1607

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1608

><td class="source">  public function getReasonCode() {<br></td></tr
><tr
id=sl_svn445_1609

><td class="source">    return $this-&gt;reasonCode;<br></td></tr
><tr
id=sl_svn445_1610

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1611

><td class="source">  public function setMessage($message) {<br></td></tr
><tr
id=sl_svn445_1612

><td class="source">    $this-&gt;message = $message;<br></td></tr
><tr
id=sl_svn445_1613

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1614

><td class="source">  public function getMessage() {<br></td></tr
><tr
id=sl_svn445_1615

><td class="source">    return $this-&gt;message;<br></td></tr
><tr
id=sl_svn445_1616

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1617

><td class="source">}<br></td></tr
><tr
id=sl_svn445_1618

><td class="source"><br></td></tr
><tr
id=sl_svn445_1619

><td class="source">class DownloadAccesses extends apiModel {<br></td></tr
><tr
id=sl_svn445_1620

><td class="source">  protected $__downloadAccessListType = &#39;DownloadAccessRestriction&#39;;<br></td></tr
><tr
id=sl_svn445_1621

><td class="source">  protected $__downloadAccessListDataType = &#39;array&#39;;<br></td></tr
><tr
id=sl_svn445_1622

><td class="source">  public $downloadAccessList;<br></td></tr
><tr
id=sl_svn445_1623

><td class="source">  public $kind;<br></td></tr
><tr
id=sl_svn445_1624

><td class="source">  public function setDownloadAccessList(/* array(DownloadAccessRestriction) */ $downloadAccessList) {<br></td></tr
><tr
id=sl_svn445_1625

><td class="source">    $this-&gt;assertIsArray($downloadAccessList, &#39;DownloadAccessRestriction&#39;, __METHOD__);<br></td></tr
><tr
id=sl_svn445_1626

><td class="source">    $this-&gt;downloadAccessList = $downloadAccessList;<br></td></tr
><tr
id=sl_svn445_1627

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1628

><td class="source">  public function getDownloadAccessList() {<br></td></tr
><tr
id=sl_svn445_1629

><td class="source">    return $this-&gt;downloadAccessList;<br></td></tr
><tr
id=sl_svn445_1630

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1631

><td class="source">  public function setKind($kind) {<br></td></tr
><tr
id=sl_svn445_1632

><td class="source">    $this-&gt;kind = $kind;<br></td></tr
><tr
id=sl_svn445_1633

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1634

><td class="source">  public function getKind() {<br></td></tr
><tr
id=sl_svn445_1635

><td class="source">    return $this-&gt;kind;<br></td></tr
><tr
id=sl_svn445_1636

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1637

><td class="source">}<br></td></tr
><tr
id=sl_svn445_1638

><td class="source"><br></td></tr
><tr
id=sl_svn445_1639

><td class="source">class Layersummaries extends apiModel {<br></td></tr
><tr
id=sl_svn445_1640

><td class="source">  public $totalItems;<br></td></tr
><tr
id=sl_svn445_1641

><td class="source">  protected $__itemsType = &#39;Layersummary&#39;;<br></td></tr
><tr
id=sl_svn445_1642

><td class="source">  protected $__itemsDataType = &#39;array&#39;;<br></td></tr
><tr
id=sl_svn445_1643

><td class="source">  public $items;<br></td></tr
><tr
id=sl_svn445_1644

><td class="source">  public $kind;<br></td></tr
><tr
id=sl_svn445_1645

><td class="source">  public function setTotalItems($totalItems) {<br></td></tr
><tr
id=sl_svn445_1646

><td class="source">    $this-&gt;totalItems = $totalItems;<br></td></tr
><tr
id=sl_svn445_1647

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1648

><td class="source">  public function getTotalItems() {<br></td></tr
><tr
id=sl_svn445_1649

><td class="source">    return $this-&gt;totalItems;<br></td></tr
><tr
id=sl_svn445_1650

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1651

><td class="source">  public function setItems(/* array(Layersummary) */ $items) {<br></td></tr
><tr
id=sl_svn445_1652

><td class="source">    $this-&gt;assertIsArray($items, &#39;Layersummary&#39;, __METHOD__);<br></td></tr
><tr
id=sl_svn445_1653

><td class="source">    $this-&gt;items = $items;<br></td></tr
><tr
id=sl_svn445_1654

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1655

><td class="source">  public function getItems() {<br></td></tr
><tr
id=sl_svn445_1656

><td class="source">    return $this-&gt;items;<br></td></tr
><tr
id=sl_svn445_1657

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1658

><td class="source">  public function setKind($kind) {<br></td></tr
><tr
id=sl_svn445_1659

><td class="source">    $this-&gt;kind = $kind;<br></td></tr
><tr
id=sl_svn445_1660

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1661

><td class="source">  public function getKind() {<br></td></tr
><tr
id=sl_svn445_1662

><td class="source">    return $this-&gt;kind;<br></td></tr
><tr
id=sl_svn445_1663

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1664

><td class="source">}<br></td></tr
><tr
id=sl_svn445_1665

><td class="source"><br></td></tr
><tr
id=sl_svn445_1666

><td class="source">class Layersummary extends apiModel {<br></td></tr
><tr
id=sl_svn445_1667

><td class="source">  public $kind;<br></td></tr
><tr
id=sl_svn445_1668

><td class="source">  public $annotationCount;<br></td></tr
><tr
id=sl_svn445_1669

><td class="source">  public $dataCount;<br></td></tr
><tr
id=sl_svn445_1670

><td class="source">  public $annotationsLink;<br></td></tr
><tr
id=sl_svn445_1671

><td class="source">  public $updated;<br></td></tr
><tr
id=sl_svn445_1672

><td class="source">  public $volumeId;<br></td></tr
><tr
id=sl_svn445_1673

><td class="source">  public $id;<br></td></tr
><tr
id=sl_svn445_1674

><td class="source">  public $annotationTypes;<br></td></tr
><tr
id=sl_svn445_1675

><td class="source">  public $contentVersion;<br></td></tr
><tr
id=sl_svn445_1676

><td class="source">  public $layerId;<br></td></tr
><tr
id=sl_svn445_1677

><td class="source">  public $annotationsDataLink;<br></td></tr
><tr
id=sl_svn445_1678

><td class="source">  public $selfLink;<br></td></tr
><tr
id=sl_svn445_1679

><td class="source">  public function setKind($kind) {<br></td></tr
><tr
id=sl_svn445_1680

><td class="source">    $this-&gt;kind = $kind;<br></td></tr
><tr
id=sl_svn445_1681

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1682

><td class="source">  public function getKind() {<br></td></tr
><tr
id=sl_svn445_1683

><td class="source">    return $this-&gt;kind;<br></td></tr
><tr
id=sl_svn445_1684

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1685

><td class="source">  public function setAnnotationCount($annotationCount) {<br></td></tr
><tr
id=sl_svn445_1686

><td class="source">    $this-&gt;annotationCount = $annotationCount;<br></td></tr
><tr
id=sl_svn445_1687

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1688

><td class="source">  public function getAnnotationCount() {<br></td></tr
><tr
id=sl_svn445_1689

><td class="source">    return $this-&gt;annotationCount;<br></td></tr
><tr
id=sl_svn445_1690

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1691

><td class="source">  public function setDataCount($dataCount) {<br></td></tr
><tr
id=sl_svn445_1692

><td class="source">    $this-&gt;dataCount = $dataCount;<br></td></tr
><tr
id=sl_svn445_1693

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1694

><td class="source">  public function getDataCount() {<br></td></tr
><tr
id=sl_svn445_1695

><td class="source">    return $this-&gt;dataCount;<br></td></tr
><tr
id=sl_svn445_1696

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1697

><td class="source">  public function setAnnotationsLink($annotationsLink) {<br></td></tr
><tr
id=sl_svn445_1698

><td class="source">    $this-&gt;annotationsLink = $annotationsLink;<br></td></tr
><tr
id=sl_svn445_1699

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1700

><td class="source">  public function getAnnotationsLink() {<br></td></tr
><tr
id=sl_svn445_1701

><td class="source">    return $this-&gt;annotationsLink;<br></td></tr
><tr
id=sl_svn445_1702

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1703

><td class="source">  public function setUpdated($updated) {<br></td></tr
><tr
id=sl_svn445_1704

><td class="source">    $this-&gt;updated = $updated;<br></td></tr
><tr
id=sl_svn445_1705

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1706

><td class="source">  public function getUpdated() {<br></td></tr
><tr
id=sl_svn445_1707

><td class="source">    return $this-&gt;updated;<br></td></tr
><tr
id=sl_svn445_1708

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1709

><td class="source">  public function setVolumeId($volumeId) {<br></td></tr
><tr
id=sl_svn445_1710

><td class="source">    $this-&gt;volumeId = $volumeId;<br></td></tr
><tr
id=sl_svn445_1711

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1712

><td class="source">  public function getVolumeId() {<br></td></tr
><tr
id=sl_svn445_1713

><td class="source">    return $this-&gt;volumeId;<br></td></tr
><tr
id=sl_svn445_1714

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1715

><td class="source">  public function setId($id) {<br></td></tr
><tr
id=sl_svn445_1716

><td class="source">    $this-&gt;id = $id;<br></td></tr
><tr
id=sl_svn445_1717

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1718

><td class="source">  public function getId() {<br></td></tr
><tr
id=sl_svn445_1719

><td class="source">    return $this-&gt;id;<br></td></tr
><tr
id=sl_svn445_1720

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1721

><td class="source">  public function setAnnotationTypes(/* array(string) */ $annotationTypes) {<br></td></tr
><tr
id=sl_svn445_1722

><td class="source">    $this-&gt;assertIsArray($annotationTypes, &#39;string&#39;, __METHOD__);<br></td></tr
><tr
id=sl_svn445_1723

><td class="source">    $this-&gt;annotationTypes = $annotationTypes;<br></td></tr
><tr
id=sl_svn445_1724

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1725

><td class="source">  public function getAnnotationTypes() {<br></td></tr
><tr
id=sl_svn445_1726

><td class="source">    return $this-&gt;annotationTypes;<br></td></tr
><tr
id=sl_svn445_1727

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1728

><td class="source">  public function setContentVersion($contentVersion) {<br></td></tr
><tr
id=sl_svn445_1729

><td class="source">    $this-&gt;contentVersion = $contentVersion;<br></td></tr
><tr
id=sl_svn445_1730

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1731

><td class="source">  public function getContentVersion() {<br></td></tr
><tr
id=sl_svn445_1732

><td class="source">    return $this-&gt;contentVersion;<br></td></tr
><tr
id=sl_svn445_1733

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1734

><td class="source">  public function setLayerId($layerId) {<br></td></tr
><tr
id=sl_svn445_1735

><td class="source">    $this-&gt;layerId = $layerId;<br></td></tr
><tr
id=sl_svn445_1736

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1737

><td class="source">  public function getLayerId() {<br></td></tr
><tr
id=sl_svn445_1738

><td class="source">    return $this-&gt;layerId;<br></td></tr
><tr
id=sl_svn445_1739

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1740

><td class="source">  public function setAnnotationsDataLink($annotationsDataLink) {<br></td></tr
><tr
id=sl_svn445_1741

><td class="source">    $this-&gt;annotationsDataLink = $annotationsDataLink;<br></td></tr
><tr
id=sl_svn445_1742

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1743

><td class="source">  public function getAnnotationsDataLink() {<br></td></tr
><tr
id=sl_svn445_1744

><td class="source">    return $this-&gt;annotationsDataLink;<br></td></tr
><tr
id=sl_svn445_1745

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1746

><td class="source">  public function setSelfLink($selfLink) {<br></td></tr
><tr
id=sl_svn445_1747

><td class="source">    $this-&gt;selfLink = $selfLink;<br></td></tr
><tr
id=sl_svn445_1748

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1749

><td class="source">  public function getSelfLink() {<br></td></tr
><tr
id=sl_svn445_1750

><td class="source">    return $this-&gt;selfLink;<br></td></tr
><tr
id=sl_svn445_1751

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1752

><td class="source">}<br></td></tr
><tr
id=sl_svn445_1753

><td class="source"><br></td></tr
><tr
id=sl_svn445_1754

><td class="source">class ReadingPosition extends apiModel {<br></td></tr
><tr
id=sl_svn445_1755

><td class="source">  public $kind;<br></td></tr
><tr
id=sl_svn445_1756

><td class="source">  public $gbImagePosition;<br></td></tr
><tr
id=sl_svn445_1757

><td class="source">  public $epubCfiPosition;<br></td></tr
><tr
id=sl_svn445_1758

><td class="source">  public $updated;<br></td></tr
><tr
id=sl_svn445_1759

><td class="source">  public $volumeId;<br></td></tr
><tr
id=sl_svn445_1760

><td class="source">  public $pdfPosition;<br></td></tr
><tr
id=sl_svn445_1761

><td class="source">  public $gbTextPosition;<br></td></tr
><tr
id=sl_svn445_1762

><td class="source">  public function setKind($kind) {<br></td></tr
><tr
id=sl_svn445_1763

><td class="source">    $this-&gt;kind = $kind;<br></td></tr
><tr
id=sl_svn445_1764

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1765

><td class="source">  public function getKind() {<br></td></tr
><tr
id=sl_svn445_1766

><td class="source">    return $this-&gt;kind;<br></td></tr
><tr
id=sl_svn445_1767

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1768

><td class="source">  public function setGbImagePosition($gbImagePosition) {<br></td></tr
><tr
id=sl_svn445_1769

><td class="source">    $this-&gt;gbImagePosition = $gbImagePosition;<br></td></tr
><tr
id=sl_svn445_1770

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1771

><td class="source">  public function getGbImagePosition() {<br></td></tr
><tr
id=sl_svn445_1772

><td class="source">    return $this-&gt;gbImagePosition;<br></td></tr
><tr
id=sl_svn445_1773

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1774

><td class="source">  public function setEpubCfiPosition($epubCfiPosition) {<br></td></tr
><tr
id=sl_svn445_1775

><td class="source">    $this-&gt;epubCfiPosition = $epubCfiPosition;<br></td></tr
><tr
id=sl_svn445_1776

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1777

><td class="source">  public function getEpubCfiPosition() {<br></td></tr
><tr
id=sl_svn445_1778

><td class="source">    return $this-&gt;epubCfiPosition;<br></td></tr
><tr
id=sl_svn445_1779

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1780

><td class="source">  public function setUpdated($updated) {<br></td></tr
><tr
id=sl_svn445_1781

><td class="source">    $this-&gt;updated = $updated;<br></td></tr
><tr
id=sl_svn445_1782

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1783

><td class="source">  public function getUpdated() {<br></td></tr
><tr
id=sl_svn445_1784

><td class="source">    return $this-&gt;updated;<br></td></tr
><tr
id=sl_svn445_1785

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1786

><td class="source">  public function setVolumeId($volumeId) {<br></td></tr
><tr
id=sl_svn445_1787

><td class="source">    $this-&gt;volumeId = $volumeId;<br></td></tr
><tr
id=sl_svn445_1788

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1789

><td class="source">  public function getVolumeId() {<br></td></tr
><tr
id=sl_svn445_1790

><td class="source">    return $this-&gt;volumeId;<br></td></tr
><tr
id=sl_svn445_1791

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1792

><td class="source">  public function setPdfPosition($pdfPosition) {<br></td></tr
><tr
id=sl_svn445_1793

><td class="source">    $this-&gt;pdfPosition = $pdfPosition;<br></td></tr
><tr
id=sl_svn445_1794

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1795

><td class="source">  public function getPdfPosition() {<br></td></tr
><tr
id=sl_svn445_1796

><td class="source">    return $this-&gt;pdfPosition;<br></td></tr
><tr
id=sl_svn445_1797

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1798

><td class="source">  public function setGbTextPosition($gbTextPosition) {<br></td></tr
><tr
id=sl_svn445_1799

><td class="source">    $this-&gt;gbTextPosition = $gbTextPosition;<br></td></tr
><tr
id=sl_svn445_1800

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1801

><td class="source">  public function getGbTextPosition() {<br></td></tr
><tr
id=sl_svn445_1802

><td class="source">    return $this-&gt;gbTextPosition;<br></td></tr
><tr
id=sl_svn445_1803

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1804

><td class="source">}<br></td></tr
><tr
id=sl_svn445_1805

><td class="source"><br></td></tr
><tr
id=sl_svn445_1806

><td class="source">class RequestAccess extends apiModel {<br></td></tr
><tr
id=sl_svn445_1807

><td class="source">  protected $__downloadAccessType = &#39;DownloadAccessRestriction&#39;;<br></td></tr
><tr
id=sl_svn445_1808

><td class="source">  protected $__downloadAccessDataType = &#39;&#39;;<br></td></tr
><tr
id=sl_svn445_1809

><td class="source">  public $downloadAccess;<br></td></tr
><tr
id=sl_svn445_1810

><td class="source">  public $kind;<br></td></tr
><tr
id=sl_svn445_1811

><td class="source">  protected $__concurrentAccessType = &#39;ConcurrentAccessRestriction&#39;;<br></td></tr
><tr
id=sl_svn445_1812

><td class="source">  protected $__concurrentAccessDataType = &#39;&#39;;<br></td></tr
><tr
id=sl_svn445_1813

><td class="source">  public $concurrentAccess;<br></td></tr
><tr
id=sl_svn445_1814

><td class="source">  public function setDownloadAccess(DownloadAccessRestriction $downloadAccess) {<br></td></tr
><tr
id=sl_svn445_1815

><td class="source">    $this-&gt;downloadAccess = $downloadAccess;<br></td></tr
><tr
id=sl_svn445_1816

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1817

><td class="source">  public function getDownloadAccess() {<br></td></tr
><tr
id=sl_svn445_1818

><td class="source">    return $this-&gt;downloadAccess;<br></td></tr
><tr
id=sl_svn445_1819

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1820

><td class="source">  public function setKind($kind) {<br></td></tr
><tr
id=sl_svn445_1821

><td class="source">    $this-&gt;kind = $kind;<br></td></tr
><tr
id=sl_svn445_1822

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1823

><td class="source">  public function getKind() {<br></td></tr
><tr
id=sl_svn445_1824

><td class="source">    return $this-&gt;kind;<br></td></tr
><tr
id=sl_svn445_1825

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1826

><td class="source">  public function setConcurrentAccess(ConcurrentAccessRestriction $concurrentAccess) {<br></td></tr
><tr
id=sl_svn445_1827

><td class="source">    $this-&gt;concurrentAccess = $concurrentAccess;<br></td></tr
><tr
id=sl_svn445_1828

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1829

><td class="source">  public function getConcurrentAccess() {<br></td></tr
><tr
id=sl_svn445_1830

><td class="source">    return $this-&gt;concurrentAccess;<br></td></tr
><tr
id=sl_svn445_1831

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1832

><td class="source">}<br></td></tr
><tr
id=sl_svn445_1833

><td class="source"><br></td></tr
><tr
id=sl_svn445_1834

><td class="source">class Review extends apiModel {<br></td></tr
><tr
id=sl_svn445_1835

><td class="source">  public $rating;<br></td></tr
><tr
id=sl_svn445_1836

><td class="source">  public $kind;<br></td></tr
><tr
id=sl_svn445_1837

><td class="source">  protected $__authorType = &#39;ReviewAuthor&#39;;<br></td></tr
><tr
id=sl_svn445_1838

><td class="source">  protected $__authorDataType = &#39;&#39;;<br></td></tr
><tr
id=sl_svn445_1839

><td class="source">  public $author;<br></td></tr
><tr
id=sl_svn445_1840

><td class="source">  public $title;<br></td></tr
><tr
id=sl_svn445_1841

><td class="source">  public $volumeId;<br></td></tr
><tr
id=sl_svn445_1842

><td class="source">  public $content;<br></td></tr
><tr
id=sl_svn445_1843

><td class="source">  protected $__sourceType = &#39;ReviewSource&#39;;<br></td></tr
><tr
id=sl_svn445_1844

><td class="source">  protected $__sourceDataType = &#39;&#39;;<br></td></tr
><tr
id=sl_svn445_1845

><td class="source">  public $source;<br></td></tr
><tr
id=sl_svn445_1846

><td class="source">  public $date;<br></td></tr
><tr
id=sl_svn445_1847

><td class="source">  public $type;<br></td></tr
><tr
id=sl_svn445_1848

><td class="source">  public $fullTextUrl;<br></td></tr
><tr
id=sl_svn445_1849

><td class="source">  public function setRating($rating) {<br></td></tr
><tr
id=sl_svn445_1850

><td class="source">    $this-&gt;rating = $rating;<br></td></tr
><tr
id=sl_svn445_1851

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1852

><td class="source">  public function getRating() {<br></td></tr
><tr
id=sl_svn445_1853

><td class="source">    return $this-&gt;rating;<br></td></tr
><tr
id=sl_svn445_1854

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1855

><td class="source">  public function setKind($kind) {<br></td></tr
><tr
id=sl_svn445_1856

><td class="source">    $this-&gt;kind = $kind;<br></td></tr
><tr
id=sl_svn445_1857

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1858

><td class="source">  public function getKind() {<br></td></tr
><tr
id=sl_svn445_1859

><td class="source">    return $this-&gt;kind;<br></td></tr
><tr
id=sl_svn445_1860

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1861

><td class="source">  public function setAuthor(ReviewAuthor $author) {<br></td></tr
><tr
id=sl_svn445_1862

><td class="source">    $this-&gt;author = $author;<br></td></tr
><tr
id=sl_svn445_1863

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1864

><td class="source">  public function getAuthor() {<br></td></tr
><tr
id=sl_svn445_1865

><td class="source">    return $this-&gt;author;<br></td></tr
><tr
id=sl_svn445_1866

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1867

><td class="source">  public function setTitle($title) {<br></td></tr
><tr
id=sl_svn445_1868

><td class="source">    $this-&gt;title = $title;<br></td></tr
><tr
id=sl_svn445_1869

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1870

><td class="source">  public function getTitle() {<br></td></tr
><tr
id=sl_svn445_1871

><td class="source">    return $this-&gt;title;<br></td></tr
><tr
id=sl_svn445_1872

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1873

><td class="source">  public function setVolumeId($volumeId) {<br></td></tr
><tr
id=sl_svn445_1874

><td class="source">    $this-&gt;volumeId = $volumeId;<br></td></tr
><tr
id=sl_svn445_1875

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1876

><td class="source">  public function getVolumeId() {<br></td></tr
><tr
id=sl_svn445_1877

><td class="source">    return $this-&gt;volumeId;<br></td></tr
><tr
id=sl_svn445_1878

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1879

><td class="source">  public function setContent($content) {<br></td></tr
><tr
id=sl_svn445_1880

><td class="source">    $this-&gt;content = $content;<br></td></tr
><tr
id=sl_svn445_1881

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1882

><td class="source">  public function getContent() {<br></td></tr
><tr
id=sl_svn445_1883

><td class="source">    return $this-&gt;content;<br></td></tr
><tr
id=sl_svn445_1884

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1885

><td class="source">  public function setSource(ReviewSource $source) {<br></td></tr
><tr
id=sl_svn445_1886

><td class="source">    $this-&gt;source = $source;<br></td></tr
><tr
id=sl_svn445_1887

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1888

><td class="source">  public function getSource() {<br></td></tr
><tr
id=sl_svn445_1889

><td class="source">    return $this-&gt;source;<br></td></tr
><tr
id=sl_svn445_1890

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1891

><td class="source">  public function setDate($date) {<br></td></tr
><tr
id=sl_svn445_1892

><td class="source">    $this-&gt;date = $date;<br></td></tr
><tr
id=sl_svn445_1893

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1894

><td class="source">  public function getDate() {<br></td></tr
><tr
id=sl_svn445_1895

><td class="source">    return $this-&gt;date;<br></td></tr
><tr
id=sl_svn445_1896

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1897

><td class="source">  public function setType($type) {<br></td></tr
><tr
id=sl_svn445_1898

><td class="source">    $this-&gt;type = $type;<br></td></tr
><tr
id=sl_svn445_1899

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1900

><td class="source">  public function getType() {<br></td></tr
><tr
id=sl_svn445_1901

><td class="source">    return $this-&gt;type;<br></td></tr
><tr
id=sl_svn445_1902

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1903

><td class="source">  public function setFullTextUrl($fullTextUrl) {<br></td></tr
><tr
id=sl_svn445_1904

><td class="source">    $this-&gt;fullTextUrl = $fullTextUrl;<br></td></tr
><tr
id=sl_svn445_1905

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1906

><td class="source">  public function getFullTextUrl() {<br></td></tr
><tr
id=sl_svn445_1907

><td class="source">    return $this-&gt;fullTextUrl;<br></td></tr
><tr
id=sl_svn445_1908

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1909

><td class="source">}<br></td></tr
><tr
id=sl_svn445_1910

><td class="source"><br></td></tr
><tr
id=sl_svn445_1911

><td class="source">class ReviewAuthor extends apiModel {<br></td></tr
><tr
id=sl_svn445_1912

><td class="source">  public $displayName;<br></td></tr
><tr
id=sl_svn445_1913

><td class="source">  public function setDisplayName($displayName) {<br></td></tr
><tr
id=sl_svn445_1914

><td class="source">    $this-&gt;displayName = $displayName;<br></td></tr
><tr
id=sl_svn445_1915

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1916

><td class="source">  public function getDisplayName() {<br></td></tr
><tr
id=sl_svn445_1917

><td class="source">    return $this-&gt;displayName;<br></td></tr
><tr
id=sl_svn445_1918

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1919

><td class="source">}<br></td></tr
><tr
id=sl_svn445_1920

><td class="source"><br></td></tr
><tr
id=sl_svn445_1921

><td class="source">class ReviewSource extends apiModel {<br></td></tr
><tr
id=sl_svn445_1922

><td class="source">  public $extraDescription;<br></td></tr
><tr
id=sl_svn445_1923

><td class="source">  public $url;<br></td></tr
><tr
id=sl_svn445_1924

><td class="source">  public $description;<br></td></tr
><tr
id=sl_svn445_1925

><td class="source">  public function setExtraDescription($extraDescription) {<br></td></tr
><tr
id=sl_svn445_1926

><td class="source">    $this-&gt;extraDescription = $extraDescription;<br></td></tr
><tr
id=sl_svn445_1927

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1928

><td class="source">  public function getExtraDescription() {<br></td></tr
><tr
id=sl_svn445_1929

><td class="source">    return $this-&gt;extraDescription;<br></td></tr
><tr
id=sl_svn445_1930

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1931

><td class="source">  public function setUrl($url) {<br></td></tr
><tr
id=sl_svn445_1932

><td class="source">    $this-&gt;url = $url;<br></td></tr
><tr
id=sl_svn445_1933

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1934

><td class="source">  public function getUrl() {<br></td></tr
><tr
id=sl_svn445_1935

><td class="source">    return $this-&gt;url;<br></td></tr
><tr
id=sl_svn445_1936

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1937

><td class="source">  public function setDescription($description) {<br></td></tr
><tr
id=sl_svn445_1938

><td class="source">    $this-&gt;description = $description;<br></td></tr
><tr
id=sl_svn445_1939

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1940

><td class="source">  public function getDescription() {<br></td></tr
><tr
id=sl_svn445_1941

><td class="source">    return $this-&gt;description;<br></td></tr
><tr
id=sl_svn445_1942

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1943

><td class="source">}<br></td></tr
><tr
id=sl_svn445_1944

><td class="source"><br></td></tr
><tr
id=sl_svn445_1945

><td class="source">class Volume extends apiModel {<br></td></tr
><tr
id=sl_svn445_1946

><td class="source">  public $kind;<br></td></tr
><tr
id=sl_svn445_1947

><td class="source">  protected $__accessInfoType = &#39;VolumeAccessInfo&#39;;<br></td></tr
><tr
id=sl_svn445_1948

><td class="source">  protected $__accessInfoDataType = &#39;&#39;;<br></td></tr
><tr
id=sl_svn445_1949

><td class="source">  public $accessInfo;<br></td></tr
><tr
id=sl_svn445_1950

><td class="source">  protected $__searchInfoType = &#39;VolumeSearchInfo&#39;;<br></td></tr
><tr
id=sl_svn445_1951

><td class="source">  protected $__searchInfoDataType = &#39;&#39;;<br></td></tr
><tr
id=sl_svn445_1952

><td class="source">  public $searchInfo;<br></td></tr
><tr
id=sl_svn445_1953

><td class="source">  protected $__saleInfoType = &#39;VolumeSaleInfo&#39;;<br></td></tr
><tr
id=sl_svn445_1954

><td class="source">  protected $__saleInfoDataType = &#39;&#39;;<br></td></tr
><tr
id=sl_svn445_1955

><td class="source">  public $saleInfo;<br></td></tr
><tr
id=sl_svn445_1956

><td class="source">  public $etag;<br></td></tr
><tr
id=sl_svn445_1957

><td class="source">  protected $__userInfoType = &#39;VolumeUserInfo&#39;;<br></td></tr
><tr
id=sl_svn445_1958

><td class="source">  protected $__userInfoDataType = &#39;&#39;;<br></td></tr
><tr
id=sl_svn445_1959

><td class="source">  public $userInfo;<br></td></tr
><tr
id=sl_svn445_1960

><td class="source">  protected $__volumeInfoType = &#39;VolumeVolumeInfo&#39;;<br></td></tr
><tr
id=sl_svn445_1961

><td class="source">  protected $__volumeInfoDataType = &#39;&#39;;<br></td></tr
><tr
id=sl_svn445_1962

><td class="source">  public $volumeInfo;<br></td></tr
><tr
id=sl_svn445_1963

><td class="source">  public $id;<br></td></tr
><tr
id=sl_svn445_1964

><td class="source">  public $selfLink;<br></td></tr
><tr
id=sl_svn445_1965

><td class="source">  public function setKind($kind) {<br></td></tr
><tr
id=sl_svn445_1966

><td class="source">    $this-&gt;kind = $kind;<br></td></tr
><tr
id=sl_svn445_1967

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1968

><td class="source">  public function getKind() {<br></td></tr
><tr
id=sl_svn445_1969

><td class="source">    return $this-&gt;kind;<br></td></tr
><tr
id=sl_svn445_1970

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1971

><td class="source">  public function setAccessInfo(VolumeAccessInfo $accessInfo) {<br></td></tr
><tr
id=sl_svn445_1972

><td class="source">    $this-&gt;accessInfo = $accessInfo;<br></td></tr
><tr
id=sl_svn445_1973

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1974

><td class="source">  public function getAccessInfo() {<br></td></tr
><tr
id=sl_svn445_1975

><td class="source">    return $this-&gt;accessInfo;<br></td></tr
><tr
id=sl_svn445_1976

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1977

><td class="source">  public function setSearchInfo(VolumeSearchInfo $searchInfo) {<br></td></tr
><tr
id=sl_svn445_1978

><td class="source">    $this-&gt;searchInfo = $searchInfo;<br></td></tr
><tr
id=sl_svn445_1979

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1980

><td class="source">  public function getSearchInfo() {<br></td></tr
><tr
id=sl_svn445_1981

><td class="source">    return $this-&gt;searchInfo;<br></td></tr
><tr
id=sl_svn445_1982

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1983

><td class="source">  public function setSaleInfo(VolumeSaleInfo $saleInfo) {<br></td></tr
><tr
id=sl_svn445_1984

><td class="source">    $this-&gt;saleInfo = $saleInfo;<br></td></tr
><tr
id=sl_svn445_1985

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1986

><td class="source">  public function getSaleInfo() {<br></td></tr
><tr
id=sl_svn445_1987

><td class="source">    return $this-&gt;saleInfo;<br></td></tr
><tr
id=sl_svn445_1988

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1989

><td class="source">  public function setEtag($etag) {<br></td></tr
><tr
id=sl_svn445_1990

><td class="source">    $this-&gt;etag = $etag;<br></td></tr
><tr
id=sl_svn445_1991

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1992

><td class="source">  public function getEtag() {<br></td></tr
><tr
id=sl_svn445_1993

><td class="source">    return $this-&gt;etag;<br></td></tr
><tr
id=sl_svn445_1994

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1995

><td class="source">  public function setUserInfo(VolumeUserInfo $userInfo) {<br></td></tr
><tr
id=sl_svn445_1996

><td class="source">    $this-&gt;userInfo = $userInfo;<br></td></tr
><tr
id=sl_svn445_1997

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_1998

><td class="source">  public function getUserInfo() {<br></td></tr
><tr
id=sl_svn445_1999

><td class="source">    return $this-&gt;userInfo;<br></td></tr
><tr
id=sl_svn445_2000

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2001

><td class="source">  public function setVolumeInfo(VolumeVolumeInfo $volumeInfo) {<br></td></tr
><tr
id=sl_svn445_2002

><td class="source">    $this-&gt;volumeInfo = $volumeInfo;<br></td></tr
><tr
id=sl_svn445_2003

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2004

><td class="source">  public function getVolumeInfo() {<br></td></tr
><tr
id=sl_svn445_2005

><td class="source">    return $this-&gt;volumeInfo;<br></td></tr
><tr
id=sl_svn445_2006

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2007

><td class="source">  public function setId($id) {<br></td></tr
><tr
id=sl_svn445_2008

><td class="source">    $this-&gt;id = $id;<br></td></tr
><tr
id=sl_svn445_2009

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2010

><td class="source">  public function getId() {<br></td></tr
><tr
id=sl_svn445_2011

><td class="source">    return $this-&gt;id;<br></td></tr
><tr
id=sl_svn445_2012

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2013

><td class="source">  public function setSelfLink($selfLink) {<br></td></tr
><tr
id=sl_svn445_2014

><td class="source">    $this-&gt;selfLink = $selfLink;<br></td></tr
><tr
id=sl_svn445_2015

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2016

><td class="source">  public function getSelfLink() {<br></td></tr
><tr
id=sl_svn445_2017

><td class="source">    return $this-&gt;selfLink;<br></td></tr
><tr
id=sl_svn445_2018

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2019

><td class="source">}<br></td></tr
><tr
id=sl_svn445_2020

><td class="source"><br></td></tr
><tr
id=sl_svn445_2021

><td class="source">class VolumeAccessInfo extends apiModel {<br></td></tr
><tr
id=sl_svn445_2022

><td class="source">  public $webReaderLink;<br></td></tr
><tr
id=sl_svn445_2023

><td class="source">  public $publicDomain;<br></td></tr
><tr
id=sl_svn445_2024

><td class="source">  public $embeddable;<br></td></tr
><tr
id=sl_svn445_2025

><td class="source">  protected $__downloadAccessType = &#39;DownloadAccessRestriction&#39;;<br></td></tr
><tr
id=sl_svn445_2026

><td class="source">  protected $__downloadAccessDataType = &#39;&#39;;<br></td></tr
><tr
id=sl_svn445_2027

><td class="source">  public $downloadAccess;<br></td></tr
><tr
id=sl_svn445_2028

><td class="source">  public $country;<br></td></tr
><tr
id=sl_svn445_2029

><td class="source">  public $viewOrderUrl;<br></td></tr
><tr
id=sl_svn445_2030

><td class="source">  public $textToSpeechPermission;<br></td></tr
><tr
id=sl_svn445_2031

><td class="source">  protected $__pdfType = &#39;VolumeAccessInfoPdf&#39;;<br></td></tr
><tr
id=sl_svn445_2032

><td class="source">  protected $__pdfDataType = &#39;&#39;;<br></td></tr
><tr
id=sl_svn445_2033

><td class="source">  public $pdf;<br></td></tr
><tr
id=sl_svn445_2034

><td class="source">  public $viewability;<br></td></tr
><tr
id=sl_svn445_2035

><td class="source">  protected $__epubType = &#39;VolumeAccessInfoEpub&#39;;<br></td></tr
><tr
id=sl_svn445_2036

><td class="source">  protected $__epubDataType = &#39;&#39;;<br></td></tr
><tr
id=sl_svn445_2037

><td class="source">  public $epub;<br></td></tr
><tr
id=sl_svn445_2038

><td class="source">  public $accessViewStatus;<br></td></tr
><tr
id=sl_svn445_2039

><td class="source">  public function setWebReaderLink($webReaderLink) {<br></td></tr
><tr
id=sl_svn445_2040

><td class="source">    $this-&gt;webReaderLink = $webReaderLink;<br></td></tr
><tr
id=sl_svn445_2041

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2042

><td class="source">  public function getWebReaderLink() {<br></td></tr
><tr
id=sl_svn445_2043

><td class="source">    return $this-&gt;webReaderLink;<br></td></tr
><tr
id=sl_svn445_2044

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2045

><td class="source">  public function setPublicDomain($publicDomain) {<br></td></tr
><tr
id=sl_svn445_2046

><td class="source">    $this-&gt;publicDomain = $publicDomain;<br></td></tr
><tr
id=sl_svn445_2047

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2048

><td class="source">  public function getPublicDomain() {<br></td></tr
><tr
id=sl_svn445_2049

><td class="source">    return $this-&gt;publicDomain;<br></td></tr
><tr
id=sl_svn445_2050

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2051

><td class="source">  public function setEmbeddable($embeddable) {<br></td></tr
><tr
id=sl_svn445_2052

><td class="source">    $this-&gt;embeddable = $embeddable;<br></td></tr
><tr
id=sl_svn445_2053

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2054

><td class="source">  public function getEmbeddable() {<br></td></tr
><tr
id=sl_svn445_2055

><td class="source">    return $this-&gt;embeddable;<br></td></tr
><tr
id=sl_svn445_2056

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2057

><td class="source">  public function setDownloadAccess(DownloadAccessRestriction $downloadAccess) {<br></td></tr
><tr
id=sl_svn445_2058

><td class="source">    $this-&gt;downloadAccess = $downloadAccess;<br></td></tr
><tr
id=sl_svn445_2059

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2060

><td class="source">  public function getDownloadAccess() {<br></td></tr
><tr
id=sl_svn445_2061

><td class="source">    return $this-&gt;downloadAccess;<br></td></tr
><tr
id=sl_svn445_2062

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2063

><td class="source">  public function setCountry($country) {<br></td></tr
><tr
id=sl_svn445_2064

><td class="source">    $this-&gt;country = $country;<br></td></tr
><tr
id=sl_svn445_2065

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2066

><td class="source">  public function getCountry() {<br></td></tr
><tr
id=sl_svn445_2067

><td class="source">    return $this-&gt;country;<br></td></tr
><tr
id=sl_svn445_2068

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2069

><td class="source">  public function setViewOrderUrl($viewOrderUrl) {<br></td></tr
><tr
id=sl_svn445_2070

><td class="source">    $this-&gt;viewOrderUrl = $viewOrderUrl;<br></td></tr
><tr
id=sl_svn445_2071

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2072

><td class="source">  public function getViewOrderUrl() {<br></td></tr
><tr
id=sl_svn445_2073

><td class="source">    return $this-&gt;viewOrderUrl;<br></td></tr
><tr
id=sl_svn445_2074

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2075

><td class="source">  public function setTextToSpeechPermission($textToSpeechPermission) {<br></td></tr
><tr
id=sl_svn445_2076

><td class="source">    $this-&gt;textToSpeechPermission = $textToSpeechPermission;<br></td></tr
><tr
id=sl_svn445_2077

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2078

><td class="source">  public function getTextToSpeechPermission() {<br></td></tr
><tr
id=sl_svn445_2079

><td class="source">    return $this-&gt;textToSpeechPermission;<br></td></tr
><tr
id=sl_svn445_2080

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2081

><td class="source">  public function setPdf(VolumeAccessInfoPdf $pdf) {<br></td></tr
><tr
id=sl_svn445_2082

><td class="source">    $this-&gt;pdf = $pdf;<br></td></tr
><tr
id=sl_svn445_2083

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2084

><td class="source">  public function getPdf() {<br></td></tr
><tr
id=sl_svn445_2085

><td class="source">    return $this-&gt;pdf;<br></td></tr
><tr
id=sl_svn445_2086

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2087

><td class="source">  public function setViewability($viewability) {<br></td></tr
><tr
id=sl_svn445_2088

><td class="source">    $this-&gt;viewability = $viewability;<br></td></tr
><tr
id=sl_svn445_2089

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2090

><td class="source">  public function getViewability() {<br></td></tr
><tr
id=sl_svn445_2091

><td class="source">    return $this-&gt;viewability;<br></td></tr
><tr
id=sl_svn445_2092

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2093

><td class="source">  public function setEpub(VolumeAccessInfoEpub $epub) {<br></td></tr
><tr
id=sl_svn445_2094

><td class="source">    $this-&gt;epub = $epub;<br></td></tr
><tr
id=sl_svn445_2095

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2096

><td class="source">  public function getEpub() {<br></td></tr
><tr
id=sl_svn445_2097

><td class="source">    return $this-&gt;epub;<br></td></tr
><tr
id=sl_svn445_2098

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2099

><td class="source">  public function setAccessViewStatus($accessViewStatus) {<br></td></tr
><tr
id=sl_svn445_2100

><td class="source">    $this-&gt;accessViewStatus = $accessViewStatus;<br></td></tr
><tr
id=sl_svn445_2101

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2102

><td class="source">  public function getAccessViewStatus() {<br></td></tr
><tr
id=sl_svn445_2103

><td class="source">    return $this-&gt;accessViewStatus;<br></td></tr
><tr
id=sl_svn445_2104

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2105

><td class="source">}<br></td></tr
><tr
id=sl_svn445_2106

><td class="source"><br></td></tr
><tr
id=sl_svn445_2107

><td class="source">class VolumeAccessInfoEpub extends apiModel {<br></td></tr
><tr
id=sl_svn445_2108

><td class="source">  public $isAvailable;<br></td></tr
><tr
id=sl_svn445_2109

><td class="source">  public $downloadLink;<br></td></tr
><tr
id=sl_svn445_2110

><td class="source">  public $acsTokenLink;<br></td></tr
><tr
id=sl_svn445_2111

><td class="source">  public function setIsAvailable($isAvailable) {<br></td></tr
><tr
id=sl_svn445_2112

><td class="source">    $this-&gt;isAvailable = $isAvailable;<br></td></tr
><tr
id=sl_svn445_2113

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2114

><td class="source">  public function getIsAvailable() {<br></td></tr
><tr
id=sl_svn445_2115

><td class="source">    return $this-&gt;isAvailable;<br></td></tr
><tr
id=sl_svn445_2116

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2117

><td class="source">  public function setDownloadLink($downloadLink) {<br></td></tr
><tr
id=sl_svn445_2118

><td class="source">    $this-&gt;downloadLink = $downloadLink;<br></td></tr
><tr
id=sl_svn445_2119

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2120

><td class="source">  public function getDownloadLink() {<br></td></tr
><tr
id=sl_svn445_2121

><td class="source">    return $this-&gt;downloadLink;<br></td></tr
><tr
id=sl_svn445_2122

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2123

><td class="source">  public function setAcsTokenLink($acsTokenLink) {<br></td></tr
><tr
id=sl_svn445_2124

><td class="source">    $this-&gt;acsTokenLink = $acsTokenLink;<br></td></tr
><tr
id=sl_svn445_2125

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2126

><td class="source">  public function getAcsTokenLink() {<br></td></tr
><tr
id=sl_svn445_2127

><td class="source">    return $this-&gt;acsTokenLink;<br></td></tr
><tr
id=sl_svn445_2128

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2129

><td class="source">}<br></td></tr
><tr
id=sl_svn445_2130

><td class="source"><br></td></tr
><tr
id=sl_svn445_2131

><td class="source">class VolumeAccessInfoPdf extends apiModel {<br></td></tr
><tr
id=sl_svn445_2132

><td class="source">  public $isAvailable;<br></td></tr
><tr
id=sl_svn445_2133

><td class="source">  public $downloadLink;<br></td></tr
><tr
id=sl_svn445_2134

><td class="source">  public $acsTokenLink;<br></td></tr
><tr
id=sl_svn445_2135

><td class="source">  public function setIsAvailable($isAvailable) {<br></td></tr
><tr
id=sl_svn445_2136

><td class="source">    $this-&gt;isAvailable = $isAvailable;<br></td></tr
><tr
id=sl_svn445_2137

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2138

><td class="source">  public function getIsAvailable() {<br></td></tr
><tr
id=sl_svn445_2139

><td class="source">    return $this-&gt;isAvailable;<br></td></tr
><tr
id=sl_svn445_2140

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2141

><td class="source">  public function setDownloadLink($downloadLink) {<br></td></tr
><tr
id=sl_svn445_2142

><td class="source">    $this-&gt;downloadLink = $downloadLink;<br></td></tr
><tr
id=sl_svn445_2143

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2144

><td class="source">  public function getDownloadLink() {<br></td></tr
><tr
id=sl_svn445_2145

><td class="source">    return $this-&gt;downloadLink;<br></td></tr
><tr
id=sl_svn445_2146

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2147

><td class="source">  public function setAcsTokenLink($acsTokenLink) {<br></td></tr
><tr
id=sl_svn445_2148

><td class="source">    $this-&gt;acsTokenLink = $acsTokenLink;<br></td></tr
><tr
id=sl_svn445_2149

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2150

><td class="source">  public function getAcsTokenLink() {<br></td></tr
><tr
id=sl_svn445_2151

><td class="source">    return $this-&gt;acsTokenLink;<br></td></tr
><tr
id=sl_svn445_2152

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2153

><td class="source">}<br></td></tr
><tr
id=sl_svn445_2154

><td class="source"><br></td></tr
><tr
id=sl_svn445_2155

><td class="source">class VolumeSaleInfo extends apiModel {<br></td></tr
><tr
id=sl_svn445_2156

><td class="source">  public $country;<br></td></tr
><tr
id=sl_svn445_2157

><td class="source">  protected $__retailPriceType = &#39;VolumeSaleInfoRetailPrice&#39;;<br></td></tr
><tr
id=sl_svn445_2158

><td class="source">  protected $__retailPriceDataType = &#39;&#39;;<br></td></tr
><tr
id=sl_svn445_2159

><td class="source">  public $retailPrice;<br></td></tr
><tr
id=sl_svn445_2160

><td class="source">  public $isEbook;<br></td></tr
><tr
id=sl_svn445_2161

><td class="source">  public $saleability;<br></td></tr
><tr
id=sl_svn445_2162

><td class="source">  public $buyLink;<br></td></tr
><tr
id=sl_svn445_2163

><td class="source">  public $onSaleDate;<br></td></tr
><tr
id=sl_svn445_2164

><td class="source">  protected $__listPriceType = &#39;VolumeSaleInfoListPrice&#39;;<br></td></tr
><tr
id=sl_svn445_2165

><td class="source">  protected $__listPriceDataType = &#39;&#39;;<br></td></tr
><tr
id=sl_svn445_2166

><td class="source">  public $listPrice;<br></td></tr
><tr
id=sl_svn445_2167

><td class="source">  public function setCountry($country) {<br></td></tr
><tr
id=sl_svn445_2168

><td class="source">    $this-&gt;country = $country;<br></td></tr
><tr
id=sl_svn445_2169

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2170

><td class="source">  public function getCountry() {<br></td></tr
><tr
id=sl_svn445_2171

><td class="source">    return $this-&gt;country;<br></td></tr
><tr
id=sl_svn445_2172

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2173

><td class="source">  public function setRetailPrice(VolumeSaleInfoRetailPrice $retailPrice) {<br></td></tr
><tr
id=sl_svn445_2174

><td class="source">    $this-&gt;retailPrice = $retailPrice;<br></td></tr
><tr
id=sl_svn445_2175

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2176

><td class="source">  public function getRetailPrice() {<br></td></tr
><tr
id=sl_svn445_2177

><td class="source">    return $this-&gt;retailPrice;<br></td></tr
><tr
id=sl_svn445_2178

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2179

><td class="source">  public function setIsEbook($isEbook) {<br></td></tr
><tr
id=sl_svn445_2180

><td class="source">    $this-&gt;isEbook = $isEbook;<br></td></tr
><tr
id=sl_svn445_2181

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2182

><td class="source">  public function getIsEbook() {<br></td></tr
><tr
id=sl_svn445_2183

><td class="source">    return $this-&gt;isEbook;<br></td></tr
><tr
id=sl_svn445_2184

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2185

><td class="source">  public function setSaleability($saleability) {<br></td></tr
><tr
id=sl_svn445_2186

><td class="source">    $this-&gt;saleability = $saleability;<br></td></tr
><tr
id=sl_svn445_2187

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2188

><td class="source">  public function getSaleability() {<br></td></tr
><tr
id=sl_svn445_2189

><td class="source">    return $this-&gt;saleability;<br></td></tr
><tr
id=sl_svn445_2190

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2191

><td class="source">  public function setBuyLink($buyLink) {<br></td></tr
><tr
id=sl_svn445_2192

><td class="source">    $this-&gt;buyLink = $buyLink;<br></td></tr
><tr
id=sl_svn445_2193

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2194

><td class="source">  public function getBuyLink() {<br></td></tr
><tr
id=sl_svn445_2195

><td class="source">    return $this-&gt;buyLink;<br></td></tr
><tr
id=sl_svn445_2196

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2197

><td class="source">  public function setOnSaleDate($onSaleDate) {<br></td></tr
><tr
id=sl_svn445_2198

><td class="source">    $this-&gt;onSaleDate = $onSaleDate;<br></td></tr
><tr
id=sl_svn445_2199

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2200

><td class="source">  public function getOnSaleDate() {<br></td></tr
><tr
id=sl_svn445_2201

><td class="source">    return $this-&gt;onSaleDate;<br></td></tr
><tr
id=sl_svn445_2202

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2203

><td class="source">  public function setListPrice(VolumeSaleInfoListPrice $listPrice) {<br></td></tr
><tr
id=sl_svn445_2204

><td class="source">    $this-&gt;listPrice = $listPrice;<br></td></tr
><tr
id=sl_svn445_2205

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2206

><td class="source">  public function getListPrice() {<br></td></tr
><tr
id=sl_svn445_2207

><td class="source">    return $this-&gt;listPrice;<br></td></tr
><tr
id=sl_svn445_2208

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2209

><td class="source">}<br></td></tr
><tr
id=sl_svn445_2210

><td class="source"><br></td></tr
><tr
id=sl_svn445_2211

><td class="source">class VolumeSaleInfoListPrice extends apiModel {<br></td></tr
><tr
id=sl_svn445_2212

><td class="source">  public $amount;<br></td></tr
><tr
id=sl_svn445_2213

><td class="source">  public $currencyCode;<br></td></tr
><tr
id=sl_svn445_2214

><td class="source">  public function setAmount($amount) {<br></td></tr
><tr
id=sl_svn445_2215

><td class="source">    $this-&gt;amount = $amount;<br></td></tr
><tr
id=sl_svn445_2216

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2217

><td class="source">  public function getAmount() {<br></td></tr
><tr
id=sl_svn445_2218

><td class="source">    return $this-&gt;amount;<br></td></tr
><tr
id=sl_svn445_2219

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2220

><td class="source">  public function setCurrencyCode($currencyCode) {<br></td></tr
><tr
id=sl_svn445_2221

><td class="source">    $this-&gt;currencyCode = $currencyCode;<br></td></tr
><tr
id=sl_svn445_2222

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2223

><td class="source">  public function getCurrencyCode() {<br></td></tr
><tr
id=sl_svn445_2224

><td class="source">    return $this-&gt;currencyCode;<br></td></tr
><tr
id=sl_svn445_2225

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2226

><td class="source">}<br></td></tr
><tr
id=sl_svn445_2227

><td class="source"><br></td></tr
><tr
id=sl_svn445_2228

><td class="source">class VolumeSaleInfoRetailPrice extends apiModel {<br></td></tr
><tr
id=sl_svn445_2229

><td class="source">  public $amount;<br></td></tr
><tr
id=sl_svn445_2230

><td class="source">  public $currencyCode;<br></td></tr
><tr
id=sl_svn445_2231

><td class="source">  public function setAmount($amount) {<br></td></tr
><tr
id=sl_svn445_2232

><td class="source">    $this-&gt;amount = $amount;<br></td></tr
><tr
id=sl_svn445_2233

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2234

><td class="source">  public function getAmount() {<br></td></tr
><tr
id=sl_svn445_2235

><td class="source">    return $this-&gt;amount;<br></td></tr
><tr
id=sl_svn445_2236

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2237

><td class="source">  public function setCurrencyCode($currencyCode) {<br></td></tr
><tr
id=sl_svn445_2238

><td class="source">    $this-&gt;currencyCode = $currencyCode;<br></td></tr
><tr
id=sl_svn445_2239

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2240

><td class="source">  public function getCurrencyCode() {<br></td></tr
><tr
id=sl_svn445_2241

><td class="source">    return $this-&gt;currencyCode;<br></td></tr
><tr
id=sl_svn445_2242

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2243

><td class="source">}<br></td></tr
><tr
id=sl_svn445_2244

><td class="source"><br></td></tr
><tr
id=sl_svn445_2245

><td class="source">class VolumeSearchInfo extends apiModel {<br></td></tr
><tr
id=sl_svn445_2246

><td class="source">  public $textSnippet;<br></td></tr
><tr
id=sl_svn445_2247

><td class="source">  public function setTextSnippet($textSnippet) {<br></td></tr
><tr
id=sl_svn445_2248

><td class="source">    $this-&gt;textSnippet = $textSnippet;<br></td></tr
><tr
id=sl_svn445_2249

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2250

><td class="source">  public function getTextSnippet() {<br></td></tr
><tr
id=sl_svn445_2251

><td class="source">    return $this-&gt;textSnippet;<br></td></tr
><tr
id=sl_svn445_2252

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2253

><td class="source">}<br></td></tr
><tr
id=sl_svn445_2254

><td class="source"><br></td></tr
><tr
id=sl_svn445_2255

><td class="source">class VolumeUserInfo extends apiModel {<br></td></tr
><tr
id=sl_svn445_2256

><td class="source">  public $isInMyBooks;<br></td></tr
><tr
id=sl_svn445_2257

><td class="source">  public $updated;<br></td></tr
><tr
id=sl_svn445_2258

><td class="source">  protected $__reviewType = &#39;Review&#39;;<br></td></tr
><tr
id=sl_svn445_2259

><td class="source">  protected $__reviewDataType = &#39;&#39;;<br></td></tr
><tr
id=sl_svn445_2260

><td class="source">  public $review;<br></td></tr
><tr
id=sl_svn445_2261

><td class="source">  public $isPurchased;<br></td></tr
><tr
id=sl_svn445_2262

><td class="source">  protected $__readingPositionType = &#39;ReadingPosition&#39;;<br></td></tr
><tr
id=sl_svn445_2263

><td class="source">  protected $__readingPositionDataType = &#39;&#39;;<br></td></tr
><tr
id=sl_svn445_2264

><td class="source">  public $readingPosition;<br></td></tr
><tr
id=sl_svn445_2265

><td class="source">  public $isPreordered;<br></td></tr
><tr
id=sl_svn445_2266

><td class="source">  public function setIsInMyBooks($isInMyBooks) {<br></td></tr
><tr
id=sl_svn445_2267

><td class="source">    $this-&gt;isInMyBooks = $isInMyBooks;<br></td></tr
><tr
id=sl_svn445_2268

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2269

><td class="source">  public function getIsInMyBooks() {<br></td></tr
><tr
id=sl_svn445_2270

><td class="source">    return $this-&gt;isInMyBooks;<br></td></tr
><tr
id=sl_svn445_2271

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2272

><td class="source">  public function setUpdated($updated) {<br></td></tr
><tr
id=sl_svn445_2273

><td class="source">    $this-&gt;updated = $updated;<br></td></tr
><tr
id=sl_svn445_2274

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2275

><td class="source">  public function getUpdated() {<br></td></tr
><tr
id=sl_svn445_2276

><td class="source">    return $this-&gt;updated;<br></td></tr
><tr
id=sl_svn445_2277

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2278

><td class="source">  public function setReview(Review $review) {<br></td></tr
><tr
id=sl_svn445_2279

><td class="source">    $this-&gt;review = $review;<br></td></tr
><tr
id=sl_svn445_2280

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2281

><td class="source">  public function getReview() {<br></td></tr
><tr
id=sl_svn445_2282

><td class="source">    return $this-&gt;review;<br></td></tr
><tr
id=sl_svn445_2283

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2284

><td class="source">  public function setIsPurchased($isPurchased) {<br></td></tr
><tr
id=sl_svn445_2285

><td class="source">    $this-&gt;isPurchased = $isPurchased;<br></td></tr
><tr
id=sl_svn445_2286

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2287

><td class="source">  public function getIsPurchased() {<br></td></tr
><tr
id=sl_svn445_2288

><td class="source">    return $this-&gt;isPurchased;<br></td></tr
><tr
id=sl_svn445_2289

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2290

><td class="source">  public function setReadingPosition(ReadingPosition $readingPosition) {<br></td></tr
><tr
id=sl_svn445_2291

><td class="source">    $this-&gt;readingPosition = $readingPosition;<br></td></tr
><tr
id=sl_svn445_2292

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2293

><td class="source">  public function getReadingPosition() {<br></td></tr
><tr
id=sl_svn445_2294

><td class="source">    return $this-&gt;readingPosition;<br></td></tr
><tr
id=sl_svn445_2295

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2296

><td class="source">  public function setIsPreordered($isPreordered) {<br></td></tr
><tr
id=sl_svn445_2297

><td class="source">    $this-&gt;isPreordered = $isPreordered;<br></td></tr
><tr
id=sl_svn445_2298

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2299

><td class="source">  public function getIsPreordered() {<br></td></tr
><tr
id=sl_svn445_2300

><td class="source">    return $this-&gt;isPreordered;<br></td></tr
><tr
id=sl_svn445_2301

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2302

><td class="source">}<br></td></tr
><tr
id=sl_svn445_2303

><td class="source"><br></td></tr
><tr
id=sl_svn445_2304

><td class="source">class VolumeVolumeInfo extends apiModel {<br></td></tr
><tr
id=sl_svn445_2305

><td class="source">  public $publisher;<br></td></tr
><tr
id=sl_svn445_2306

><td class="source">  public $subtitle;<br></td></tr
><tr
id=sl_svn445_2307

><td class="source">  public $description;<br></td></tr
><tr
id=sl_svn445_2308

><td class="source">  public $language;<br></td></tr
><tr
id=sl_svn445_2309

><td class="source">  public $pageCount;<br></td></tr
><tr
id=sl_svn445_2310

><td class="source">  protected $__imageLinksType = &#39;VolumeVolumeInfoImageLinks&#39;;<br></td></tr
><tr
id=sl_svn445_2311

><td class="source">  protected $__imageLinksDataType = &#39;&#39;;<br></td></tr
><tr
id=sl_svn445_2312

><td class="source">  public $imageLinks;<br></td></tr
><tr
id=sl_svn445_2313

><td class="source">  public $publishedDate;<br></td></tr
><tr
id=sl_svn445_2314

><td class="source">  public $previewLink;<br></td></tr
><tr
id=sl_svn445_2315

><td class="source">  public $printType;<br></td></tr
><tr
id=sl_svn445_2316

><td class="source">  public $ratingsCount;<br></td></tr
><tr
id=sl_svn445_2317

><td class="source">  public $mainCategory;<br></td></tr
><tr
id=sl_svn445_2318

><td class="source">  protected $__dimensionsType = &#39;VolumeVolumeInfoDimensions&#39;;<br></td></tr
><tr
id=sl_svn445_2319

><td class="source">  protected $__dimensionsDataType = &#39;&#39;;<br></td></tr
><tr
id=sl_svn445_2320

><td class="source">  public $dimensions;<br></td></tr
><tr
id=sl_svn445_2321

><td class="source">  public $contentVersion;<br></td></tr
><tr
id=sl_svn445_2322

><td class="source">  protected $__industryIdentifiersType = &#39;VolumeVolumeInfoIndustryIdentifiers&#39;;<br></td></tr
><tr
id=sl_svn445_2323

><td class="source">  protected $__industryIdentifiersDataType = &#39;array&#39;;<br></td></tr
><tr
id=sl_svn445_2324

><td class="source">  public $industryIdentifiers;<br></td></tr
><tr
id=sl_svn445_2325

><td class="source">  public $authors;<br></td></tr
><tr
id=sl_svn445_2326

><td class="source">  public $title;<br></td></tr
><tr
id=sl_svn445_2327

><td class="source">  public $canonicalVolumeLink;<br></td></tr
><tr
id=sl_svn445_2328

><td class="source">  public $infoLink;<br></td></tr
><tr
id=sl_svn445_2329

><td class="source">  public $categories;<br></td></tr
><tr
id=sl_svn445_2330

><td class="source">  public $averageRating;<br></td></tr
><tr
id=sl_svn445_2331

><td class="source">  public function setPublisher($publisher) {<br></td></tr
><tr
id=sl_svn445_2332

><td class="source">    $this-&gt;publisher = $publisher;<br></td></tr
><tr
id=sl_svn445_2333

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2334

><td class="source">  public function getPublisher() {<br></td></tr
><tr
id=sl_svn445_2335

><td class="source">    return $this-&gt;publisher;<br></td></tr
><tr
id=sl_svn445_2336

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2337

><td class="source">  public function setSubtitle($subtitle) {<br></td></tr
><tr
id=sl_svn445_2338

><td class="source">    $this-&gt;subtitle = $subtitle;<br></td></tr
><tr
id=sl_svn445_2339

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2340

><td class="source">  public function getSubtitle() {<br></td></tr
><tr
id=sl_svn445_2341

><td class="source">    return $this-&gt;subtitle;<br></td></tr
><tr
id=sl_svn445_2342

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2343

><td class="source">  public function setDescription($description) {<br></td></tr
><tr
id=sl_svn445_2344

><td class="source">    $this-&gt;description = $description;<br></td></tr
><tr
id=sl_svn445_2345

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2346

><td class="source">  public function getDescription() {<br></td></tr
><tr
id=sl_svn445_2347

><td class="source">    return $this-&gt;description;<br></td></tr
><tr
id=sl_svn445_2348

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2349

><td class="source">  public function setLanguage($language) {<br></td></tr
><tr
id=sl_svn445_2350

><td class="source">    $this-&gt;language = $language;<br></td></tr
><tr
id=sl_svn445_2351

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2352

><td class="source">  public function getLanguage() {<br></td></tr
><tr
id=sl_svn445_2353

><td class="source">    return $this-&gt;language;<br></td></tr
><tr
id=sl_svn445_2354

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2355

><td class="source">  public function setPageCount($pageCount) {<br></td></tr
><tr
id=sl_svn445_2356

><td class="source">    $this-&gt;pageCount = $pageCount;<br></td></tr
><tr
id=sl_svn445_2357

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2358

><td class="source">  public function getPageCount() {<br></td></tr
><tr
id=sl_svn445_2359

><td class="source">    return $this-&gt;pageCount;<br></td></tr
><tr
id=sl_svn445_2360

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2361

><td class="source">  public function setImageLinks(VolumeVolumeInfoImageLinks $imageLinks) {<br></td></tr
><tr
id=sl_svn445_2362

><td class="source">    $this-&gt;imageLinks = $imageLinks;<br></td></tr
><tr
id=sl_svn445_2363

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2364

><td class="source">  public function getImageLinks() {<br></td></tr
><tr
id=sl_svn445_2365

><td class="source">    return $this-&gt;imageLinks;<br></td></tr
><tr
id=sl_svn445_2366

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2367

><td class="source">  public function setPublishedDate($publishedDate) {<br></td></tr
><tr
id=sl_svn445_2368

><td class="source">    $this-&gt;publishedDate = $publishedDate;<br></td></tr
><tr
id=sl_svn445_2369

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2370

><td class="source">  public function getPublishedDate() {<br></td></tr
><tr
id=sl_svn445_2371

><td class="source">    return $this-&gt;publishedDate;<br></td></tr
><tr
id=sl_svn445_2372

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2373

><td class="source">  public function setPreviewLink($previewLink) {<br></td></tr
><tr
id=sl_svn445_2374

><td class="source">    $this-&gt;previewLink = $previewLink;<br></td></tr
><tr
id=sl_svn445_2375

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2376

><td class="source">  public function getPreviewLink() {<br></td></tr
><tr
id=sl_svn445_2377

><td class="source">    return $this-&gt;previewLink;<br></td></tr
><tr
id=sl_svn445_2378

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2379

><td class="source">  public function setPrintType($printType) {<br></td></tr
><tr
id=sl_svn445_2380

><td class="source">    $this-&gt;printType = $printType;<br></td></tr
><tr
id=sl_svn445_2381

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2382

><td class="source">  public function getPrintType() {<br></td></tr
><tr
id=sl_svn445_2383

><td class="source">    return $this-&gt;printType;<br></td></tr
><tr
id=sl_svn445_2384

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2385

><td class="source">  public function setRatingsCount($ratingsCount) {<br></td></tr
><tr
id=sl_svn445_2386

><td class="source">    $this-&gt;ratingsCount = $ratingsCount;<br></td></tr
><tr
id=sl_svn445_2387

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2388

><td class="source">  public function getRatingsCount() {<br></td></tr
><tr
id=sl_svn445_2389

><td class="source">    return $this-&gt;ratingsCount;<br></td></tr
><tr
id=sl_svn445_2390

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2391

><td class="source">  public function setMainCategory($mainCategory) {<br></td></tr
><tr
id=sl_svn445_2392

><td class="source">    $this-&gt;mainCategory = $mainCategory;<br></td></tr
><tr
id=sl_svn445_2393

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2394

><td class="source">  public function getMainCategory() {<br></td></tr
><tr
id=sl_svn445_2395

><td class="source">    return $this-&gt;mainCategory;<br></td></tr
><tr
id=sl_svn445_2396

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2397

><td class="source">  public function setDimensions(VolumeVolumeInfoDimensions $dimensions) {<br></td></tr
><tr
id=sl_svn445_2398

><td class="source">    $this-&gt;dimensions = $dimensions;<br></td></tr
><tr
id=sl_svn445_2399

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2400

><td class="source">  public function getDimensions() {<br></td></tr
><tr
id=sl_svn445_2401

><td class="source">    return $this-&gt;dimensions;<br></td></tr
><tr
id=sl_svn445_2402

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2403

><td class="source">  public function setContentVersion($contentVersion) {<br></td></tr
><tr
id=sl_svn445_2404

><td class="source">    $this-&gt;contentVersion = $contentVersion;<br></td></tr
><tr
id=sl_svn445_2405

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2406

><td class="source">  public function getContentVersion() {<br></td></tr
><tr
id=sl_svn445_2407

><td class="source">    return $this-&gt;contentVersion;<br></td></tr
><tr
id=sl_svn445_2408

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2409

><td class="source">  public function setIndustryIdentifiers(/* array(VolumeVolumeInfoIndustryIdentifiers) */ $industryIdentifiers) {<br></td></tr
><tr
id=sl_svn445_2410

><td class="source">    $this-&gt;assertIsArray($industryIdentifiers, &#39;VolumeVolumeInfoIndustryIdentifiers&#39;, __METHOD__);<br></td></tr
><tr
id=sl_svn445_2411

><td class="source">    $this-&gt;industryIdentifiers = $industryIdentifiers;<br></td></tr
><tr
id=sl_svn445_2412

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2413

><td class="source">  public function getIndustryIdentifiers() {<br></td></tr
><tr
id=sl_svn445_2414

><td class="source">    return $this-&gt;industryIdentifiers;<br></td></tr
><tr
id=sl_svn445_2415

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2416

><td class="source">  public function setAuthors(/* array(string) */ $authors) {<br></td></tr
><tr
id=sl_svn445_2417

><td class="source">    $this-&gt;assertIsArray($authors, &#39;string&#39;, __METHOD__);<br></td></tr
><tr
id=sl_svn445_2418

><td class="source">    $this-&gt;authors = $authors;<br></td></tr
><tr
id=sl_svn445_2419

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2420

><td class="source">  public function getAuthors() {<br></td></tr
><tr
id=sl_svn445_2421

><td class="source">    return $this-&gt;authors;<br></td></tr
><tr
id=sl_svn445_2422

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2423

><td class="source">  public function setTitle($title) {<br></td></tr
><tr
id=sl_svn445_2424

><td class="source">    $this-&gt;title = $title;<br></td></tr
><tr
id=sl_svn445_2425

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2426

><td class="source">  public function getTitle() {<br></td></tr
><tr
id=sl_svn445_2427

><td class="source">    return $this-&gt;title;<br></td></tr
><tr
id=sl_svn445_2428

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2429

><td class="source">  public function setCanonicalVolumeLink($canonicalVolumeLink) {<br></td></tr
><tr
id=sl_svn445_2430

><td class="source">    $this-&gt;canonicalVolumeLink = $canonicalVolumeLink;<br></td></tr
><tr
id=sl_svn445_2431

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2432

><td class="source">  public function getCanonicalVolumeLink() {<br></td></tr
><tr
id=sl_svn445_2433

><td class="source">    return $this-&gt;canonicalVolumeLink;<br></td></tr
><tr
id=sl_svn445_2434

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2435

><td class="source">  public function setInfoLink($infoLink) {<br></td></tr
><tr
id=sl_svn445_2436

><td class="source">    $this-&gt;infoLink = $infoLink;<br></td></tr
><tr
id=sl_svn445_2437

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2438

><td class="source">  public function getInfoLink() {<br></td></tr
><tr
id=sl_svn445_2439

><td class="source">    return $this-&gt;infoLink;<br></td></tr
><tr
id=sl_svn445_2440

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2441

><td class="source">  public function setCategories(/* array(string) */ $categories) {<br></td></tr
><tr
id=sl_svn445_2442

><td class="source">    $this-&gt;assertIsArray($categories, &#39;string&#39;, __METHOD__);<br></td></tr
><tr
id=sl_svn445_2443

><td class="source">    $this-&gt;categories = $categories;<br></td></tr
><tr
id=sl_svn445_2444

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2445

><td class="source">  public function getCategories() {<br></td></tr
><tr
id=sl_svn445_2446

><td class="source">    return $this-&gt;categories;<br></td></tr
><tr
id=sl_svn445_2447

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2448

><td class="source">  public function setAverageRating($averageRating) {<br></td></tr
><tr
id=sl_svn445_2449

><td class="source">    $this-&gt;averageRating = $averageRating;<br></td></tr
><tr
id=sl_svn445_2450

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2451

><td class="source">  public function getAverageRating() {<br></td></tr
><tr
id=sl_svn445_2452

><td class="source">    return $this-&gt;averageRating;<br></td></tr
><tr
id=sl_svn445_2453

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2454

><td class="source">}<br></td></tr
><tr
id=sl_svn445_2455

><td class="source"><br></td></tr
><tr
id=sl_svn445_2456

><td class="source">class VolumeVolumeInfoDimensions extends apiModel {<br></td></tr
><tr
id=sl_svn445_2457

><td class="source">  public $width;<br></td></tr
><tr
id=sl_svn445_2458

><td class="source">  public $thickness;<br></td></tr
><tr
id=sl_svn445_2459

><td class="source">  public $height;<br></td></tr
><tr
id=sl_svn445_2460

><td class="source">  public function setWidth($width) {<br></td></tr
><tr
id=sl_svn445_2461

><td class="source">    $this-&gt;width = $width;<br></td></tr
><tr
id=sl_svn445_2462

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2463

><td class="source">  public function getWidth() {<br></td></tr
><tr
id=sl_svn445_2464

><td class="source">    return $this-&gt;width;<br></td></tr
><tr
id=sl_svn445_2465

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2466

><td class="source">  public function setThickness($thickness) {<br></td></tr
><tr
id=sl_svn445_2467

><td class="source">    $this-&gt;thickness = $thickness;<br></td></tr
><tr
id=sl_svn445_2468

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2469

><td class="source">  public function getThickness() {<br></td></tr
><tr
id=sl_svn445_2470

><td class="source">    return $this-&gt;thickness;<br></td></tr
><tr
id=sl_svn445_2471

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2472

><td class="source">  public function setHeight($height) {<br></td></tr
><tr
id=sl_svn445_2473

><td class="source">    $this-&gt;height = $height;<br></td></tr
><tr
id=sl_svn445_2474

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2475

><td class="source">  public function getHeight() {<br></td></tr
><tr
id=sl_svn445_2476

><td class="source">    return $this-&gt;height;<br></td></tr
><tr
id=sl_svn445_2477

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2478

><td class="source">}<br></td></tr
><tr
id=sl_svn445_2479

><td class="source"><br></td></tr
><tr
id=sl_svn445_2480

><td class="source">class VolumeVolumeInfoImageLinks extends apiModel {<br></td></tr
><tr
id=sl_svn445_2481

><td class="source">  public $medium;<br></td></tr
><tr
id=sl_svn445_2482

><td class="source">  public $smallThumbnail;<br></td></tr
><tr
id=sl_svn445_2483

><td class="source">  public $large;<br></td></tr
><tr
id=sl_svn445_2484

><td class="source">  public $extraLarge;<br></td></tr
><tr
id=sl_svn445_2485

><td class="source">  public $small;<br></td></tr
><tr
id=sl_svn445_2486

><td class="source">  public $thumbnail;<br></td></tr
><tr
id=sl_svn445_2487

><td class="source">  public function setMedium($medium) {<br></td></tr
><tr
id=sl_svn445_2488

><td class="source">    $this-&gt;medium = $medium;<br></td></tr
><tr
id=sl_svn445_2489

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2490

><td class="source">  public function getMedium() {<br></td></tr
><tr
id=sl_svn445_2491

><td class="source">    return $this-&gt;medium;<br></td></tr
><tr
id=sl_svn445_2492

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2493

><td class="source">  public function setSmallThumbnail($smallThumbnail) {<br></td></tr
><tr
id=sl_svn445_2494

><td class="source">    $this-&gt;smallThumbnail = $smallThumbnail;<br></td></tr
><tr
id=sl_svn445_2495

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2496

><td class="source">  public function getSmallThumbnail() {<br></td></tr
><tr
id=sl_svn445_2497

><td class="source">    return $this-&gt;smallThumbnail;<br></td></tr
><tr
id=sl_svn445_2498

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2499

><td class="source">  public function setLarge($large) {<br></td></tr
><tr
id=sl_svn445_2500

><td class="source">    $this-&gt;large = $large;<br></td></tr
><tr
id=sl_svn445_2501

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2502

><td class="source">  public function getLarge() {<br></td></tr
><tr
id=sl_svn445_2503

><td class="source">    return $this-&gt;large;<br></td></tr
><tr
id=sl_svn445_2504

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2505

><td class="source">  public function setExtraLarge($extraLarge) {<br></td></tr
><tr
id=sl_svn445_2506

><td class="source">    $this-&gt;extraLarge = $extraLarge;<br></td></tr
><tr
id=sl_svn445_2507

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2508

><td class="source">  public function getExtraLarge() {<br></td></tr
><tr
id=sl_svn445_2509

><td class="source">    return $this-&gt;extraLarge;<br></td></tr
><tr
id=sl_svn445_2510

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2511

><td class="source">  public function setSmall($small) {<br></td></tr
><tr
id=sl_svn445_2512

><td class="source">    $this-&gt;small = $small;<br></td></tr
><tr
id=sl_svn445_2513

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2514

><td class="source">  public function getSmall() {<br></td></tr
><tr
id=sl_svn445_2515

><td class="source">    return $this-&gt;small;<br></td></tr
><tr
id=sl_svn445_2516

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2517

><td class="source">  public function setThumbnail($thumbnail) {<br></td></tr
><tr
id=sl_svn445_2518

><td class="source">    $this-&gt;thumbnail = $thumbnail;<br></td></tr
><tr
id=sl_svn445_2519

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2520

><td class="source">  public function getThumbnail() {<br></td></tr
><tr
id=sl_svn445_2521

><td class="source">    return $this-&gt;thumbnail;<br></td></tr
><tr
id=sl_svn445_2522

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2523

><td class="source">}<br></td></tr
><tr
id=sl_svn445_2524

><td class="source"><br></td></tr
><tr
id=sl_svn445_2525

><td class="source">class VolumeVolumeInfoIndustryIdentifiers extends apiModel {<br></td></tr
><tr
id=sl_svn445_2526

><td class="source">  public $identifier;<br></td></tr
><tr
id=sl_svn445_2527

><td class="source">  public $type;<br></td></tr
><tr
id=sl_svn445_2528

><td class="source">  public function setIdentifier($identifier) {<br></td></tr
><tr
id=sl_svn445_2529

><td class="source">    $this-&gt;identifier = $identifier;<br></td></tr
><tr
id=sl_svn445_2530

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2531

><td class="source">  public function getIdentifier() {<br></td></tr
><tr
id=sl_svn445_2532

><td class="source">    return $this-&gt;identifier;<br></td></tr
><tr
id=sl_svn445_2533

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2534

><td class="source">  public function setType($type) {<br></td></tr
><tr
id=sl_svn445_2535

><td class="source">    $this-&gt;type = $type;<br></td></tr
><tr
id=sl_svn445_2536

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2537

><td class="source">  public function getType() {<br></td></tr
><tr
id=sl_svn445_2538

><td class="source">    return $this-&gt;type;<br></td></tr
><tr
id=sl_svn445_2539

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2540

><td class="source">}<br></td></tr
><tr
id=sl_svn445_2541

><td class="source"><br></td></tr
><tr
id=sl_svn445_2542

><td class="source">class Volumeannotation extends apiModel {<br></td></tr
><tr
id=sl_svn445_2543

><td class="source">  public $annotationType;<br></td></tr
><tr
id=sl_svn445_2544

><td class="source">  public $kind;<br></td></tr
><tr
id=sl_svn445_2545

><td class="source">  public $updated;<br></td></tr
><tr
id=sl_svn445_2546

><td class="source">  public $deleted;<br></td></tr
><tr
id=sl_svn445_2547

><td class="source">  protected $__contentRangesType = &#39;VolumeannotationContentRanges&#39;;<br></td></tr
><tr
id=sl_svn445_2548

><td class="source">  protected $__contentRangesDataType = &#39;&#39;;<br></td></tr
><tr
id=sl_svn445_2549

><td class="source">  public $contentRanges;<br></td></tr
><tr
id=sl_svn445_2550

><td class="source">  public $selectedText;<br></td></tr
><tr
id=sl_svn445_2551

><td class="source">  public $volumeId;<br></td></tr
><tr
id=sl_svn445_2552

><td class="source">  public $annotationDataId;<br></td></tr
><tr
id=sl_svn445_2553

><td class="source">  public $annotationDataLink;<br></td></tr
><tr
id=sl_svn445_2554

><td class="source">  public $pageIds;<br></td></tr
><tr
id=sl_svn445_2555

><td class="source">  public $layerId;<br></td></tr
><tr
id=sl_svn445_2556

><td class="source">  public $data;<br></td></tr
><tr
id=sl_svn445_2557

><td class="source">  public $id;<br></td></tr
><tr
id=sl_svn445_2558

><td class="source">  public $selfLink;<br></td></tr
><tr
id=sl_svn445_2559

><td class="source">  public function setAnnotationType($annotationType) {<br></td></tr
><tr
id=sl_svn445_2560

><td class="source">    $this-&gt;annotationType = $annotationType;<br></td></tr
><tr
id=sl_svn445_2561

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2562

><td class="source">  public function getAnnotationType() {<br></td></tr
><tr
id=sl_svn445_2563

><td class="source">    return $this-&gt;annotationType;<br></td></tr
><tr
id=sl_svn445_2564

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2565

><td class="source">  public function setKind($kind) {<br></td></tr
><tr
id=sl_svn445_2566

><td class="source">    $this-&gt;kind = $kind;<br></td></tr
><tr
id=sl_svn445_2567

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2568

><td class="source">  public function getKind() {<br></td></tr
><tr
id=sl_svn445_2569

><td class="source">    return $this-&gt;kind;<br></td></tr
><tr
id=sl_svn445_2570

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2571

><td class="source">  public function setUpdated($updated) {<br></td></tr
><tr
id=sl_svn445_2572

><td class="source">    $this-&gt;updated = $updated;<br></td></tr
><tr
id=sl_svn445_2573

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2574

><td class="source">  public function getUpdated() {<br></td></tr
><tr
id=sl_svn445_2575

><td class="source">    return $this-&gt;updated;<br></td></tr
><tr
id=sl_svn445_2576

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2577

><td class="source">  public function setDeleted($deleted) {<br></td></tr
><tr
id=sl_svn445_2578

><td class="source">    $this-&gt;deleted = $deleted;<br></td></tr
><tr
id=sl_svn445_2579

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2580

><td class="source">  public function getDeleted() {<br></td></tr
><tr
id=sl_svn445_2581

><td class="source">    return $this-&gt;deleted;<br></td></tr
><tr
id=sl_svn445_2582

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2583

><td class="source">  public function setContentRanges(VolumeannotationContentRanges $contentRanges) {<br></td></tr
><tr
id=sl_svn445_2584

><td class="source">    $this-&gt;contentRanges = $contentRanges;<br></td></tr
><tr
id=sl_svn445_2585

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2586

><td class="source">  public function getContentRanges() {<br></td></tr
><tr
id=sl_svn445_2587

><td class="source">    return $this-&gt;contentRanges;<br></td></tr
><tr
id=sl_svn445_2588

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2589

><td class="source">  public function setSelectedText($selectedText) {<br></td></tr
><tr
id=sl_svn445_2590

><td class="source">    $this-&gt;selectedText = $selectedText;<br></td></tr
><tr
id=sl_svn445_2591

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2592

><td class="source">  public function getSelectedText() {<br></td></tr
><tr
id=sl_svn445_2593

><td class="source">    return $this-&gt;selectedText;<br></td></tr
><tr
id=sl_svn445_2594

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2595

><td class="source">  public function setVolumeId($volumeId) {<br></td></tr
><tr
id=sl_svn445_2596

><td class="source">    $this-&gt;volumeId = $volumeId;<br></td></tr
><tr
id=sl_svn445_2597

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2598

><td class="source">  public function getVolumeId() {<br></td></tr
><tr
id=sl_svn445_2599

><td class="source">    return $this-&gt;volumeId;<br></td></tr
><tr
id=sl_svn445_2600

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2601

><td class="source">  public function setAnnotationDataId($annotationDataId) {<br></td></tr
><tr
id=sl_svn445_2602

><td class="source">    $this-&gt;annotationDataId = $annotationDataId;<br></td></tr
><tr
id=sl_svn445_2603

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2604

><td class="source">  public function getAnnotationDataId() {<br></td></tr
><tr
id=sl_svn445_2605

><td class="source">    return $this-&gt;annotationDataId;<br></td></tr
><tr
id=sl_svn445_2606

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2607

><td class="source">  public function setAnnotationDataLink($annotationDataLink) {<br></td></tr
><tr
id=sl_svn445_2608

><td class="source">    $this-&gt;annotationDataLink = $annotationDataLink;<br></td></tr
><tr
id=sl_svn445_2609

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2610

><td class="source">  public function getAnnotationDataLink() {<br></td></tr
><tr
id=sl_svn445_2611

><td class="source">    return $this-&gt;annotationDataLink;<br></td></tr
><tr
id=sl_svn445_2612

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2613

><td class="source">  public function setPageIds(/* array(string) */ $pageIds) {<br></td></tr
><tr
id=sl_svn445_2614

><td class="source">    $this-&gt;assertIsArray($pageIds, &#39;string&#39;, __METHOD__);<br></td></tr
><tr
id=sl_svn445_2615

><td class="source">    $this-&gt;pageIds = $pageIds;<br></td></tr
><tr
id=sl_svn445_2616

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2617

><td class="source">  public function getPageIds() {<br></td></tr
><tr
id=sl_svn445_2618

><td class="source">    return $this-&gt;pageIds;<br></td></tr
><tr
id=sl_svn445_2619

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2620

><td class="source">  public function setLayerId($layerId) {<br></td></tr
><tr
id=sl_svn445_2621

><td class="source">    $this-&gt;layerId = $layerId;<br></td></tr
><tr
id=sl_svn445_2622

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2623

><td class="source">  public function getLayerId() {<br></td></tr
><tr
id=sl_svn445_2624

><td class="source">    return $this-&gt;layerId;<br></td></tr
><tr
id=sl_svn445_2625

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2626

><td class="source">  public function setData($data) {<br></td></tr
><tr
id=sl_svn445_2627

><td class="source">    $this-&gt;data = $data;<br></td></tr
><tr
id=sl_svn445_2628

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2629

><td class="source">  public function getData() {<br></td></tr
><tr
id=sl_svn445_2630

><td class="source">    return $this-&gt;data;<br></td></tr
><tr
id=sl_svn445_2631

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2632

><td class="source">  public function setId($id) {<br></td></tr
><tr
id=sl_svn445_2633

><td class="source">    $this-&gt;id = $id;<br></td></tr
><tr
id=sl_svn445_2634

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2635

><td class="source">  public function getId() {<br></td></tr
><tr
id=sl_svn445_2636

><td class="source">    return $this-&gt;id;<br></td></tr
><tr
id=sl_svn445_2637

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2638

><td class="source">  public function setSelfLink($selfLink) {<br></td></tr
><tr
id=sl_svn445_2639

><td class="source">    $this-&gt;selfLink = $selfLink;<br></td></tr
><tr
id=sl_svn445_2640

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2641

><td class="source">  public function getSelfLink() {<br></td></tr
><tr
id=sl_svn445_2642

><td class="source">    return $this-&gt;selfLink;<br></td></tr
><tr
id=sl_svn445_2643

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2644

><td class="source">}<br></td></tr
><tr
id=sl_svn445_2645

><td class="source"><br></td></tr
><tr
id=sl_svn445_2646

><td class="source">class VolumeannotationContentRanges extends apiModel {<br></td></tr
><tr
id=sl_svn445_2647

><td class="source">  public $contentVersion;<br></td></tr
><tr
id=sl_svn445_2648

><td class="source">  protected $__gbTextRangeType = &#39;BooksAnnotationsRange&#39;;<br></td></tr
><tr
id=sl_svn445_2649

><td class="source">  protected $__gbTextRangeDataType = &#39;&#39;;<br></td></tr
><tr
id=sl_svn445_2650

><td class="source">  public $gbTextRange;<br></td></tr
><tr
id=sl_svn445_2651

><td class="source">  protected $__cfiRangeType = &#39;BooksAnnotationsRange&#39;;<br></td></tr
><tr
id=sl_svn445_2652

><td class="source">  protected $__cfiRangeDataType = &#39;&#39;;<br></td></tr
><tr
id=sl_svn445_2653

><td class="source">  public $cfiRange;<br></td></tr
><tr
id=sl_svn445_2654

><td class="source">  protected $__gbImageRangeType = &#39;BooksAnnotationsRange&#39;;<br></td></tr
><tr
id=sl_svn445_2655

><td class="source">  protected $__gbImageRangeDataType = &#39;&#39;;<br></td></tr
><tr
id=sl_svn445_2656

><td class="source">  public $gbImageRange;<br></td></tr
><tr
id=sl_svn445_2657

><td class="source">  public function setContentVersion($contentVersion) {<br></td></tr
><tr
id=sl_svn445_2658

><td class="source">    $this-&gt;contentVersion = $contentVersion;<br></td></tr
><tr
id=sl_svn445_2659

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2660

><td class="source">  public function getContentVersion() {<br></td></tr
><tr
id=sl_svn445_2661

><td class="source">    return $this-&gt;contentVersion;<br></td></tr
><tr
id=sl_svn445_2662

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2663

><td class="source">  public function setGbTextRange(BooksAnnotationsRange $gbTextRange) {<br></td></tr
><tr
id=sl_svn445_2664

><td class="source">    $this-&gt;gbTextRange = $gbTextRange;<br></td></tr
><tr
id=sl_svn445_2665

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2666

><td class="source">  public function getGbTextRange() {<br></td></tr
><tr
id=sl_svn445_2667

><td class="source">    return $this-&gt;gbTextRange;<br></td></tr
><tr
id=sl_svn445_2668

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2669

><td class="source">  public function setCfiRange(BooksAnnotationsRange $cfiRange) {<br></td></tr
><tr
id=sl_svn445_2670

><td class="source">    $this-&gt;cfiRange = $cfiRange;<br></td></tr
><tr
id=sl_svn445_2671

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2672

><td class="source">  public function getCfiRange() {<br></td></tr
><tr
id=sl_svn445_2673

><td class="source">    return $this-&gt;cfiRange;<br></td></tr
><tr
id=sl_svn445_2674

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2675

><td class="source">  public function setGbImageRange(BooksAnnotationsRange $gbImageRange) {<br></td></tr
><tr
id=sl_svn445_2676

><td class="source">    $this-&gt;gbImageRange = $gbImageRange;<br></td></tr
><tr
id=sl_svn445_2677

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2678

><td class="source">  public function getGbImageRange() {<br></td></tr
><tr
id=sl_svn445_2679

><td class="source">    return $this-&gt;gbImageRange;<br></td></tr
><tr
id=sl_svn445_2680

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2681

><td class="source">}<br></td></tr
><tr
id=sl_svn445_2682

><td class="source"><br></td></tr
><tr
id=sl_svn445_2683

><td class="source">class Volumeannotations extends apiModel {<br></td></tr
><tr
id=sl_svn445_2684

><td class="source">  public $nextPageToken;<br></td></tr
><tr
id=sl_svn445_2685

><td class="source">  protected $__itemsType = &#39;Volumeannotation&#39;;<br></td></tr
><tr
id=sl_svn445_2686

><td class="source">  protected $__itemsDataType = &#39;array&#39;;<br></td></tr
><tr
id=sl_svn445_2687

><td class="source">  public $items;<br></td></tr
><tr
id=sl_svn445_2688

><td class="source">  public $kind;<br></td></tr
><tr
id=sl_svn445_2689

><td class="source">  public $totalItems;<br></td></tr
><tr
id=sl_svn445_2690

><td class="source">  public function setNextPageToken($nextPageToken) {<br></td></tr
><tr
id=sl_svn445_2691

><td class="source">    $this-&gt;nextPageToken = $nextPageToken;<br></td></tr
><tr
id=sl_svn445_2692

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2693

><td class="source">  public function getNextPageToken() {<br></td></tr
><tr
id=sl_svn445_2694

><td class="source">    return $this-&gt;nextPageToken;<br></td></tr
><tr
id=sl_svn445_2695

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2696

><td class="source">  public function setItems(/* array(Volumeannotation) */ $items) {<br></td></tr
><tr
id=sl_svn445_2697

><td class="source">    $this-&gt;assertIsArray($items, &#39;Volumeannotation&#39;, __METHOD__);<br></td></tr
><tr
id=sl_svn445_2698

><td class="source">    $this-&gt;items = $items;<br></td></tr
><tr
id=sl_svn445_2699

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2700

><td class="source">  public function getItems() {<br></td></tr
><tr
id=sl_svn445_2701

><td class="source">    return $this-&gt;items;<br></td></tr
><tr
id=sl_svn445_2702

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2703

><td class="source">  public function setKind($kind) {<br></td></tr
><tr
id=sl_svn445_2704

><td class="source">    $this-&gt;kind = $kind;<br></td></tr
><tr
id=sl_svn445_2705

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2706

><td class="source">  public function getKind() {<br></td></tr
><tr
id=sl_svn445_2707

><td class="source">    return $this-&gt;kind;<br></td></tr
><tr
id=sl_svn445_2708

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2709

><td class="source">  public function setTotalItems($totalItems) {<br></td></tr
><tr
id=sl_svn445_2710

><td class="source">    $this-&gt;totalItems = $totalItems;<br></td></tr
><tr
id=sl_svn445_2711

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2712

><td class="source">  public function getTotalItems() {<br></td></tr
><tr
id=sl_svn445_2713

><td class="source">    return $this-&gt;totalItems;<br></td></tr
><tr
id=sl_svn445_2714

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2715

><td class="source">}<br></td></tr
><tr
id=sl_svn445_2716

><td class="source"><br></td></tr
><tr
id=sl_svn445_2717

><td class="source">class Volumes extends apiModel {<br></td></tr
><tr
id=sl_svn445_2718

><td class="source">  public $totalItems;<br></td></tr
><tr
id=sl_svn445_2719

><td class="source">  protected $__itemsType = &#39;Volume&#39;;<br></td></tr
><tr
id=sl_svn445_2720

><td class="source">  protected $__itemsDataType = &#39;array&#39;;<br></td></tr
><tr
id=sl_svn445_2721

><td class="source">  public $items;<br></td></tr
><tr
id=sl_svn445_2722

><td class="source">  public $kind;<br></td></tr
><tr
id=sl_svn445_2723

><td class="source">  public function setTotalItems($totalItems) {<br></td></tr
><tr
id=sl_svn445_2724

><td class="source">    $this-&gt;totalItems = $totalItems;<br></td></tr
><tr
id=sl_svn445_2725

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2726

><td class="source">  public function getTotalItems() {<br></td></tr
><tr
id=sl_svn445_2727

><td class="source">    return $this-&gt;totalItems;<br></td></tr
><tr
id=sl_svn445_2728

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2729

><td class="source">  public function setItems(/* array(Volume) */ $items) {<br></td></tr
><tr
id=sl_svn445_2730

><td class="source">    $this-&gt;assertIsArray($items, &#39;Volume&#39;, __METHOD__);<br></td></tr
><tr
id=sl_svn445_2731

><td class="source">    $this-&gt;items = $items;<br></td></tr
><tr
id=sl_svn445_2732

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2733

><td class="source">  public function getItems() {<br></td></tr
><tr
id=sl_svn445_2734

><td class="source">    return $this-&gt;items;<br></td></tr
><tr
id=sl_svn445_2735

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2736

><td class="source">  public function setKind($kind) {<br></td></tr
><tr
id=sl_svn445_2737

><td class="source">    $this-&gt;kind = $kind;<br></td></tr
><tr
id=sl_svn445_2738

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2739

><td class="source">  public function getKind() {<br></td></tr
><tr
id=sl_svn445_2740

><td class="source">    return $this-&gt;kind;<br></td></tr
><tr
id=sl_svn445_2741

><td class="source">  }<br></td></tr
><tr
id=sl_svn445_2742

><td class="source">}<br></td></tr
></table></pre>
<pre><table width="100%"><tr class="cursor_stop cursor_hidden"><td></td></tr></table></pre>
</td>
</tr></table>

 
<script type="text/javascript">
 var lineNumUnderMouse = -1;
 
 function gutterOver(num) {
 gutterOut();
 var newTR = document.getElementById('gr_svn445_' + num);
 if (newTR) {
 newTR.className = 'undermouse';
 }
 lineNumUnderMouse = num;
 }
 function gutterOut() {
 if (lineNumUnderMouse != -1) {
 var oldTR = document.getElementById(
 'gr_svn445_' + lineNumUnderMouse);
 if (oldTR) {
 oldTR.className = '';
 }
 lineNumUnderMouse = -1;
 }
 }
 var numsGenState = {table_base_id: 'nums_table_'};
 var srcGenState = {table_base_id: 'src_table_'};
 var alignerRunning = false;
 var startOver = false;
 function setLineNumberHeights() {
 if (alignerRunning) {
 startOver = true;
 return;
 }
 numsGenState.chunk_id = 0;
 numsGenState.table = document.getElementById('nums_table_0');
 numsGenState.row_num = 0;
 if (!numsGenState.table) {
 return; // Silently exit if no file is present.
 }
 srcGenState.chunk_id = 0;
 srcGenState.table = document.getElementById('src_table_0');
 srcGenState.row_num = 0;
 alignerRunning = true;
 continueToSetLineNumberHeights();
 }
 function rowGenerator(genState) {
 if (genState.row_num < genState.table.rows.length) {
 var currentRow = genState.table.rows[genState.row_num];
 genState.row_num++;
 return currentRow;
 }
 var newTable = document.getElementById(
 genState.table_base_id + (genState.chunk_id + 1));
 if (newTable) {
 genState.chunk_id++;
 genState.row_num = 0;
 genState.table = newTable;
 return genState.table.rows[0];
 }
 return null;
 }
 var MAX_ROWS_PER_PASS = 1000;
 function continueToSetLineNumberHeights() {
 var rowsInThisPass = 0;
 var numRow = 1;
 var srcRow = 1;
 while (numRow && srcRow && rowsInThisPass < MAX_ROWS_PER_PASS) {
 numRow = rowGenerator(numsGenState);
 srcRow = rowGenerator(srcGenState);
 rowsInThisPass++;
 if (numRow && srcRow) {
 if (numRow.offsetHeight != srcRow.offsetHeight) {
 numRow.firstChild.style.height = srcRow.offsetHeight + 'px';
 }
 }
 }
 if (rowsInThisPass >= MAX_ROWS_PER_PASS) {
 setTimeout(continueToSetLineNumberHeights, 10);
 } else {
 alignerRunning = false;
 if (startOver) {
 startOver = false;
 setTimeout(setLineNumberHeights, 500);
 }
 }
 }
 function initLineNumberHeights() {
 // Do 2 complete passes, because there can be races
 // between this code and prettify.
 startOver = true;
 setTimeout(setLineNumberHeights, 250);
 window.onresize = setLineNumberHeights;
 }
 initLineNumberHeights();
</script>

 
 
 <div id="log">
 <div style="text-align:right">
 <a class="ifCollapse" href="#" onclick="_toggleMeta(this); return false">Show details</a>
 <a class="ifExpand" href="#" onclick="_toggleMeta(this); return false">Hide details</a>
 </div>
 <div class="ifExpand">
 
 
 <div class="pmeta_bubble_bg" style="border:1px solid white">
 <div class="round4"></div>
 <div class="round2"></div>
 <div class="round1"></div>
 <div class="box-inner">
 <div id="changelog">
 <p>Change log</p>
 <div>
 <a href="/p/google-api-php-client/source/detail?spec=svn445&amp;r=432">r432</a>
 by chir...@google.com
 on May 16, 2012
 &nbsp; <a href="/p/google-api-php-client/source/diff?spec=svn445&r=432&amp;format=side&amp;path=/trunk/src/contrib/apiBooksService.php&amp;old_path=/trunk/src/contrib/apiBooksService.php&amp;old=292">Diff</a>
 </div>
 <pre>Update the Moderator, Prediction, Custom
Search, Latitude, and Books service.
</pre>
 </div>
 
 
 
 
 
 
 <script type="text/javascript">
 var detail_url = '/p/google-api-php-client/source/detail?r=432&spec=svn445';
 var publish_url = '/p/google-api-php-client/source/detail?r=432&spec=svn445#publish';
 // describe the paths of this revision in javascript.
 var changed_paths = [];
 var changed_urls = [];
 
 changed_paths.push('/trunk/src/contrib/apiBooksService.php');
 changed_urls.push('/p/google-api-php-client/source/browse/trunk/src/contrib/apiBooksService.php?r\x3d432\x26spec\x3dsvn445');
 
 var selected_path = '/trunk/src/contrib/apiBooksService.php';
 
 
 changed_paths.push('/trunk/src/contrib/apiCustomsearchService.php');
 changed_urls.push('/p/google-api-php-client/source/browse/trunk/src/contrib/apiCustomsearchService.php?r\x3d432\x26spec\x3dsvn445');
 
 
 changed_paths.push('/trunk/src/contrib/apiLatitudeService.php');
 changed_urls.push('/p/google-api-php-client/source/browse/trunk/src/contrib/apiLatitudeService.php?r\x3d432\x26spec\x3dsvn445');
 
 
 changed_paths.push('/trunk/src/contrib/apiModeratorService.php');
 changed_urls.push('/p/google-api-php-client/source/browse/trunk/src/contrib/apiModeratorService.php?r\x3d432\x26spec\x3dsvn445');
 
 
 changed_paths.push('/trunk/src/contrib/apiPredictionService.php');
 changed_urls.push('/p/google-api-php-client/source/browse/trunk/src/contrib/apiPredictionService.php?r\x3d432\x26spec\x3dsvn445');
 
 
 function getCurrentPageIndex() {
 for (var i = 0; i < changed_paths.length; i++) {
 if (selected_path == changed_paths[i]) {
 return i;
 }
 }
 }
 function getNextPage() {
 var i = getCurrentPageIndex();
 if (i < changed_paths.length - 1) {
 return changed_urls[i + 1];
 }
 return null;
 }
 function getPreviousPage() {
 var i = getCurrentPageIndex();
 if (i > 0) {
 return changed_urls[i - 1];
 }
 return null;
 }
 function gotoNextPage() {
 var page = getNextPage();
 if (!page) {
 page = detail_url;
 }
 window.location = page;
 }
 function gotoPreviousPage() {
 var page = getPreviousPage();
 if (!page) {
 page = detail_url;
 }
 window.location = page;
 }
 function gotoDetailPage() {
 window.location = detail_url;
 }
 function gotoPublishPage() {
 window.location = publish_url;
 }
</script>

 
 <style type="text/css">
 #review_nav {
 border-top: 3px solid white;
 padding-top: 6px;
 margin-top: 1em;
 }
 #review_nav td {
 vertical-align: middle;
 }
 #review_nav select {
 margin: .5em 0;
 }
 </style>
 <div id="review_nav">
 <table><tr><td>Go to:&nbsp;</td><td>
 <select name="files_in_rev" onchange="window.location=this.value">
 
 <option value="/p/google-api-php-client/source/browse/trunk/src/contrib/apiBooksService.php?r=432&amp;spec=svn445"
 selected="selected"
 >.../src/contrib/apiBooksService.php</option>
 
 <option value="/p/google-api-php-client/source/browse/trunk/src/contrib/apiCustomsearchService.php?r=432&amp;spec=svn445"
 
 >...ntrib/apiCustomsearchService.php</option>
 
 <option value="/p/google-api-php-client/source/browse/trunk/src/contrib/apiLatitudeService.php?r=432&amp;spec=svn445"
 
 >...c/contrib/apiLatitudeService.php</option>
 
 <option value="/p/google-api-php-client/source/browse/trunk/src/contrib/apiModeratorService.php?r=432&amp;spec=svn445"
 
 >.../contrib/apiModeratorService.php</option>
 
 <option value="/p/google-api-php-client/source/browse/trunk/src/contrib/apiPredictionService.php?r=432&amp;spec=svn445"
 
 >...contrib/apiPredictionService.php</option>
 
 </select>
 </td></tr></table>
 
 
 



 
 </div>
 
 
 </div>
 <div class="round1"></div>
 <div class="round2"></div>
 <div class="round4"></div>
 </div>
 <div class="pmeta_bubble_bg" style="border:1px solid white">
 <div class="round4"></div>
 <div class="round2"></div>
 <div class="round1"></div>
 <div class="box-inner">
 <div id="older_bubble">
 <p>Older revisions</p>
 
 
 <div class="closed" style="margin-bottom:3px;" >
 <img class="ifClosed" onclick="_toggleHidden(this)" src="http://www.gstatic.com/codesite/ph/images/plus.gif" >
 <img class="ifOpened" onclick="_toggleHidden(this)" src="http://www.gstatic.com/codesite/ph/images/minus.gif" >
 <a href="/p/google-api-php-client/source/detail?spec=svn445&r=292">r292</a>
 by chir...@google.com
 on Dec 15, 2011
 &nbsp; <a href="/p/google-api-php-client/source/diff?spec=svn445&r=292&amp;format=side&amp;path=/trunk/src/contrib/apiBooksService.php&amp;old_path=/trunk/src/contrib/apiBooksService.php&amp;old=268">Diff</a>
 <br>
 <pre class="ifOpened">Regenerate all api services to include
the following changes:
- Allow $optParams to be passed into
all methods.
- Generate sub resources (required by
...</pre>
 </div>
 
 <div class="closed" style="margin-bottom:3px;" >
 <img class="ifClosed" onclick="_toggleHidden(this)" src="http://www.gstatic.com/codesite/ph/images/plus.gif" >
 <img class="ifOpened" onclick="_toggleHidden(this)" src="http://www.gstatic.com/codesite/ph/images/minus.gif" >
 <a href="/p/google-api-php-client/source/detail?spec=svn445&r=268">r268</a>
 by chir...@google.com
 on Nov 17, 2011
 &nbsp; <a href="/p/google-api-php-client/source/diff?spec=svn445&r=268&amp;format=side&amp;path=/trunk/src/contrib/apiBooksService.php&amp;old_path=/trunk/src/contrib/apiBooksService.php&amp;old=248">Diff</a>
 <br>
 <pre class="ifOpened">Add the Calendar V3 API.
Update the generated service classes
to reflect new optional parameters.
Clean up some php warnings.
</pre>
 </div>
 
 <div class="closed" style="margin-bottom:3px;" >
 <img class="ifClosed" onclick="_toggleHidden(this)" src="http://www.gstatic.com/codesite/ph/images/plus.gif" >
 <img class="ifOpened" onclick="_toggleHidden(this)" src="http://www.gstatic.com/codesite/ph/images/minus.gif" >
 <a href="/p/google-api-php-client/source/detail?spec=svn445&r=248">r248</a>
 by chir...@google.com
 on Oct 26, 2011
 &nbsp; <a href="/p/google-api-php-client/source/diff?spec=svn445&r=248&amp;format=side&amp;path=/trunk/src/contrib/apiBooksService.php&amp;old_path=/trunk/src/contrib/apiBooksService.php&amp;old=240">Diff</a>
 <br>
 <pre class="ifOpened">Add support for webfonts, orkut, and
freebase.
Update the generated methods to call
assertIsArray to validate that a given
parameter is an array.
</pre>
 </div>
 
 
 <a href="/p/google-api-php-client/source/list?path=/trunk/src/contrib/apiBooksService.php&start=432">All revisions of this file</a>
 </div>
 </div>
 <div class="round1"></div>
 <div class="round2"></div>
 <div class="round4"></div>
 </div>
 
 <div class="pmeta_bubble_bg" style="border:1px solid white">
 <div class="round4"></div>
 <div class="round2"></div>
 <div class="round1"></div>
 <div class="box-inner">
 <div id="fileinfo_bubble">
 <p>File info</p>
 
 <div>Size: 100534 bytes,
 2742 lines</div>
 
 <div><a href="//google-api-php-client.googlecode.com/svn/trunk/src/contrib/apiBooksService.php">View raw file</a></div>
 </div>
 
 </div>
 <div class="round1"></div>
 <div class="round2"></div>
 <div class="round4"></div>
 </div>
 </div>
 </div>


</div>

</div>
</div>

<script src="http://www.gstatic.com/codesite/ph/16696656050152905794/js/prettify/prettify.js"></script>
<script type="text/javascript">prettyPrint();</script>


<script src="http://www.gstatic.com/codesite/ph/16696656050152905794/js/source_file_scripts.js"></script>

 <script type="text/javascript" src="https://kibbles.googlecode.com/files/kibbles-1.3.3.comp.js"></script>
 <script type="text/javascript">
 var lastStop = null;
 var initialized = false;
 
 function updateCursor(next, prev) {
 if (prev && prev.element) {
 prev.element.className = 'cursor_stop cursor_hidden';
 }
 if (next && next.element) {
 next.element.className = 'cursor_stop cursor';
 lastStop = next.index;
 }
 }
 
 function pubRevealed(data) {
 updateCursorForCell(data.cellId, 'cursor_stop cursor_hidden');
 if (initialized) {
 reloadCursors();
 }
 }
 
 function draftRevealed(data) {
 updateCursorForCell(data.cellId, 'cursor_stop cursor_hidden');
 if (initialized) {
 reloadCursors();
 }
 }
 
 function draftDestroyed(data) {
 updateCursorForCell(data.cellId, 'nocursor');
 if (initialized) {
 reloadCursors();
 }
 }
 function reloadCursors() {
 kibbles.skipper.reset();
 loadCursors();
 if (lastStop != null) {
 kibbles.skipper.setCurrentStop(lastStop);
 }
 }
 // possibly the simplest way to insert any newly added comments
 // is to update the class of the corresponding cursor row,
 // then refresh the entire list of rows.
 function updateCursorForCell(cellId, className) {
 var cell = document.getElementById(cellId);
 // we have to go two rows back to find the cursor location
 var row = getPreviousElement(cell.parentNode);
 row.className = className;
 }
 // returns the previous element, ignores text nodes.
 function getPreviousElement(e) {
 var element = e.previousSibling;
 if (element.nodeType == 3) {
 element = element.previousSibling;
 }
 if (element && element.tagName) {
 return element;
 }
 }
 function loadCursors() {
 // register our elements with skipper
 var elements = CR_getElements('*', 'cursor_stop');
 var len = elements.length;
 for (var i = 0; i < len; i++) {
 var element = elements[i]; 
 element.className = 'cursor_stop cursor_hidden';
 kibbles.skipper.append(element);
 }
 }
 function toggleComments() {
 CR_toggleCommentDisplay();
 reloadCursors();
 }
 function keysOnLoadHandler() {
 // setup skipper
 kibbles.skipper.addStopListener(
 kibbles.skipper.LISTENER_TYPE.PRE, updateCursor);
 // Set the 'offset' option to return the middle of the client area
 // an option can be a static value, or a callback
 kibbles.skipper.setOption('padding_top', 50);
 // Set the 'offset' option to return the middle of the client area
 // an option can be a static value, or a callback
 kibbles.skipper.setOption('padding_bottom', 100);
 // Register our keys
 kibbles.skipper.addFwdKey("n");
 kibbles.skipper.addRevKey("p");
 kibbles.keys.addKeyPressListener(
 'u', function() { window.location = detail_url; });
 kibbles.keys.addKeyPressListener(
 'r', function() { window.location = detail_url + '#publish'; });
 
 kibbles.keys.addKeyPressListener('j', gotoNextPage);
 kibbles.keys.addKeyPressListener('k', gotoPreviousPage);
 
 
 }
 </script>
<script src="http://www.gstatic.com/codesite/ph/16696656050152905794/js/code_review_scripts.js"></script>
<script type="text/javascript">
 function showPublishInstructions() {
 var element = document.getElementById('review_instr');
 if (element) {
 element.className = 'opened';
 }
 }
 var codereviews;
 function revsOnLoadHandler() {
 // register our source container with the commenting code
 var paths = {'svn445': '/trunk/src/contrib/apiBooksService.php'}
 codereviews = CR_controller.setup(
 {"profileUrl":["/u/104358089135791898513/"],"token":"30nLN8RGTALbZO0AUCq077ltq0o:1341000486596","assetHostPath":"http://www.gstatic.com/codesite/ph","domainName":null,"assetVersionPath":"http://www.gstatic.com/codesite/ph/16696656050152905794","projectHomeUrl":"/p/google-api-php-client","relativeBaseUrl":"","projectName":"google-api-php-client","loggedInUserEmail":"enzopecorari@gmail.com"}, '', 'svn445', paths,
 CR_BrowseIntegrationFactory);
 
 codereviews.registerActivityListener(CR_ActivityType.REVEAL_DRAFT_PLATE, showPublishInstructions);
 
 codereviews.registerActivityListener(CR_ActivityType.REVEAL_PUB_PLATE, pubRevealed);
 codereviews.registerActivityListener(CR_ActivityType.REVEAL_DRAFT_PLATE, draftRevealed);
 codereviews.registerActivityListener(CR_ActivityType.DISCARD_DRAFT_COMMENT, draftDestroyed);
 
 
 
 
 
 
 
 var initialized = true;
 reloadCursors();
 }
 window.onload = function() {keysOnLoadHandler(); revsOnLoadHandler();};

</script>
<script type="text/javascript" src="http://www.gstatic.com/codesite/ph/16696656050152905794/js/dit_scripts.js"></script>

 
 
 
 <script type="text/javascript" src="http://www.gstatic.com/codesite/ph/16696656050152905794/js/ph_core.js"></script>
 
 
 
 
 <script type="text/javascript" src="/js/codesite_product_dictionary_ph.pack.04102009.js"></script>
</div> 

<div id="footer" dir="ltr">
 <div class="text">
 <a href="/projecthosting/terms.html">Terms</a> -
 <a href="http://www.google.com/privacy.html">Privacy</a> -
 <a href="/p/support/">Project Hosting Help</a>
 </div>
</div>
 <div class="hostedBy" style="margin-top: -20px;">
 <span style="vertical-align: top;">Powered by <a href="http://code.google.com/projecthosting/">Google Project Hosting</a></span>
 </div>

 
 


 
 </body>
</html>

