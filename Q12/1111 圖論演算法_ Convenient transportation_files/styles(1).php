/**************************************
 * THEME NAME: e-tutor
 *
 * Files included in this sheet:
 *
 *   e-tutor/user_styles.css
 **************************************/

/***** e-tutor/user_styles.css start *****/

@import url(https://fonts.googleapis.com/earlyaccess/cwtexyen.css);
body {
  font-size: 100%;
  color: #333333;
  font-family: verdana, arial, helvetica, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #FFFFFF;
  /*background-color: #b3c9e3;*/
  
  /*background:url(pix/bg2019.jpg) top no-repeat;*/
}
div#page {
  margin: 0 0;
 
  /*padding-top: 2px;*/
/*width: 1160px;*/
width:100%;
}
div.clearer {
  clear: both;
}
a:link,
a:visited {
  color: #697076;
  text-decoration: none;
}
a:hover {
  color: #496578;
  text-decoration: underline;
}
hr {
  color: #6a91a6;
  background-color: #6a91a6;
  border-style: none;
}
span.arrow {
  font-family: Arial,Helvetica,Courier,sans-serif;
  font-size: 80%;
}
p.arrow_button input {
  font-family: Arial,Helvetica,Courier,sans-serif;
  font-size: 80%;
}
table.generaltable {
  background-color: #EEEEEE;
}
img.resize {
  width: 1em;
  height: 1em;
}
p.helplink {
  margin: 0.5em 0;
}
h1.headermain {

  color: #677177;
  font-family: Verdana,Helvetica,Courier,sans-serif;
  margin: 0 0 10px 0;
  font-size: 150%;
}

h2.main {
  background-image: url(pix/header.png);
  background-repeat: repeat-x;
  background-position: center top;
  padding: 5px 5px 6px;
  color: #2a3445;
  font-size: 120%;
  border-right-width: 1px;
  border-left-width: 1px;
  border-right-style: solid;
  border-left-style: solid;
  border-right-color: #c5d2d8;
  border-left-color: #c5d2d8;
}
h2.headingblock {
  background-image: url(pix/header.png);
  background-repeat: repeat-x;
  background-position: center top;
  padding: 5px 5px 6px;
  color: #0a285b;
  font-size: 100%;
  border-right-width: 1px;
  border-left-width: 1px;
  border-style: none solid;
  border-right-color: #c5d2d8;
  border-left-color: #c5d2d8;
}
div.loginbox {
  border: 1px solid #94a3ac;
}
.loginbox.twocolumns .loginpanel {
  border-right: 1px solid #c5d2d8;
}
div.noticebox {
  background-color: #EEEEEE;
  border-width: 1px;
  border-style: solid;
  border-color: #FFFFFF #DDDDDD #DDDDDD #FFFFFF;
}
div#notice.generalbox {
  border-style: none;
}
div.generalbox {
  border: 1px solid #9aa6ae;
}
div.generalbox.ccbox {
  border-style: none;
}
div.ccbox {
  border-style: none;
}
table.generalbox {
  border-top-width: 1px;
  border-style: solid none none;
  border-top-color: #DDDDDD;
}
table.generaltable th.header {
  padding-bottom: 10px;
  border-width: 1px;
  border-style: solid;
  border-color: #eee #98a5ad #98a5ad #98a5ad;
  color:#26516c;
}
table.generaltable td.cell {
  white-space: normal;
  border-color: #98a5ad;
}
div.informationbox {
  background-color: #f1ece6;
  border: 1px solid;
  border-color: #FFFFFF #98a5ad #98a5ad #FFFFFF;
}
table.userinfobox {
  border: 1px solid #98a5ad;
  margin: 0 auto 5px;
}
div.errorbox {
  background-color: #3f425d;
  border-color: #604f4f;
}
table.environmenttable span.error {
  background-color: #3f425d;
  color: inherit;
}
p.copyright {
  text-align: center;
}
body#admin-index div.adminwarning {
  border-style: none;
  margin: 20px 30px;
}
body#admin-index .c1 {
  vertical-align: top;
}
td.cell {
  vertical-align: top;
}
div.headermenu {
  margin: 0;
  padding: 3px;
  /*padding-top:40px;*/
/*padding-left:40px;  */
  font-size: 0.75em;
}
div.headermenu div.logininfo {
  margin-bottom: 0.2em;
	margin-top: 0.7em;
	margin-right: 0.4em;
  }
div.breadcrumb {

	width:1160px;
  font-size: 0.8em;
  padding-left: 0.3em;
  text-ailgn:left;
}
div.navbar div.navbutton form {

  float: left;
}
div.navbar div.navbutton {
  margin-top: 3px;
}
div.navbar {
  padding: 13px 0px 0px 0;
  margin: 5px 0 0 0;
  clear: both;
  background-image:;
  background-repeat: repeat-x;
  background-position: center bottom;
  height:34px;
  border-right-width: 0px;
  border-left-width: 0px;
  border-style: none solid;
  border-right-color: #cccccc;
  border-left-color: #cccccc;
}
div#footer {
  font-size: 0.65em;
  padding: 0;
  margin: 5px auto;
  border-style: none;
}
div.internea {
  margin: -25px 0px 0 0;
  height:25px;
  width:25px;
 	float:right;
   background-image: url(pix/bg/InterneaIsotipo.png);
  background-repeat: no-repeat;
  background-position: center bottom;
  
}
div#content {
  padding: 0;
  font-size: 0.8em;/*0.75*/
  line-height: 1.6em;
  clear: both;
  border-top-style: none;
  border-bottom-style: none;
}
ul.section li {
  margin: 0.2em 0;
}
div.sideblock div.content * {
  text-align: left;
}
div.calendar-controls a.next {
  text-align: right;
}
div.block_login div.content div.c1 {
  text-align: right;
  margin: 0.3em 0;
}
div.block_login div.content div.btn input {
  text-align: center;
}
div.block_adminblock {
  min-width: 210px;
}
div.sideblock ul.list span.c1 {
  padding-left: 0;
}
div.sideblock div.title h2 {
  font-size: 1em;
  line-height: 1.1em;
  color:#283751;
 /* height:22px;*/
}
div.sideblock div.header {
  padding: 0;
  border-style: none;
}
div.sideblock div.content {
  padding: 0.3em 0.3em 0.5em;
  border-style: none;
  /*background-color: #c4cddc;*/
  /*background-color: #bbe2e9;*/
  background-color: #fff4f9;
}
/*div.sideblock div.content a {
  color: #000000;
  background-color: #f1ece6;
}*/
 
div.sideblock table.minicalendar td.day {
  text-align: center;
  font-size: 0.9em;
}
div.sideblock table.minicalendar {
  border-style: none;
  margin-bottom: 0;
}
body#admin-lang h2.main {
  font-size: 1em;
  text-align: left;
}
body#course-index table.generalbox {
  background-color: #EEEEEE;
  border-width: 1px;
  border-style: solid;
  border-color: #FFFFFF #DDDDDD #DDDDDD #FFFFFF;
}
table.minicalendar th {
  padding: 0px 1px;
}
table.minicalendar td.today {
  line-height: 1.4em;
  border: 2px solid #8c97a7;
}
div.sideblock table.minicalendar tr.weekdays {
  font-size: 0.8em;
}
div.coursebox {
  border-style: solid;
  border-color: #728f9f;
}

div.courseboxcontent {
  background-color: #EEEEEE;
  border-width: 1px;
  border-style: solid;
  border-color: #FFFFFF #DDDDDD #DDDDDD #FFFFFF;
}
td.courseboxcontent {
  background-color: #EEEEEE;
  border-width: 1px;
  border-style: solid;
  border-color: #FFFFFF #DDDDDD #DDDDDD #FFFFFF;
}
ul.tabrow td {
  border: 1px solid #97ab8b;
}
ul.tabrow td.selected {
  border-top-width: 1px;
  border-right-width: 1px;
  border-left-width: 1px;
  border-style: solid solid none;
  border-top-color: #88DD55;
  border-right-color: #88DD55;
  border-left-color: #88DD55;
}
div.sideblock div.content div.message {
  text-align: left;
}
.sideblock .header .hide-show-image {
  margin-top: 0;
}
table#calendar td.event_global {
  background-color: #eef3ed;
  border-color: #d8d8d8;
}
table.minicalendar td.event_global {
  background-color: #eef3ed;
  border-color: #d8d8d8;
}
div.block_calendar_month td.event_global {
  background-color: #eef3ed;
  border-color: #d8d8d8;
}
table#calendar td.event_course {
  background-color: #eef3ed;
  border-color: #d8d8d8;
}
table.minicalendar td.event_course {
  background-color: #eef3ed;
  border-color: #d8d8d8;
}
div.block_calendar_month td.event_course {
  background-color: #eef3ed;
  border-color: #d8d8d8;
}
table#calendar td.event_group {
  background-color: #eef3ed;
  border-color: #d8d8d8;
}
table.minicalendar td.event_group {
  background-color: #eef3ed;
  border-color: #d8d8d8;
}
div.block_calendar_month td.event_group {
  background-color: #eef3ed;
  border-color: #d8d8d8;
}
table#calendar td.event_user {
  background-color: #eef3ed;
  border-color: #d8d8d8;
}
table.minicalendar td.event_user {
  background-color: #eef3ed;
  border-color: #d8d8d8;
}
div.block_calendar_month td.event_user {
  background-color: #eef3ed;
  border-color: #d8d8d8;
}
div.block_calendar_month div.filters table {
  background-color: inherit;
}
table#calendar td.maincalendar div.filters table {
  background-color: inherit;
}
table#calendar td.sidecalendar div.filters table {
  background-color: inherit;
}
h3.eventskey {
  font-size: 100%;
}
div.block_calendar_month div.content {
  padding: 0;
}
div.sideblock div.calendar-controls span.current {
  text-align: center;
}
table#calendar td.sidecalendar div.sideblock {
  border-color: #94a0a8;
  background:#e9e9f4;
}
table#calendar td.maincalendar {
  border-color: #95a2aa;
}
table#calendar td.nottoday {
  border-color: #95a2aa;
}
table.minicalendar td.today {
  border-color: #95a2aa;
}
table.minicalendar td.event_user {
  border: 1px solid  #ccc !important;
}
table.minicalendar td.event_group {
  border: 1px solid  #ccc !important;
}
table.minicalendar td.event_course {
  border: 1px solid  #ccc !important;
}
table.minicalendar td.event_global {
  border: 1px solid  #ccc !important;
}
table#calendar td.event_user {
  border: 1px solid  #ccc !important;
}
table#calendar td.event_group {
  border: 1px solid  #ccc !important;
}
table#calendar td.event_course {
  border: 1px solid  #ccc !important;
}
table#calendar td.event_global {
  border: 1px solid  #ccc !important;
}
body.admin table.generaltable {
  width: 100%;
}
body.admin div.generalboxcontent {
  background-color: inherit;
  border-style: none;
}
body.admin table.generalbox {
  background-color: inherit;
  border-style: none;
}
body.admin td.generalboxcontent {
  background-color: inherit;
  border-style: none;
}
body#course-view tr.section td.side {
  border-style: none;
}
body#course-view tr.current td.side {
  background: #6a7f8b;
}
body#course-view tr.section td.content {
  padding-bottom: 1.5em;
  border-style: none;
}
div.que {
  border: 1px solid #909fa8;
}
td.sitetopiccontent {
  border-style: none;
}
body#site-index td.categoryboxcontent {
  border-style: none;
}
div.sideblock span.icon {
  display: block;
  float: left;
  margin-right: 0.3em;
}
div.sideblock ul.list li {
  clear: left;
  padding-left: 15px;
}
div.block_rss_client ul.list li {
  padding-left: 0;
}
div.block_messages div.content {
  font-size: inherit;
}
div.block_messages div.content div.info {
  text-align: left;
}
div.sideblock div.column.c0 {
  margin-left: -19px;
}
td.categoryboxcontent {
  background-color: #EEEEEE;
  border-width: 1px;
  border-style: solid;
  border-color: #FFFFFF #DDDDDD #DDDDDD #FFFFFF;
}
body#admin-roles-manage td.generalboxcontent table td {
  padding-left: 0.5em;
  padding-right: 0.5em;
}
body#admin-roles-override td.cell.c1 {
  padding-top: 0.5em;
}
body#admin-roles-assign td.cell.c3 {
  padding-top: 0.5em;
}
body#admin-roles-assign td.cell.c1 {
  padding-top: 0.5em;
}
body#admin-roles-override td.capcurrent {
  background-color: #eeeeee;
  border: 1px solid #cccccc;
}
body#admin-roles-manage td.capdefault {
  background-color: #dddddd;
  border: 1px solid #cecece;
}
body#admin-roles-manage tr.rolecap {
  border-style: none;
  border-bottom: 1px solid #cecece;
}
body#admin-roles-override tr.rolecap {
  border-style: none;
  border-bottom: 1px solid #cecece;
}
body#admin-roles-manage td.rolecap span.cap-desc span.cap-name {
  color: #888;
}
body#admin-roles-override td.rolecap span.cap-desc span.cap-name {
  color: #888;
}
div.breadcrumb span.sep {
  font-family: arial, sans-serif;
  color: #707c8f;
}
div.calendar-controls span.previous {
  font-family: arial, sans-serif;
}
div.calendar-controls span.next {
  font-family: arial, sans-serif;
  text-align: right;
}
div.sideblock div.header div.commands {
  height: 16px;
  background-color: #ffffff;
}
form#adminsettings fieldset {
  margin-top: 1em;
  padding: 0;
  background-color: inherit;
}
fieldset.adminsettings span.form-shortname {
  color: #AAAAAA;
  font-style: italic;
  font-size: 90%;
}
form#adminsettings span.form-shortname {
  color: #AAAAAA;
  font-style: italic;
  font-size: 90%;
}
form#adminsettings span.defaultinfo {
  color: #AAAAAA;
  font-style: italic;
  font-size: 90%;
  margin-left: 1.5em;
  padding-bottom: 0.2em;
}
fieldset.adminsettings {
  background-color: #EEEEEE;
  border-width: 1px;
  border-style: solid;
  border-color: #FFFFFF #DDDDDD #DDDDDD #FFFFFF;
}
form.mform div.textarea textarea {
  width: 35em;
}
form#adminsettings div.form-item {
background: url(pix/small_bg_gradient.png) repeat-x 0 bottom;
  border-top: 1px solid #98a2a8;
}

form#adminsettings .form-label {
  padding-right: 0.3em;
  border-right: 1px solid #98a2a8;
}
form#adminsettings div.form-htmlarea {
  width: 600px;
}
body#admin-lang div.generalbox {
  border-style: none;
}
body#admin-lang table.translator {
  border-color: #98a2a8;
}
body#admin-langimport div.generalbox {
  border-style: none;
}
div.htmlarea iframe {
 
}
div#header-home {
  position: relative;
  margin: 0;
 padding-top: 10px; 
}
div#header {
  position: relative;
  margin: 0;
}
td#left-column {
  padding-top: 10px;
   /*background-color: #EEEEEE;*/
  
}

td#right-column {
  padding-top: 10px;
  padding-left: 5px;
}
table#layout-table {
  margin-top: 0;
  border-collapse: collapse;
  border-spacing: 0;
}
table#layout-table td#middle-column {
  padding: 10px 0 0 0;
}
div.sitetopic {
  border-style: none;
}
div.categorybox {
 /* border-style: solid;
  border-width: 1px;
  border-color: #EEEEEE;*/
}
div.mdescr div.images {
  text-align: center;
}
fieldset {
  border-style: none;
}
body#admin-auth td#middle-column {
  padding-bottom: 10px;
}
div.sideblock h2 {
  color: #333;
}
table.cal_popup_bg {
  background-color: #ffffff;
  border-color: #7a8e99;
}
div.homelink {
  margin: 2px 0 0;
  padding: 0;
}
div.logininfo {
  white-space: nowrap;
}
div.bt div {
  font-size: 1px;
  line-height: 1%;
  height: 0;
  background-repeat: no-repeat;
  background-position: 0 0;
  background-color: transparent;
}
div.bt {
  background-repeat: no-repeat;
  background-position: 100% 0;
  text-align: left;
}
div.bb div {
  font-size: 1px;
  line-height: 1%;
  height: 0;
  background-repeat: no-repeat;
  background-position: 0 0;
  background-color: transparent;
}
div.bb {
  background-repeat: no-repeat;
  background-position: 100% 0;
  text-align: left;
}
div.i1 {
  background-repeat: repeat-y;
  background-position: 0 0;
  background-color: transparent;
}
div.i2 {
  background-repeat: repeat-y;
  background-position: 100% 0;
  background-color: transparent;
}
div.sideblock div.bt div {
  /*background-image: url(pix/box.png);*/
  height: 12px;
  left: -13px;
  position: relative;
  width: 13px;
}
div.sideblock div.bt {
  /*background-image: url(pix/box.png);*/
  margin: 0 0 0 13px;
  height: 12px;
  background-color: transparent;
}
div.sideblock div.header div.bt div {
  /*background-image: url(pix/box.png);*/
  background-repeat: no-repeat;
  background-position: 0 0;
  background-color: transparent;
  height: 12px;
  left: -13px;
  position: relative;
  width: 13px;
}
div.sideblock div.header div.bt {
  /*background-image: url(pix/box.png);*/
  background-repeat: no-repeat;
  background-position: 100% 0;
  margin: 0 0 0 13px;
  height: 12px;
  background-color: transparent;
}
div.sideblock div.header div.i1 {
  /*background-image: url(pix/borders.png);*/
  background-repeat: repeat-y;
  background-position: 0 0;
  background-color: transparent;
  padding: 0 0 0 12px;
}
div.sideblock div.header div.i2 {
  /*background-image: url(pix/borders.png);*/
  background-repeat: repeat-y;
  background-attachment: scroll;
  background-position: 100% 0;
  background-color: transparent;
  padding: 0 12px 0 0;
}
div.sideblock div.header div.i3 {
  padding: 0 0 5px;
  background-color: #ffffff;
  border-top-width: 1px;
  border-right-width: 0;
  border-bottom-width: 1px;
  border-style: solid none;
  border-top-color: #ffffff;
  border-bottom-color: #ffffff;
}
div.sideblock div.i1 {
  /*background-image: url(pix/beige_borders.png);*/
  background-repeat: repeat-y;
  background-position: 0 0;
  background-color: transparent;
  padding: 0 0 0 12px;
}
div.sideblock div.i2 {
  /*background-image: url(pix/beige_borders.png);*/
  background-repeat: repeat-y;
  background-attachment: scroll;
  background-position: 100% 0;
  background-color: transparent;
  padding: 0 12px 0 0;
}
div.sideblock div.i3 {
  background-color: #c9cdd4;
  padding: 0;
  border-style: none;
}
div.sideblock div.bb div {
  /*background-image: url(pix/beige_box.png);*/
  background-repeat: no-repeat;
  background-position: 0 100%;
  background-color: transparent;
  height: 12px;
  left: -13px;
  position: relative;
  width: 13px;
}
div.sideblock div.bb {
  /*background-image: url(pix/beige_box.png);*/
  background-repeat: no-repeat;
  background-position: 100% 100%;
  margin: 0 0 0 13px;
  height: 12px;
  background-color: transparent;
}
td#left-column div.hidden div.header {
  border-bottom-style: none;
}
td#right-column div.hidden div.header {
  border-bottom-style: none;
}
td#middle-column div.bt div {
  /*background-image: url(pix/box.png);*/
  background-repeat: no-repeat;
  background-position: 0 0;
  background-color: transparent;
  height: 12px;
  left: -13px;
  position: relative;
  width: 13px;
}
td#middle-column div.bt {
  /*background-image: url(pix/box.png);*/
  background-repeat: no-repeat;
  background-position: 100% 0;
  margin: 0 0 0 13px;
  height: 12px;
  background-color: transparent;
}
td#middle-column div.i1 {
  /*background-image: url(pix/borders.png);*/
  background-repeat: repeat-y;
  background-position: 0 0;
  background-color: transparent;
  padding: 0 0 0 12px;
}
td#middle-column div.i2 {
  /*background-image: url(pix/borders.png);*/
  background-repeat: repeat-y;
  background-attachment: scroll;
  background-position: 100% 0;
  background-color: transparent;
  padding: 0 12px 0 0;
}
td#middle-column div.i3 {
  background-color: #FFFFFF;
  padding: 0 10px;

}
td#middle-column div.bb div {
  /*background-image: url(pix/box.png);*/
  background-repeat: no-repeat;
  background-position: 0 100%;
  background-color: transparent;
  height: 12px;
  left: -13px;
  position: relative;
  width: 13px;
}
td#middle-column div.bb {
  /*background-image: url(pix/box.png);*/
  background-repeat: no-repeat;
  background-position: 100% 100%;
  margin: 0 0 0 13px;
  height: 12px;
  background-color: transparent;
}
td#middle-column div.bt div {
  z-index: 10;
}
div#footer div.bt div {
  background-image: ;
  background-repeat: no-repeat;
  background-position: 0 0;
  background-color: transparent;
  height: 12px;
  left: -13px;
  position: relative;
  width: 13px;
}
div#footer div.bt {
  background-image: ;
  background-repeat: no-repeat;
  background-position: 100% 0;
  margin: 0 0 0 13px;
  height: 12px;
  background-color: transparent;
  text-align: left;
}
div#footer div.i1 {
  background-image: ;
  background-repeat: repeat-y;
  background-position: 0 0;
  background-color: transparent;
  padding: 0 0 0 12px;
}
div#footer div.i2 {
  background-image:;
  background-repeat: repeat-y;
  background-attachment: scroll;
  background-position: 100% 0;
  background-color: transparent;
  padding: 0 12px 0 0;
}
div#footer div.i3 {
 /* background-color: #f1ece6;*/
 background-image: url(pix/pie.jpg);
  background-repeat: no-repeat;
  height:120px;
  background-position: 100% 100%;
  background-color: #dcdcdc;
  padding: 0 10px;
  border-width: 1px 0;
  border-style: solid;
  border-color: #dcdcdc;
}
div#footer div.bb div {
  background-image: ;
  background-repeat: no-repeat;
  background-position: 0 100%;
  background-color: transparent;
  height: 12px;
  left: -13px;
  position: relative;
  width: 13px;
}
div#footer div.bb {
  background-image:;
  background-repeat: no-repeat;
  background-position: 100% 100%;
  margin: 0 0 0 13px;
  height: 12px;
  background-color: transparent;
  text-align: left;
}
div#header div.bt div {
  background-image: ;
  background-repeat: no-repeat;
  background-position: 0 0;
  background-color: transparent;
  height: 12px;
  left: -13px;
  position: relative;
  width: 13px;
}
div#header div.bt {
  background-image: ;
  background-repeat: no-repeat;
  background-position: 100% 0;
  margin: 0 0 0 13px;
  height: 12px;
  background-color: transparent;
}
div#header div.i1 {
  background-image:;
  background-repeat: repeat-y;
  background-position: 0 0;
  background-color: transparent;
  padding: 0 0 0 12px;
}
div#header div.i2 {
  background-image: ;
  background-repeat: repeat-y;
  background-attachment: scroll;
  background-position: 100% 0;
  background-color: transparent;
  padding: 0 12px 0 0;
}
div#header div.i3 {
  background-image: url(pix/top2.jpg);
  background-repeat: no-repeat;
  background-position: 100% 100%;
  background-color: #dcdcdc;
	background-size:cover;
  padding: 50px 5px 10px 5px; /*22*/
  border-top-width: 1px;
  border-bottom-width: 1px;
  border-style: solid none;
  border-top-color: #dcdcdc;
  border-bottom-color: #dcdcdc;
}



div#header div.bb div {
  background-image: ;
  background-repeat: no-repeat;
  background-position: 0 100%;
  background-color: transparent;
  height: 12px;
  left: -13px;
  position: relative;
  width: 13px;
}
div#header div.bb {
  background-image:;
  background-repeat: no-repeat;
  background-position: 100% 100%;
  margin: 0 0 0 13px;
  height: 12px;
  background-color: transparent;
}


/*div#header-home {
	width:992px;
	margin:0px auto;
	height:68px;
	background:url(pix/top.png) top repeat-x;
	color:#FFFFFF;
}*/
.headermenu {
	padding:10px 25px 0px 0px;
}
#logoscyt {
	width:1160px;
	background:url(pix/banner2019_2.jpg) right no-repeat;
	height:215px;
	/*padding-left:30px;*/
	/*padding-top:68px;*/	
}

#logomeducacion {
	width:1160px;
	background:url(pix/banner2019_2.jpg) top right no-repeat;
	background-size:cover;
	height:215px;	
	padding-left:0px;
	/*padding-top:68px;*/	
}
#logoscyt2 {
	font-family: 'cwTeXYen', sans-serif;
	color:#f48823;
	font-size:18px;
width:1160px;
	height:20px;
	/*padding-left:30px;*/
	/*padding-top:68px;*/	
}

#logomeducacion2 {

	height:20px;	
	padding-left:0px;
	/*padding-top:68px;*/	
}


div#header-home div.bt div {
 /* background-image: url(pix/beige_box.png);
  background-repeat: no-repeat;
  background-position: 0 0;
  background-color: transparent;
  height: 12px;
  left: -13px;
  position: relative;
  width: 13px;*/
}
div#header-home div.bt {
/*
margin:0px auto;
	height:68px;
	background:url(pix/top.png) top repeat-x;  
background-image: url(pix/beige_box.png);
  background-repeat: no-repeat;
  background-position: 100% 0;
  margin: 0 0 0 13px;
  height: 12px;*/
  background-color: transparent;*/
}
div#header-home div.i1 {
/*
  background-image: url(pix/borde_izq.png);
  background-repeat: repeat-y;
  background-repeat:no-repeat;
  background-position: 0 0;
  background-color: transparent;
  padding: 0 0 0 12px;*/
}
div#header-home div.i2 {
  /*background-image: url(pix/borde_izq.png);
  background-repeat: repeat-y;
  background-repeat:no-repeat;
  background-attachment: scroll;
  background-position: 100% 0;
  background-color: transparent;
  padding: 0 12px 0 0;*/
}
div#header-home div.i3 {
/*  background-color: #Fff;
  padding: 10px 5px;
  border-top-width: 1px;
  border-bottom-width: 1px;
  border-style: solid none;
  border-top-color: #F1ECE6;
  border-bottom-color: #F1ECE6;*/
}
div#header-home div.i3 div.wraphome {
  background-color: #fff;
  /*border: 1px solid #F1ECE6;
  padding: 0 10px;*/
}
div#header-home div.bb div {
  /*background-image: url(pix/beige_box.png);
  background-repeat: no-repeat;
  background-position: 0 100%;
  background-color: transparent;
  height: 12px;
  left: -13px;
  position: relative;
  width: 13px;*/
}
div#header-home div.bb {
/* background-image: url(pix/beige_box.png);
  background-repeat: no-repeat;
  background-position: 100% 100%;
  margin: 0 0 0 13px;
  height: 12px;
  background-color: transparent;*/
}

body.nolayouttable div#content div.bt div {
  background-image: url(pix/box.png);
  background-repeat: no-repeat;
  background-position: 0 0;
  background-color: transparent;
  height: 12px;
  left: -13px;
  position: relative;
  width: 13px;
}
body.nolayouttable div#content div.bt {
  background-image: url(pix/box.png);
  background-repeat: no-repeat;
  background-position: 100% 0;
  margin: 0 0 0 13px;
  height: 12px;
  background-color: transparent;
}
body.nolayouttable div#content div.i1 {
  background-image: url(pix/borders.png);
  background-repeat: repeat-y;
  background-position: 0 0;
  background-color: transparent;
  padding: 0 0 0 12px;
}
body.nolayouttable div#content div.i2 {
  background-image: url(pix/borders.png);
  background-repeat: repeat-y;
  background-attachment: scroll;
  background-position: 100% 0;
  background-color: transparent;
  padding: 0 12px 0 0;
}
body.nolayouttable div#content div.i3 {
  background-color: #FFFFFF;
  padding: 0 10px;
  border-width: 1px 0;
  border-style: solid;
  border-color: #FFFFFF;
}
body.nolayouttable div#content div.bb div {
  background-image: url(pix/box.png);
  background-repeat: no-repeat;
  background-position: 0 100%;
  background-color: transparent;
  height: 12px;
  left: -13px;
  position: relative;
  width: 13px;
}
body.nolayouttable div#content div.bb {
  background-image: url(pix/box.png);
  background-repeat: no-repeat;
  background-position: 100% 100%;
  margin: 0 0 0 13px;
  height: 12px;
  background-color: transparent;
}
/*info box section start */
div#content div.ccbox div.bt div {
  background-image: url(pix/mask_box.png);
}
div#content div.ccbox div.bt {
  background-image: url(pix/mask_box.png);
}
div#content div.ccbox div.i1 {
  background-image: url(pix/mask_borders_le.png);
}
div#content div.ccbox div.i2 {
  background-image: url(pix/mask_borders_re.png);
}
div#content div.ccbox div.i3 {
  background-color: transparent;
  border-color: transparent;
}
div#content div.ccbox div.bb div {
  background-image: url(pix/mask_box.png);
}
div#content div.ccbox div.bb {
  background-image: url(pix/mask_box.png);
}
div#content div.ccbox div.bt div {
  z-index: 10;
}
div#content div.ccbox {
  background-image: url(pix/info_gradient.png);
  background-repeat: repeat-x;
  background-position: 50% 50%;
  padding: 0;
}
body#course-report div#content {
  padding: 0;
  margin: 10px 0;
}
div.sitetopic{
  /*background-image: url(pix/info_gradient.png);
  background-repeat: repeat-x;
  background-position: 50% 50%;*/
  background-image: none !important; 
  padding: 0;
}
/*info box section end */
td#middle-column tr.section {
  background-image: url(pix/bottom_shadow_to_top.png);
  background-repeat: repeat-x;
  background-position: center bottom;
  border: 1px solid #B3C9E3;
}
td#middle-column tr.separator {
  background-image: none;
  height: 1.5em;
  border-style: none;
}
fieldset.clearfix {
  background-image: url(pix/bottom_shadow_to_top.png);
  background-repeat: repeat-x;
  background-position: center bottom;
}
th.header {
  background-image: url(pix/header.png);
  background-repeat: repeat-x;
  background-position: center bottom;
  background-color: #FFFFFF;
  padding-bottom: 5px;
}
form.mform legend {
  color: #0066ff;
  font-size: 120%;
}
div.coursebox div.summary {
  width: 45%;
}
body#mod-forum-view div.subscription {
  float: none;
  text-align: right;
  white-space: nowrap;
}
table.forumpost tr.header {
  background-image: url(pix/header.png);
  background-repeat: repeat-x;
  background-position: left bottom;
}
/*table.forumpost td.starter {
  background: inherit;
}
table.forumpost td.left {
  background: inherit;
}*/
table.forumpost td.picture {
  background: #fff;
  background:#FFFFFF url(pix/forum_top-left.png) no-repeat scroll 100% 0%;
}
table.forumpost {
  margin-top: 20px;
  border-style: none;
}
table.forumpost tr.header td.topic {
  padding-bottom: 10px;
  border-style: none;
}
table.forumpost div.commands {
 /* background-image: url(pix/bottom_shadow_to_top2.png);
  background-repeat: repeat-x;
  background-position: center bottom;*/
  padding-bottom: 5px;
   font-size: 0.8em;
  /*border-bottom-width: 1px;
  border-bottom-color: #F1ECE6;
   border-top-width: 1px;
   border-top-color: #F1ECE6;
   border-style: solid none;*/
   
}

.forumpost .left {
padding:4px;
text-align:center;
vertical-align:top;
padding-right:20px;
width:35px;
}
.forumpost .topic {
background:#F2F2F2 url(pix/forum_top-right.png) no-repeat scroll 100% 0%;
border:medium none;
padding:10px 15px 10px 5px;
}
table.forumpost .side {
background:#FFFFFF url(pix/forum_bottom-left.png) no-repeat scroll 100% 100%;
}

.forumpost .content {
background:#F2F2F2 url(pix/forum_bottom-right.png) no-repeat scroll 100% 100%;
padding:10px 15px 10px 5px;
}
table.forumheaderlist {
  border-color: #92ACBD;
}
table.forumheaderlist tr.discussion td {
  border-color: #92ACBD;
}
/*td.content {
  border-right-width: 1px;
  border-right-style: solid;
  border-right-color: #F1ECE6;
}*/
div.glossarydisplay table.glossarypost {
  border-color: #449ccc;
}
div.glossarydisplay table.glossarycategoryheader {
  background-color: inherit;
}
div.glossarydisplay div.entrybox {
  border-color: #92acbd;
}
div.glossarydisplay hr {
  color: #F1ECE6;
  background-image: url(pix/bottom_shadow.png);
  background-repeat: repeat-x;
  background-position: left top;
  height: 10px;
  border-style: none;
}
body#mod-glossary-view div.glossarycontrol {
  float: none;
  text-align: right;
  white-space: nowrap;
  margin: 5px 0;
}
table.glossarypost div.concept h3 {
  display: inline;
}
table.glossarypost.continuous div.concept {
  display: inline;
}
div.mwiki div.tabtree {
  margin-top: 10px;
}
table#categoryquestions {
  margin-top: 10px;
}
div.que div.info {
  padding-bottom: 7px;
}
div.que div.ablock {
  padding-bottom: 5px;
  border-bottom-width: 1px;
  border-bottom-style: solid;
  border-top-style: none;
  border-bottom-color: #0066FF;
}
div.que div.qtext {
  background-image: url(pix/bottom_shadow_to_top.png);
  background-repeat: repeat-x;
  background-position: center bottom;
  padding-bottom: 7px;
  margin-bottom: 10px;
  padding-left: 5px;
  border-left-width: 1px;
  border-left-style: solid;
  border-left-color: #449ccc;
}
div.que div.content {
  margin: 5px 0 0;
}
body#course-user div.section {
  border: 1px solid #449ccc;
}
body#course-user div.tabtree {
  margin-bottom: 10px;
}
.tabrow0 div,
.tabrow0 ul {
  top: 2em;
}
a.dimmed:link,
a.dimmed:visited {
  color: #AAAAAA;
}
span.dimmed_text {
  color: #AAAAAA;
}
.dimmed_text {
  color: #AAAAAA;
}
tr.hidden div.summary {
  color: #aaaaaa;
}
tr.hidden td.left {
  color: #AAAAAA;
  
}
tr.section td.left {
  color: #26516c;
font-weight: bold;
  font-size: 1.2em;  
}  

.head .date {
 
font-weight: bold;
  font-size: 0.75em;  
}  

body#message-index div#header,
body#message-discussion div#header,
body#message-history div#header,
body#message-user div#header {
  display: none;
}
body#message-index div#footer,
body#message-discussion div#footer,
body#message-history div#footer {
  display: none;
}
body#message-index div#page,
body#message-user div#page,
body#message-history div#page {
  width: auto;
}
body#message-user div#page {
  margin: 0;
}
body#message-user div#content {
  padding: 0;
}
body#grade-index .grades th.header {
  font-weight: bold;
  font-size: 0.7em;
}
body.grade-edit-scale div.scale_options {
  font-size: 0.7em;
}
body.grade-report-grader table#user-grades tr.groupavg td.cell {
  font-weight: bold;
  color: #006400;
}
body.grade-report-grader table#user-grades {
  width: auto;
}
body.grade-report-grader table#user-grades tr.avg td.cell {
  font-weight: bold;
  color: #00008B;
}
body.grade-report-grader table#user-grades td.cat {
  font-weight: bold;
}
body.grade-report-grader table#user-grades td.course {
  font-weight: bold;
}
#admin-roles-override .capcurrent {
  background-color: #FFFFFF;
  border: 1px solid #cecece;
}
#admin-roles-manage .capdefault {
  background-color: #dddddd;
  border: 1px solid #cecece;
}
#admin-roles-manage .rolecap {
  border: none;
  border-bottom: 1px solid;
  border-bottom-color: #cecece;
}
#admin-roles-override .rolecap {
  border: none;
  border-bottom: 1px solid;
  border-bottom-color: #cecece;
}
#admin-roles-manage .rolecap .cap-desc .cap-name {
  color: #888;
}
#admin-roles-override .rolecap .cap-desc .cap-name {
  color: #888;
}
.plugincompattable {
  font-size: 90%;
  text-align: left;
}
.plugincompattable td.standard {
  font-weight: normal;
}
.plugincompattable td.nonstandard {
  font-weight: bold;
}
.plugincompattable td.missingplugin {
  font-weight: bold;
}
.plugincompattable td.warning {
  font-style: normal;
}
.plugincheckwrapper {
  text-align: center;
}
.plugincompattable td.ok {
  color: #008000;
}
.plugincompattable td.warning {
  color: #DF7800;
}
.plugincompattable td.error {
  color: #DF0000;
}
.tag_cloud .s20 {
  font-size: 1.5em;
  font-weight: bold;
}
.tag_cloud .s19 {
  font-size: 1.5em;
}
.tag_cloud .s18 {
  font-size: 1.4em;
  font-weight: bold;
}
.tag_cloud .s17 {
  font-size: 1.4em;
}
.tag_cloud .s16 {
  font-size: 1.3em;
  font-weight: bold;
}
.tag_cloud .s15 {
  font-size: 1.3em;
}
.tag_cloud .s14 {
  font-size: 1.2em;
  font-weight: bold;
}
.tag_cloud .s13 {
  font-size: 1.2em;
}
.tag_cloud .s12,
.tag_cloud .s11 {
  font-size: 1.1em;
  font-weight: bold;
}
.tag_cloud .s10,
.tag_cloud .s9 {
  font-size: 1.1em;
}
.tag_cloud .s8,
.tag_cloud .s7 {
  font-size: 1em;
  font-weight: bold;
}
.tag_cloud .s6,
.tag_cloud .s5 {
  font-size: 1em;
}
.tag_cloud .s4,
.tag_cloud .s3 {
  font-size: 0.9em;
  font-weight: bold;
}
.tag_cloud .s2,
.tag_cloud .s1 {
  font-size: 0.9em;
}
.username{font-size: 0.8em;}
.password{font-size: 0.8em;}
.block_login .footer{font-size: 0.8em;}
.category{font-size: 1.3em;}


.block_calendar_month .title h2, .block_calendar_upcoming .title h2 {
background:transparent url(pix/bg/calendar.png) no-repeat scroll left bottom;
padding:5pt 0pt 3px 25px;
}

.block_messages  .title h2 {
background:transparent url(pix/bg/message.png) no-repeat scroll left bottom;
padding:5pt 0pt 3px 25px;
}
.block_online_users  .title h2 {
background:transparent url(pix/bg/users.png) no-repeat scroll left bottom;
padding:5pt 0pt 3px 25px;
}
.block_login .title h2 {
background:transparent url(pix/bg/login.png) no-repeat scroll left bottom;
padding:5pt 0pt 3px 25px;
}
.block_blog_menu .title h2,.block_rss_client .title h2{
background:transparent url(pix/bg/blog.png) no-repeat scroll left bottom;
padding:5pt 0pt 3px 25px;
}
.block_search_forums .title h2 {
background:transparent url(pix/bg/buscar.png) no-repeat scroll left bottom;
padding:5pt 0pt 3px 25px;
}
.block_admin .title h2 {
background:transparent url(pix/bg/admin.png) no-repeat scroll left bottom;
padding:5pt 0pt 3px 25px;
}
.block_admin_tree .title h2 {
background:transparent url(pix/bg/admin.png) no-repeat scroll left bottom;
padding:5pt 0pt 3px 25px;
}
.block_activity_modules .title h2 {
background:transparent url(pix/bg/actividades.png) no-repeat scroll left bottom;
padding:5pt 0pt 3px 25px;
}

.block_news_items .title h2 {
background:transparent url(pix/bg/news.png) no-repeat scroll left bottom;
padding:5pt 0pt 3px 25px;
}
p.direccion{
  font-size: 1em;
  text-align: left;
 
}
.footer_title{
 color:#0A285B;
  font-size: 1.2em;
  text-decoration: underline;
  font-weight: bold;
}

.top_button_box{
	position:relative;
	width:139px;
	height:48px;
        cursor:pointer;
	background-color:"#FFF";
	color:#f48823;
	font-weight:800;
	font-size:24px;
	font-family: 'cwTeXYen', sans-serif;

}

.top_button_box2{
	position:relative;
	width:350px;
	height:48px;
        cursor:pointer;
	background-color:"#FFF";
	color:#000;
	font-weight:800;
	font-size:24px;
	font-family: 'cwTeXYen', sans-serif;

}

.top_button_box3{
	padding:5px;
	font-size:24px;
	color:#000;
	font-weight:800;
	font-family: 'cwTeXYen', sans-serif;
}

.top_button_on{
	width:100%;
	height:48px;
	/*background:url(pix/top_button_on.png);*/
	position:absolute; 
	top:0px; 
	left:0px;
	display:none;
	z-index:50;
}

#heading_top{
	background-image: url(pix/top2.jpg);
	background-repeat: no-repeat;
	background-color: #dcdcdc;
	background-size:cover;
	width:973px;
	height:160px;
}

.top_button_sub{
	/*background-image: url(pix/sub_bg.jpg);*/
	background-repeat: no-repeat;
	background-size:cover;
	position:absolute;
	top:48px;
	left:0px;
	max-width:500px;
	min-width:200px;
	background-color: #000;
	 white-space:nowrap;
	z-index:100;
	border:1px #EEE solid;
	display:none;
}

.top_sub_menu{
	background-color:#EEE;

}

.top_sub_menu2{
	color:#999;

}

.Question_bank_button{
	padding-left:30px;
	padding-right:30px;
	padding-bottom:15px;
	padding-top:15px;
	background:rgba(255,192,203,0.2);
	display: inline-block;
	cursor:pointer;
	font-family: 'cwTeXYen', sans-serif;
	
	
}
.c0{
	font-size:28px;
}
.c1{
	font-size:20px;
}
.c36{
	font-size:28px;
}
.c37{
	font-size:28px;
}

.Question_bank_button:hover{

	background:rgba(255,192,203,0.8);

}



/***** e-tutor/user_styles.css end *****/

