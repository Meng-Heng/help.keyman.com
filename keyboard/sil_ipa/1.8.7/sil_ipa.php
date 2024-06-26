<?php
  $pagename = 'IPA (SIL) Keyboard Help';
  $pagetitle = $pagename;
  $pagestyle = <<<END
    #section2 td p a {
      text-decoration: none; color: blue
    }
    #section2 td h1 { font: bold 16pt Tahoma; color: #4444cc }
    #section2 td h2 { font: bold 14pt Tahoma; color: #4444cc }
    #section2 td h3 { font: bold 12pt Tahoma; color: #4444cc }
    #section2 td span.key { font: bold 10pt Verdana; padding: 0 4px; border: solid 1px #aaaaaa; margin: 0 4px; }
END;
  require_once('header.php');
?>

<h2 style='margin-top:0in'>Keyboard Layout</h2>

<p>The keyboard layout is described in terms of an IPA chart
rather than a keyboard. This is because many base characters are typed as a
sequence of a letter followed by one of &lt;, &gt;,  = or | which are
characters used to change a base character to another base character.
Diacritics are typed as sequences of an appropriate key. <span
style='color:blue'>Blue denotes non-IPA sanctioned phonetic symbols (they may
be used by other traditions such as Americanist, Chinese or Russian). </span></p>

<p>As described above (and below), the default for this keyboard is to type a letter followed by a "modifier". 
	For example, this sequence "b>" would produce "ɓ". If you wish to use the opposite sequence (>b) that is 
	possible. Use one or the other of these options. <b>Do not turn <i>Before</i> on with Keyman configuration 
  and off with the RALT hotkeys.</b> </p>

<ol>
	<li><b>Using Keyman Configuration</b>: On Windows, go to <b>Keyman Configuration</b>, 
	select the keyboard, click on <b>Keyboard options</b> and choose <b>Before</b>. 
	You may need to exit Keyman configuration before the default behavior changes. This method will change your default to <i>Before</i> and 
	everytime you switch to this keyboard it will remain using the <i>Before</i> style until you change it back to <i>After</i> style using <b>Keyman configuration</b>.</li>
<li><b>Using RALT hotkeys</b>: It is also possible to switch from <i>After</i> to <i>Before</i> using the RALT HYPHEN sequence (RALT+-). 
	Switch back to <i>After</i> using the RALT EQUAL sequence (RALT+=) (RALT+SHIFT+= on a German keyboard). 
	This method will change to <i>Before</i> during just this session of 
	using the keyboard. After you stop using the keyboard it will return to <i>After</i>.</li>
</ol>

<h3>Consonants</h3>

<p>In this section, if you turned on <b>Before</b> in <b>Keyboard options</b>, you will type the opposite sequence to what is in the below table. For example, this sequence "b>" would produce "ɓ".</p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=0
 style='width:440.35pt;margin-left:3.0pt;border-collapse:collapse'>
 <tr style='page-break-inside:avoid'>
  <td width=63 style='width:46.9pt;border-top:solid windowtext 2.25pt;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><b><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>&nbsp;</span></b></p>
  </td>
  <td width=42 colspan=2 style='width:31.6pt;border:none;border-top:solid windowtext 2.25pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table align=center style='text-align:center'><b><span lang=EN-GB
  style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Bilabial</span></b></p>
  </td>
  <td width=48 colspan=2 style='width:.5in;border-top:solid windowtext 2.25pt;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:none;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table align=center style='text-align:center'><b><span lang=EN-GB
  style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Labio-dental</span></b></p>
  </td>
  <td width=48 colspan=2 style='width:.5in;border-top:solid windowtext 2.25pt;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:none;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table align=center style='text-align:center'><b><span lang=EN-GB
  style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Dental</span></b></p>
  </td>
  <td width=48 colspan=2 style='width:.5in;border-top:solid windowtext 2.25pt;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:none;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table align=center style='text-align:center'><b><span lang=EN-GB
  style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Alveolar</span></b></p>
  </td>
  <td width=48 colspan=2 style='width:.5in;border-top:solid windowtext 2.25pt;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:none;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table align=center style='text-align:center'><b><span lang=EN-GB
  style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Post-alveolar</span></b></p>
  </td>
  <td width=50 colspan=2 style='width:37.85pt;border-top:solid windowtext 2.25pt;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:none;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table align=center style='text-align:center'><b><span lang=EN-GB
  style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Retroflex</span></b></p>
  </td>
  <td width=48 colspan=2 style='width:.5in;border-top:solid windowtext 2.25pt;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:none;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table align=center style='text-align:center'><b><span lang=EN-GB
  style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Palatal</span></b></p>
  </td>
  <td width=48 colspan=2 style='width:.5in;border-top:solid windowtext 2.25pt;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:none;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table align=center style='text-align:center'><b><span lang=EN-GB
  style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Velar</span></b></p>
  </td>
  <td width=48 colspan=2 style='width:.5in;border-top:solid windowtext 2.25pt;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:none;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table align=center style='text-align:center'><b><span lang=EN-GB
  style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Uvular</span></b></p>
  </td>
  <td width=48 colspan=2 style='width:.5in;border-top:solid windowtext 2.25pt;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table align=center style='text-align:center'><b><span lang=EN-GB
  style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Pharyngeal</span></b></p>
  </td>
  <td width=48 colspan=2 style='width:.5in;border-top:solid windowtext 2.25pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table align=center style='text-align:center'><b><span lang=EN-GB
  style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Glottal</span></b></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=63 valign=top style='width:46.9pt;border-top:solid windowtext 1.0pt;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table style='margin-top:3.0pt'><span style='font-size:
  9.0pt;font-family:"Arial Narrow",sans-serif'>Plosive</span></p>
  </td>
  <td width=18 valign=top style='width:13.6pt;border:none;border-top:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa101" title="IPA:101, USV:0070">p</a></span></p>
  </td>
  <td width=24 style='width:.25in;border-top:solid windowtext 1.0pt;border-left:
  none;border-bottom:none;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>p</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-top:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:solid windowtext 1.0pt;border-left:
  none;border-bottom:none;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-top:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:solid windowtext 1.0pt;border-left:
  none;border-bottom:none;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-top:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa103" title="IPA:103, USV:0074">t</a></span></p>
  </td>
  <td width=24 style='width:.25in;border-top:solid windowtext 1.0pt;border-left:
  none;border-bottom:none;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>t</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-top:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:solid windowtext 1.0pt;border-left:
  none;border-bottom:none;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-top:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa105" title="IPA:105, USV:0288">&#648;</a></span></p>
  </td>
  <td width=26 style='width:19.85pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>t&lt;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-top:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa107" title="IPA:107, USV:0063">c</a></span></p>
  </td>
  <td width=24 style='width:.25in;border-top:solid windowtext 1.0pt;border-left:
  none;border-bottom:none;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>c</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-top:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa109" title="IPA:109, USV:006B">k</a></span></p>
  </td>
  <td width=24 style='width:.25in;border-top:solid windowtext 1.0pt;border-left:
  none;border-bottom:none;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>k</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-top:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa111" title="IPA:111, USV:0071">q</a></span></p>
  </td>
  <td width=24 style='width:.25in;border-top:solid windowtext 1.0pt;border-left:
  none;border-bottom:none;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>q</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-top:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:solid windowtext 1.0pt;border-left:
  none;border-bottom:none;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa113" title="IPA:113, USV:0294">&#660;</a></span></p>
  </td>
  <td width=24 style='width:.25in;border-top:solid windowtext 1.0pt;border-left:
  none;border-bottom:none;border-right:solid windowtext 2.25pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>?=</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=63 valign=top style='width:46.9pt;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table style='margin-top:3.0pt'><span style='font-size:
  9.0pt;font-family:"Arial Narrow",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=18 valign=top style='width:13.6pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa102" title="IPA:102, USV:0062">b</a></span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>b</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa104" title="IPA:104, USV:0064">d</a></span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>d</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa106" title="IPA:106, USV:0256">&#598;</a></span></p>
  </td>
  <td width=26 style='width:19.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>d&lt;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa108" title="IPA:108, USV:025F">&#607;</a></span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>j=</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa110" title="IPA:110, USV:0261">&#609;</a></span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>g&lt;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa112" title="IPA:112, USV:0262">&#610;</a></span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>G=</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  background:#DDDDDD;padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#DDDDDD;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  background:#DDDDDD;padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;background:#DDDDDD;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=63 valign=top style='width:46.9pt;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table style='margin-top:3.0pt'><span style='font-size:
  9.0pt;font-family:"Arial Narrow",sans-serif'>Nasal</span></p>
  </td>
  <td width=18 valign=top style='width:13.6pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL";letter-spacing:
  -1.0pt'><a href="#ipa114" title="IPA:114, USV:006D">m</a></span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>m</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa115" title="IPA:115, USV:0271">&#625;</a></span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New";
  letter-spacing:-1.0pt'>m&gt;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa116" title="IPA:116, USV:006E">n</a></span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>n</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa117" title="IPA:117, USV:0273">&#627;</a></span></p>
  </td>
  <td width=26 style='width:19.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>n&lt;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa118" title="IPA:118, USV:0272">&#626;</a></span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>n=</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa119" title="IPA:119, USV:014B">&#331;</a></span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>n&gt;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa120" title="IPA:120, USV:0274">&#628;</a></span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>N=</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  background:#DDDDDD;padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#DDDDDD;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  background:#DDDDDD;padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;background:#DDDDDD;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=63 valign=top style='width:46.9pt;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table style='margin-top:3.0pt'><span style='font-size:
  9.0pt;font-family:"Arial Narrow",sans-serif'>Trill</span></p>
  </td>
  <td width=18 valign=top style='width:13.6pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa121" title="IPA:121, USV:0299">&#665;</a></span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>B=</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa122" title="IPA:122, USV:0072">r</a></span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>r</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=26 style='width:19.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  background:#DDDDDD;padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#DDDDDD;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa123" title="IPA:123, USV:0280">&#640;</a></span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>R=</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  background:#DDDDDD;padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;background:#DDDDDD;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=63 valign=top style='width:46.9pt;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table style='margin-top:3.0pt'><span style='font-size:
  9.0pt;font-family:"Arial Narrow",sans-serif'>Tap or Flap</span></p>
  </td>
  <td width=18 valign=top style='width:13.6pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL";color:blue'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New";
  color:blue'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&#11377;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>v&lt;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa124" title="IPA:124, USV:027E">&#638;</a></span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>r&gt;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa125" title="IPA:125, USV:027D">&#637;</a></span></p>
  </td>
  <td width=26 style='width:19.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>r&lt;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  background:#DDDDDD;padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#DDDDDD;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  background:#DDDDDD;padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;background:#DDDDDD;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=63 valign=top style='width:46.9pt;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table style='margin-top:3.0pt'><span style='font-size:
  9.0pt;font-family:"Arial Narrow",sans-serif'>Fricative</span></p>
  </td>
  <td width=18 valign=top style='width:13.6pt;border:none;padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa126" title="IPA:126, USV:0278">&#632;</a></span></p>
  </td>
  <td width=24 style='width:.25in;border:none;border-right:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>f=</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa128" title="IPA:128, USV:0066">f</a></span></p>
  </td>
  <td width=24 style='width:.25in;border:none;border-right:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>f</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa130" title="IPA:130, USV:03B8">&#952;</a></span></p>
  </td>
  <td width=24 style='width:.25in;border:none;border-right:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>t=</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa132" title="IPA:132, USV:0073">s</a></span></p>
  </td>
  <td width=24 style='width:.25in;border:none;border-right:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>s</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa134" title="IPA:134, USV:0283">&#643;</a></span></p>
  </td>
  <td width=24 style='width:.25in;border:none;border-right:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>s=</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa136" title="IPA:136, USV:0282">&#642;</a></span></p>
  </td>
  <td width=26 style='width:19.85pt;border:none;border-right:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>s&lt;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa138" title="IPA:138, USV:00E7">ç</a></span></p>
  </td>
  <td width=24 style='width:.25in;border:none;border-right:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>c=</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa140" title="IPA:140, USV:0078">x</a></span></p>
  </td>
  <td width=24 style='width:.25in;border:none;border-right:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>x</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa142" title="IPA:142, USV:03C7">&#967;</a></span></p>
  </td>
  <td width=24 style='width:.25in;border:none;border-right:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>x=</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa144" title="IPA:144, USV:0127">&#295;</a></span></p>
  </td>
  <td width=24 style='width:.25in;border:none;border-right:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>h&gt;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa146" title="IPA:146, USV:0068">h</a></span></p>
  </td>
  <td width=24 style='width:.25in;border:none;border-right:solid windowtext 2.25pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>h</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=63 valign=top style='width:46.9pt;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table style='margin-top:3.0pt'><span style='font-size:
  9.0pt;font-family:"Arial Narrow",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=18 valign=top style='width:13.6pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa127" title="IPA:127, USV:03B2">&#946;</a></span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>b=</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa129" title="IPA:129, USV:0076">v</a></span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>v</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa131" title="IPA:131, USV:00F0">ð</a></span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>d=</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa133" title="IPA:133, USV:007A">z</a></span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>z</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa135" title="IPA:135, USV:0292">&#658;</a></span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>z=</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa137" title="IPA:137, USV:0290">&#656;</a></span></p>
  </td>
  <td width=26 style='width:19.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>z&lt;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa139" title="IPA:139, USV:029D">&#669;</a></span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>j&lt;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa141" title="IPA:141, USV:0263">&#611;</a></span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>g=</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa143" title="IPA:143, USV:0281">&#641;</a></span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>R&gt;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa145" title="IPA:145, USV:0295">&#661;</a></span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>?&lt;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa147" title="IPA:147, USV:0266">&#614;</a></span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>h&lt;</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=63 valign=top style='width:46.9pt;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table style='margin-top:3.0pt'><span style='font-size:
  9.0pt;font-family:"Arial Narrow",sans-serif'>Lateral Fricative</span></p>
  </td>
  <td width=18 valign=top style='width:13.6pt;border:none;background:#DDDDDD;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border:none;border-right:solid windowtext 1.0pt;
  background:#DDDDDD;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;background:#DDDDDD;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border:none;border-right:solid windowtext 1.0pt;
  background:#DDDDDD;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border:none;border-right:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa148" title="IPA:148, USV:026C">&#620;</a></span></p>
  </td>
  <td width=24 style='width:.25in;border:none;border-right:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>l=</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border:none;border-right:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=26 style='width:19.85pt;border:none;border-right:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border:none;border-right:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border:none;border-right:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border:none;border-right:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;background:#DDDDDD;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border:none;border-right:solid windowtext 1.0pt;
  background:#DDDDDD;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;background:#DDDDDD;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border:none;border-right:solid windowtext 2.25pt;
  background:#DDDDDD;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=63 valign=top style='width:46.9pt;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table style='margin-top:3.0pt'><span style='font-size:
  9.0pt;font-family:"Arial Narrow",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=18 valign=top style='width:13.6pt;border:none;border-bottom:solid windowtext 1.0pt;
  background:#DDDDDD;padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#DDDDDD;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  background:#DDDDDD;padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#DDDDDD;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa149" title="IPA:149, USV:026E">&#622;</a></span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>l&gt;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=26 style='width:19.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  background:#DDDDDD;padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#DDDDDD;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  background:#DDDDDD;padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;background:#DDDDDD;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=63 valign=top style='width:46.9pt;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table style='margin-top:3.0pt'><span style='font-size:
  9.0pt;font-family:"Arial Narrow",sans-serif'>Approximant</span></p>
  </td>
  <td width=18 valign=top style='width:13.6pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa150" title="IPA:150, USV:028B">&#651;</a></span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>v=</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa151" title="IPA:151, USV:0279">&#633;</a></span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>r=</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa152" title="IPA:152, USV:027B">&#635;</a></span></p>
  </td>
  <td width=26 style='width:19.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>R&lt;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa153" title="IPA:153, USV:006A">j</a></span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>j</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa154" title="IPA:154, USV:0270">&#624;</a></span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>w&gt;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  background:#DDDDDD;padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;background:#DDDDDD;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=63 valign=top style='width:46.9pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 2.25pt;border-right:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table style='margin-top:3.0pt'><span style='font-size:
  9.0pt;font-family:"Arial Narrow",sans-serif'>Lateral Approximant</span></p>
  </td>
  <td width=18 valign=top style='width:13.6pt;border:none;border-bottom:solid windowtext 2.25pt;
  background:#DDDDDD;padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 2.25pt;border-right:solid windowtext 1.0pt;background:#DDDDDD;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 2.25pt;
  background:#DDDDDD;padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 2.25pt;border-right:solid windowtext 1.0pt;background:#DDDDDD;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 2.25pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 2.25pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 2.25pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa155" title="IPA:155, USV:006C">l</a></span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 2.25pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>l</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 2.25pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 2.25pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 2.25pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa156" title="IPA:156, USV:026D">&#621;</a></span></p>
  </td>
  <td width=26 style='width:19.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 2.25pt;border-right:solid windowtext 1.0pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>l&lt;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 2.25pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa157" title="IPA:157, USV:028E">&#654;</a></span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 2.25pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>L&lt;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 2.25pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa158" title="IPA:158, USV:029F">&#671;</a></span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 2.25pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>L=</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 2.25pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 2.25pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 2.25pt;
  background:#DDDDDD;padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 2.25pt;border-right:solid windowtext 1.0pt;background:#DDDDDD;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 2.25pt;
  background:#DDDDDD;padding:0in 1.8pt 0in 1.8pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 2.25pt;border-right:solid windowtext 2.25pt;background:#DDDDDD;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
 </tr>
</table>

<p><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Where
symbols appear in pairs, the bottom one represents a voiced consonant. Shaded
areas denote articulations judged impossible.</span></p>

<h3>Other Consonants</h3>

<p>In this section, if you turned on <b>Before</b> in <b>Keyboard options</b>, you will type the opposite sequence to what is in the below table. For example, this sequence "=p" would produce "ʘ".</p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=0
 style='width:206.85pt;margin-left:3.0pt;border-collapse:collapse;border:
 none'>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=137 colspan=3 style='width:102.4pt;border:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table align=center style='text-align:center'><span lang=EN-GB
  style='font-size:8.0pt;font-family:"Arial Narrow",sans-serif'>Clicks</span></p>
  </td>
  <td width=139 colspan=3 style='width:104.45pt;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table align=center style='text-align:center'><span lang=EN-GB
  style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Voiced
  implosives</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=31 valign=top style='width:23.4pt;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa176" title="IPA:176, USV:0298">&#664;</a></span></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>p=</span></p>
  </td>
  <td width=69 style='width:52.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Bilabial</span></p>
  </td>
  <td width=33 valign=top style='width:25.1pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa160" title="IPA:160, USV:0253">&#595;</a></span></p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>b&gt;</span></p>
  </td>
  <td width=70 style='width:52.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Bilabial</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:16.25pt'>
  <td width=31 valign=top style='width:23.4pt;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;
  height:16.25pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa177" title="IPA:177, USV:01C0">&#448;</a></span></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>!&lt;</span></p>
  </td>
  <td width=69 style='width:52.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;padding:0in 5.4pt 0in 5.4pt;
  height:16.25pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Dental</span></p>
  </td>
  <td width=33 valign=top style='width:25.1pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa162" title="IPA:162, USV:0257">&#599;</a></span></p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>d&gt;</span></p>
  </td>
  <td width=70 style='width:52.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;padding:0in 5.4pt 0in 5.4pt;
  height:16.25pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Dental/alveolar</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=31 valign=top style='width:23.4pt;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'><a href="#ipa178" title="IPA:178, USV:01C3">&#451;</a></span></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>!</span></p>
  </td>
  <td width=69 style='width:52.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>(Post)alveolar</span></p>
  </td>
  <td width=33 valign=top style='width:25.1pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa164" title="IPA:164, USV:0284">&#644;</a></span></p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>j&gt;</span></p>
  </td>
  <td width=70 style='width:52.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Palatal</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:16.25pt'>
  <td width=31 valign=top style='width:23.4pt;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;
  height:16.25pt'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'><a href="#ipa179" title="IPA:179, USV:01C2">&#450;</a></span></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>!=</span></p>
  </td>
  <td width=69 style='width:52.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;padding:0in 5.4pt 0in 5.4pt;
  height:16.25pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Palatoalveolar</span></p>
  </td>
  <td width=33 valign=top style='width:25.1pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa166" title="IPA:166, USV:0260">&#608;</a></span></p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>g&gt;</span></p>
  </td>
  <td width=70 style='width:52.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;padding:0in 5.4pt 0in 5.4pt;
  height:16.25pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Velar</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:16.25pt'>
  <td width=31 valign=top style='width:23.4pt;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.5pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;
  height:16.25pt'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'><a href="#ipa180" title="IPA:180, USV:01C1">&#449;</a></span></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>!&gt;</span></p>
  </td>
  <td width=69 style='width:52.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;padding:0in 5.4pt 0in 5.4pt;
  height:16.25pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Alveolar
  lateral</span></p>
  </td>
  <td width=33 valign=top style='width:25.1pt;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa168" title="IPA:168, USV:029B">&#667;</a></span></p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>G&gt;</span></p>
  </td>
  <td width=70 style='width:52.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;padding:0in 5.4pt 0in 5.4pt;
  height:16.25pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Uvular</span></p>
  </td>
 </tr>
</table>


<h3>Other Symbols</h3>

<p>In this section, if you turned on <b>Before</b> in <b>Keyboard options</b>, you will type the opposite sequence to what is in the below table. For example, this sequence "=w" would produce "ʍ".</p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=0
 style='width:280.65pt;margin-left:3.0pt;border-collapse:collapse;border:none'>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=39 valign=top style='width:29.35pt;border-top:solid windowtext 1.5pt;
  border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'><a href="#ipa169" title="IPA:169, USV:028D">&#653;</a></span></p>
  </td>
  <td width=52 style='width:39.05pt;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>w=</span></p>
  </td>
  <td width=105 style='width:79.05pt;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Vl
  labial-velar fricative</span></p>
  </td>
  <td width=33 valign=top style='width:24.8pt;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa182" title="IPA:182, USV:0255">&#597;</a></span></p>
  </td>
  <td width=36 style='width:27.05pt;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>c&lt;</span></p>
  </td>
  <td width=108 style='width:81.35pt;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Vl
  alveolo-palatal fricative</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:16.25pt'>
  <td width=39 valign=top style='width:29.35pt;border-top:none;border-left:
  solid windowtext 1.5pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'><a href="#ipa170" title="IPA:170, USV:0077">w</a></span></p>
  </td>
  <td width=52 style='width:39.05pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>w</span></p>
  </td>
  <td width=105 style='width:79.05pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Vd
  labial-velar approximant</span></p>
  </td>
  <td width=33 valign=top style='width:24.8pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL"'><a
  href="#ipa183" title="IPA:183, USV:0291">&#657;</a></span></p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>z&gt;</span></p>
  </td>
  <td width=108 style='width:81.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Vd
  alveolo-palatal fricative</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=39 valign=top style='width:29.35pt;border-top:none;border-left:
  solid windowtext 1.5pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'><a href="#ipa171" title="IPA:171, USV:0265">&#613;</a></span></p>
  </td>
  <td width=52 style='width:39.05pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>y&lt;
  </span><span style='font-size:8.0pt;font-family:"Arial Narrow",sans-serif'>or</span><span
  style='font-size:9.0pt;font-family:"Courier New"'> h=</span></p>
  </td>
  <td width=105 style='width:79.05pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Vd
  labial-palatal approximant</span></p>
  </td>
  <td width=33 valign=top style='width:24.8pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'><a href="#ipa181" title="IPA:181, USV:027A">&#634;</a></span></p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>L&gt;</span></p>
  </td>
  <td width=108 style='width:81.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Vd
  alveolar lateral flap</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:16.25pt'>
  <td width=39 valign=top style='width:29.35pt;border-top:none;border-left:
  solid windowtext 1.5pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'><a href="#ipa173" title="IPA:173, USV:029C">&#668;</a></span></p>
  </td>
  <td width=52 style='width:39.05pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>H=</span></p>
  </td>
  <td width=105 style='width:79.05pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Vl
  epiglottal fricative</span></p>
  </td>
  <td width=33 valign=top style='width:24.8pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'><a href="#ipa175" title="IPA:175, USV:0267">&#615;</a></span></p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>H&gt;</span></p>
  </td>
  <td width=108 style='width:81.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Simultaneous
  </span><span style='font-size:9.0pt;font-family:"Arial",sans-serif'>&#643;</span><span
  style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'> and
  x</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:16.25pt'>
  <td width=39 valign=top style='width:29.35pt;border-top:none;border-left:
  solid windowtext 1.5pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'><a href="#ipa174" title="IPA:174, USV:02A2">&#674;</a></span></p>
  </td>
  <td width=52 style='width:39.05pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>Q&lt;</span></p>
  </td>
  <td width=105 style='width:79.05pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Vd
  epiglottal fricative</span></p>
  </td>
  <td width=33 valign=top style='width:24.8pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=108 style='width:81.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=39 valign=top style='width:29.35pt;border-top:none;border-left:
  solid windowtext 1.5pt;border-bottom:solid windowtext 1.5pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'><a href="#ipa172" title="IPA:172, USV:02A1">&#673;</a></span></p>
  </td>
  <td width=52 style='width:39.05pt;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>Q=</span></p>
  </td>
  <td width=105 style='width:79.05pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Vd
  epiglottal plosive</span></p>
  </td>
  <td width=33 valign=top style='width:24.8pt;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=108 style='width:81.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>&nbsp;</span></p>
  </td>
 </tr>
</table>

<h3>Vowels</h3>

<p>In this section, if you turned on <b>Before</b> in <b>Keyboard options</b>, you will type the opposite sequence to what is in the below table. For example, this sequence "=I" would produce "ɨ".</p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=0
 style='width:318.6pt;margin-left:3.0pt;border-collapse:collapse'>
 <tr style='page-break-inside:avoid'>
  <td width=51 valign=top style='width:38.15pt;border:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=table><b><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>&nbsp;</span></b></p>
  </td>
  <td width=122 colspan=4 valign=top style='width:91.45pt;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.5pt;border-right:none;
  padding:0in .05in 0in .05in'>
  <p class=table align=center style='text-align:center'><b><span lang=EN-GB
  style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Front</span></b></p>
  </td>
  <td width=132 colspan=4 valign=top style='width:99.0pt;border:solid windowtext 1.5pt;
  border-right:none;padding:0in .05in 0in .05in'>
  <p class=table align=center style='text-align:center'><b><span lang=EN-GB
  style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Central</span></b></p>
  </td>
  <td width=120 colspan=4 valign=top style='width:1.25in;border:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=table align=center style='text-align:center'><b><span lang=EN-GB
  style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Back</span></b></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=51 valign=top style='width:38.15pt;border:solid windowtext 1.5pt;
  border-top:none;padding:0in .05in 0in .05in'>
  <p class=table align=center style='text-align:center'><b><span lang=EN-GB
  style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>&nbsp;</span></b></p>
  </td>
  <td width=62 colspan=2 valign=top style='width:46.45pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=table align=center style='text-align:center'><b><span lang=EN-GB
  style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Unrounded</span></b></p>
  </td>
  <td width=60 colspan=2 valign=top style='width:45.0pt;border:none;border-bottom:
  solid windowtext 1.5pt;padding:0in .05in 0in .05in'>
  <p class=table align=center style='text-align:center'><b><span lang=EN-GB
  style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Rounded</span></b></p>
  </td>
  <td width=60 colspan=2 valign=top style='width:45.0pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.5pt;
  border-right:none;padding:0in .05in 0in .05in'>
  <p class=table align=center style='text-align:center'><b><span lang=EN-GB
  style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Unrounded</span></b></p>
  </td>
  <td width=72 colspan=2 valign=top style='width:.75in;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.5pt;
  border-right:none;padding:0in .05in 0in .05in'>
  <p class=table align=center style='text-align:center'><b><span lang=EN-GB
  style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Rounded</span></b></p>
  </td>
  <td width=60 colspan=2 valign=top style='width:45.0pt;border:solid windowtext 1.5pt;
  border-top:none;padding:0in .05in 0in .05in'>
  <p class=table align=center style='text-align:center'><b><span lang=EN-GB
  style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Unrounded</span></b></p>
  </td>
  <td width=60 colspan=2 valign=top style='width:45.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=table align=center style='text-align:center'><b><span lang=EN-GB
  style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Rounded</span></b></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=51 style='width:38.15pt;border:none;border-left:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Close</span></p>
  </td>
  <td width=26 valign=top style='width:19.45pt;border:none;border-left:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'><a href="#ipa301" title="IPA:301, USV:0069">i</a></span></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-right:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>i</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'><a href="#ipa309" title="IPA:309, USV:0079">y</a></span></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>y</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'><a href="#ipa317" title="IPA:317, USV:0268">&#616;</a></span></p>
  </td>
  <td width=36 style='width:29.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>I=</span></p>
  </td>
  <td width=36 valign=top style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'><a href="#ipa318" title="IPA:318, USV:0289">&#649;</a></span></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>U=</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-left:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'><a href="#ipa316" title="IPA:316, USV:026F">&#623;</a></span></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-right:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>u=</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'><a href="#ipa308" title="IPA:308, USV:0075">u</a></span></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>u</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=51 style='width:38.15pt;border-top:solid windowtext 1.0pt;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:none;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Near-close</span></p>
  </td>
  <td width=26 valign=top style='width:19.45pt;border-top:solid windowtext 1.0pt;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:none;
  padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'><a href="#ipa319" title="IPA:319, USV:026A">&#618;</a></span></p>
  </td>
  <td width=36 style='width:29.0pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>i=</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-top:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'><a href="#ipa320" title="IPA:320, USV:028F">&#655;</a></span></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-top:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>y=</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL";color:blue'>&nbsp;</span></p>
  </td>
  <td width=36 style='width:29.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New";
  color:blue'>&nbsp;</span></p>
  </td>
  <td width=36 valign=top style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL";color:blue'>&nbsp;</span></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New";
  color:blue'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border-top:solid windowtext 1.0pt;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:none;
  padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=36 style='width:29.0pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-top:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'><a href="#ipa321" title="IPA:321, USV:028A">&#650;</a></span></p>
  </td>
  <td width=36 style='width:29.0pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>u&lt;</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=51 style='width:38.15pt;border-top:solid windowtext 1.0pt;
  border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Close-mid</span></p>
  </td>
  <td width=26 valign=top style='width:19.45pt;border-top:solid windowtext 1.0pt;
  border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'><a href="#ipa302" title="IPA:302, USV:0065">e</a></span></p>
  </td>
  <td width=36 style='width:29.0pt;border:solid windowtext 1.0pt;border-left:
  none;padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>e</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'><a href="#ipa310" title="IPA:310, USV:00F8">ø</a></span></p>
  </td>
  <td width=36 style='width:29.0pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>o&gt;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.5pt;border-right:none;padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'><a href="#ipa397" title="IPA:397, USV:0258">&#600;</a></span></p>
  </td>
  <td width=36 style='width:29.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>E=</span></p>
  </td>
  <td width=36 valign=top style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'><a href="#ipa323" title="IPA:323, USV:0275">&#629;</a></span></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>O=</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border-top:solid windowtext 1.0pt;
  border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'><a href="#ipa315" title="IPA:315, USV:0264">&#612;</a></span></p>
  </td>
  <td width=36 style='width:29.0pt;border:solid windowtext 1.0pt;border-left:
  none;padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>O&gt;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'><a href="#ipa307" title="IPA:307, USV:006F">o</a></span></p>
  </td>
  <td width=36 style='width:29.0pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>o</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=51 style='width:38.15pt;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Mid</span></p>
  </td>
  <td width=26 valign=top style='width:19.45pt;border-top:none;border-left:
  solid windowtext 1.5pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL";color:blue'>&nbsp;</span></p>
  </td>
  <td width=36 style='width:29.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New";
  color:blue'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=36 valign=top style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'><a href="#ipa322" title="IPA:322, USV:0259"><span
  style='color:windowtext'>&#601;</span></a></span></p>
  </td>
  <td width=36 style='width:29.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>e=</span></p>
  </td>
  <td width=36 valign=top style='width:29.0pt;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=36 style='width:29.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=36 style='width:29.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=51 style='width:38.15pt;border:none;border-left:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Open-mid</span></p>
  </td>
  <td width=26 valign=top style='width:19.45pt;border:none;border-left:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'><a href="#ipa303" title="IPA:303, USV:025B">&#603;</a></span></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-right:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>e&lt;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'><a href="#ipa311" title="IPA:311, USV:0153">œ</a></span></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>E&lt;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-left:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'><a href="#ipa326" title="IPA:326, USV:025C">&#604;</a></span></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-right:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>e&gt;</span></p>
  </td>
  <td width=36 valign=top style='width:29.0pt;border:none;padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'><a href="#ipa395" title="IPA:395, USV:025E">&#606;</a></span></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>O&lt;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-left:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'><a href="#ipa314" title="IPA:314, USV:028C">&#652;</a></span></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-right:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>u&gt;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'><a href="#ipa306" title="IPA:306, USV:0254">&#596;</a></span></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>o&lt;</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=51 style='width:38.15pt;border-top:solid windowtext 1.0pt;
  border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Near-open</span></p>
  </td>
  <td width=26 valign=top style='width:19.45pt;border-top:solid windowtext 1.0pt;
  border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'><a href="#ipa325" title="IPA:325, USV:00E6">æ</a></span></p>
  </td>
  <td width=36 style='width:29.0pt;border:solid windowtext 1.0pt;border-left:
  none;padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>a&lt;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=36 style='width:29.0pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:solid windowtext 1.5pt;
  border-left:none;padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=36 valign=top style='width:29.0pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'><a href="#ipa324" title="IPA:324, USV:0250"><span
  style='color:windowtext'>&#592;</span></a></span></p>
  </td>
  <td width=36 style='width:29.0pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>a&gt;</span></p>
  </td>
  <td width=36 valign=top style='width:29.0pt;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.5pt;border-right:none;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=36 style='width:29.0pt;border:solid windowtext 1.0pt;border-left:
  none;padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'>&nbsp;</span></p>
  </td>
  <td width=36 style='width:29.0pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=51 style='width:38.15pt;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.5pt;border-right:none;padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Open</span></p>
  </td>
  <td width=26 valign=top style='width:19.45pt;border-top:none;border-left:
  solid windowtext 1.5pt;border-bottom:solid windowtext 1.5pt;border-right:
  none;padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'><a href="#ipa304" title="IPA:304, USV:0061">a</a></span></p>
  </td>
  <td width=36 style='width:29.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.5pt;border-right:solid windowtext 1.0pt;padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>a</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'><a href="#ipa312" title="IPA:312, USV:0276">&#630;</a></span></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>E&gt;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.5pt;border-right:none;padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL";color:blue'>&nbsp;</span></p>
  </td>
  <td width=36 valign=top style='width:29.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-family:"Courier New";color:blue'>&nbsp;</span></p>
  </td>
  <td width=36 valign=top style='width:29.0pt;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=tableipanormal><span style='font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=36 valign=top style='width:29.0pt;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.5pt;border-right:none;padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'><a href="#ipa305" title="IPA:305, USV:0251">&#593;</a></span></p>
  </td>
  <td width=36 style='width:29.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.5pt;border-right:solid windowtext 1.0pt;padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>a=</span></p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL"'><a href="#ipa313" title="IPA:313, USV:0252">&#594;</a></span></p>
  </td>
  <td width=36 style='width:29.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>o=</span></p>
  </td>
 </tr>
</table>

<h3>Suprasegmentals</h3>

<p>In this section, if you turned on <b>Before</b> in <b>Keyboard options</b>, you will type the opposite sequence to what is in the below table. For example, this sequence "<." would produce "|".</p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=0
 style='width:149.4pt;border-collapse:collapse;border:none'>
 <tr style='page-break-inside:avoid'>
  <td width=31 style='width:23.4pt;border-top:solid windowtext 1.5pt;
  border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-bottom:2.0pt;line-height:11.0pt;
  page-break-after:avoid'><span style='font-family:"Charis SIL"'><a
  href="#ipa501" title="IPA:501, USV:02C8">&#712;</a></span></p>
  </td>
  <td width=48 valign=top style='width:.5in;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table style='line-height:11.0pt'><span style='font-family:
  "Courier New"'>}</span></p>
  </td>
  <td width=120 style='width:1.25in;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table style='line-height:11.0pt'><span style='font-size:
  9.0pt;font-family:"Arial Narrow",sans-serif'>Primary stress</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=31 style='width:23.4pt;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-bottom:2.0pt;line-height:11.0pt;
  page-break-after:avoid'><span style='font-family:"Charis SIL"'><a
  href="#ipa502" title="IPA:502, USV:02CC">&#716;</a></span></p>
  </td>
  <td width=48 valign=top style='width:.5in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table style='line-height:11.0pt'><span style='font-family:
  "Courier New"'>}}</span></p>
  </td>
  <td width=120 style='width:1.25in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table style='line-height:11.0pt'><span style='font-size:
  9.0pt;font-family:"Arial Narrow",sans-serif'>Secondary stress</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=31 style='width:23.4pt;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-bottom:2.0pt;line-height:11.0pt;
  page-break-after:avoid'><span style='font-family:"Charis SIL"'>e<a
  href="#ipa503" title="IPA:503, USV:02D0">&#720;</a></span></p>
  </td>
  <td width=48 valign=top style='width:.5in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table style='line-height:11.0pt'><span style='font-family:
  "Courier New"'>:</span></p>
  </td>
  <td width=120 style='width:1.25in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table style='line-height:11.0pt'><span style='font-size:
  9.0pt;font-family:"Arial Narrow",sans-serif'>Long</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=31 style='width:23.4pt;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-bottom:2.0pt;line-height:11.0pt;
  page-break-after:avoid'><span style='font-family:"Charis SIL"'>e<a
  href="#ipa504" title="IPA:504, USV:02D1">&#721;</a></span></p>
  </td>
  <td width=48 valign=top style='width:.5in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table style='line-height:11.0pt'><span style='font-family:
  "Courier New"'>::</span></p>
  </td>
  <td width=120 style='width:1.25in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table style='line-height:11.0pt'><span style='font-size:
  9.0pt;font-family:"Arial Narrow",sans-serif'>Half long</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=31 style='width:23.4pt;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-bottom:2.0pt;line-height:11.0pt;
  page-break-after:avoid'><span style='font-family:"Charis SIL";color:blue'>e&#720;&#720;</span></p>
  </td>
  <td width=48 valign=top style='width:.5in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table style='line-height:11.0pt'><span style='font-family:
  "Courier New";color:blue'>:::</span></p>
  </td>
  <td width=120 style='width:1.25in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table style='line-height:11.0pt'><span style='font-size:
  9.0pt;font-family:"Arial Narrow",sans-serif;color:blue'>Extra long</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=31 style='width:23.4pt;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-bottom:2.0pt;line-height:11.0pt;
  page-break-after:avoid'><span style='font-family:"Charis SIL"'><a
  href="#ipa505" title="IPA:505, USV:0306">e&#774;</a></span></p>
  </td>
  <td width=48 valign=top style='width:.5in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table style='line-height:11.0pt'><span style='font-family:
  "Courier New"'>***</span></p>
  </td>
  <td width=120 style='width:1.25in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table style='line-height:11.0pt'><span style='font-size:
  9.0pt;font-family:"Arial Narrow",sans-serif'>Extra short</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=31 style='width:23.4pt;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-bottom:2.0pt;line-height:11.0pt;
  page-break-after:avoid'><span style='font-family:"Charis SIL"'><a
  href="#ipa507" title="IPA:507, USV:007C">|</a></span></p>
  </td>
  <td width=48 valign=top style='width:.5in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table style='line-height:11.0pt'><span style='font-family:
  "Courier New"'>.&lt;</span></p>
  </td>
  <td width=120 style='width:1.25in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table style='line-height:11.0pt'><span style='font-size:
  9.0pt;font-family:"Arial Narrow",sans-serif'>Minor (foot) group</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=31 style='width:23.4pt;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-bottom:2.0pt;line-height:11.0pt;
  page-break-after:avoid'><span style='font-family:"Charis SIL"'><a
  href="#ipa508" title="IPA:508, USV:2016">&#8214;</a></span></p>
  </td>
  <td width=48 valign=top style='width:.5in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table style='line-height:11.0pt'><span style='font-family:
  "Courier New"'>.=</span></p>
  </td>
  <td width=120 style='width:1.25in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table style='line-height:11.0pt'><span style='font-size:
  9.0pt;font-family:"Arial Narrow",sans-serif'>Major (intonation) group</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=31 style='width:23.4pt;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-bottom:2.0pt;line-height:11.0pt;
  page-break-after:avoid'><span style='font-family:"Charis SIL"'><a
  href="#ipa506" title="IPA:506, USV:002E">.</a></span></p>
  </td>
  <td width=48 valign=top style='width:.5in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table style='line-height:11.0pt'><span style='font-family:
  "Courier New"'>.</span></p>
  </td>
  <td width=120 style='width:1.25in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table style='line-height:11.0pt'><span style='font-size:
  9.0pt;font-family:"Arial Narrow",sans-serif'>Syllable break</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=31 style='width:23.4pt;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.5pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-bottom:2.0pt;line-height:11.0pt;
  page-break-after:avoid'><span style='font-family:"Charis SIL"'><a
  href="#ipa509" title="IPA:509, USV:203F">&#8255;</a></span></p>
  </td>
  <td width=48 valign=top style='width:.5in;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table style='line-height:11.0pt'><span style='font-family:
  "Courier New"'>#=</span></p>
  </td>
  <td width=120 style='width:1.25in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table style='line-height:11.0pt'><span style='font-size:
  9.0pt;font-family:"Arial Narrow",sans-serif'>Linking (absence of a break)</span></p>
  </td>
 </tr>
</table>

<h3>Other (non-IPA) Vowels</h3>

<p>In this section, if you turned on <b>Before</b> in <b>Keyboard options</b>, you will type the opposite sequence to what is in the below table. For example, this sequence "&gt;A" would produce "ᴂ".</p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=0
 style='width:279.0pt;margin-left:3.0pt;border-collapse:collapse;border:none'>
 <tr style='page-break-inside:avoid'>
  <td width=24 style='width:.25in;border-top:solid windowtext 1.5pt;border-left:
  solid windowtext 1.5pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL";color:blue'>&#7426;</span></p>
  </td>
  <td width=36 style='width:29.0pt;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New";
  color:blue'>A&gt;</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border-top:solid windowtext 1.5pt;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL";color:blue'>&#945;</span></p>
  </td>
  <td width=36 style='width:29.0pt;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-family:"Courier New";color:blue'>a|</span></p>
  </td>
  <td width=120 style='width:1.25in;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>open central unrounded vowel</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=24 style='width:.25in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL";color:blue'><a href="#ipa399" title="IPA:399, USV:0269"><span
  style='color:blue'>&#617;</span></a></span></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New";
  color:blue'>i|</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>near-close near-front unrounded </span></p>
  </td>
  <td width=24 style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL";color:blue'>&#7424;</span></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-family:"Courier New";color:blue'>A|</span></p>
  </td>
  <td width=120 style='width:1.25in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>open central unrounded </span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=24 style='width:.25in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL";color:blue'>&#7548;</span></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New";
  color:blue'>I&gt;</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>&nbsp;</span></p>
  </td>
  <td width=24 style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='margin-bottom:2.0pt;line-height:12.0pt'><span
  style='font-family:"Charis SIL";color:blue'>&#639;</span></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in'>
  <p class=table style='margin-bottom:2.0pt'><span style='font-size:
  9.0pt;font-family:"Courier New";color:blue'>z|</span></p>
  </td>
  <td width=120 style='width:1.25in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>unrounded alveolar apical </span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=24 style='width:.25in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL";color:blue'>&#7547;</span></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New";
  color:blue'>I&lt;</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>lower-high central unrounded </span></p>
  <p class=table style='margin-left:.2in'><span style='font-size:
  9.0pt;font-family:"Arial Narrow",sans-serif;color:blue'>or</span></p>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>high back unrounded</span></p>
  </td>
  <td width=24 style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='margin-bottom:2.0pt;line-height:12.0pt'><span
  style='font-family:"Charis SIL";color:blue'>&#645;</span></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in'>
  <p class=table style='margin-bottom:2.0pt'><span style='font-size:
  9.0pt;font-family:"Courier New";color:blue'>Z|</span></p>
  </td>
  <td width=120 style='width:1.25in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>unrounded retroflex apical </span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=24 style='width:.25in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL";color:blue'>&#7550;</span></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New";
  color:blue'>U&gt;</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>high front rounded</span></p>
  </td>
  <td width=24 style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='margin-bottom:2.0pt;line-height:12.0pt'><span
  style='font-family:"Charis SIL";color:blue'>&#686;</span></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in'>
  <p class=table style='margin-bottom:2.0pt'><span style='font-size:
  9.0pt;font-family:"Courier New";color:blue'>y|</span></p>
  </td>
  <td width=120 style='width:1.25in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>rounded alveolar apical </span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=24 style='width:.25in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL";color:blue'><a href="#ipa398" title="IPA:398, USV:0277"><span
  style='color:blue'>&#631;</span></a></span></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New";
  color:blue'>u|</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>near-close back rounded </span></p>
  </td>
  <td width=24 style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='margin-bottom:2.0pt;line-height:12.0pt'><span
  style='font-family:"Charis SIL";color:blue'>&#687;</span></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in'>
  <p class=table style='margin-bottom:2.0pt'><span style='font-size:
  9.0pt;font-family:"Courier New";color:blue'>Y|</span></p>
  </td>
  <td width=120 style='width:1.25in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>rounded retroflex apical </span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=24 style='width:.25in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL";color:blue'>&#7431;</span></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New";
  color:blue'>E|</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>mid front unrounded </span></p>
  </td>
  <td width=24 style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='margin-bottom:2.0pt;line-height:12.0pt'><span
  style='font-family:"Charis SIL";color:blue'>&nbsp;</span></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in'>
  <p class=table style='margin-bottom:2.0pt'><span style='font-size:
  9.0pt;font-family:"Courier New";color:blue'>&nbsp;</span></p>
  </td>
  <td width=120 style='width:1.25in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=24 style='width:.25in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.5pt;border-right:none;padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL";color:blue'><a href="#ipa396" title="IPA:396, USV:029A"><span
  style='color:blue'>&#666;</span></a></span></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New";
  color:blue'>e|</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>open-mid front rounded </span></p>
  </td>
  <td width=24 style='width:.25in;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=tableipanormal style='margin-bottom:2.0pt;line-height:12.0pt'><span
  style='font-family:"Charis SIL";color:blue'>&nbsp;</span></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=table style='margin-bottom:2.0pt'><span style='font-size:
  9.0pt;font-family:"Courier New";color:blue'>&nbsp;</span></p>
  </td>
  <td width=120 style='width:1.25in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>&nbsp;</span></p>
  </td>
 </tr>
</table>

<h3>Tone and Word accents</h3>

<p>In this section the keystrokes are the same whether you turned on <b>Before</b> or not.</p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=0
 style='width:324.75pt;margin-left:3.0pt;border-collapse:collapse;border:
 none'>
 <tr style='page-break-inside:avoid'>
  <td width=203 colspan=5 style='width:152.2pt;border:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table align=center style='text-align:center'><span lang=EN-GB
  style='font-size:8.0pt;font-family:"Arial Narrow",sans-serif'>Level<a
  href="#_ftn1" name="_ftnref1" title=""><span class=MsoFootnoteReference><span
  class=MsoFootnoteReference><span style='font-size:8.0pt;
  font-family:"Arial Narrow",sans-serif'>[1]</span></span></span></a></span></p>
  </td>
  <td width=230 colspan=5 style='width:172.55pt;border:solid windowtext 1.5pt;
  border-left:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=table align=center style='text-align:center'><span lang=EN-GB
  style='font-size:8.0pt;font-family:"Arial Narrow",sans-serif'>Contour<a
  href="#_ftn2" name="_ftnref2" title=""><span class=MsoFootnoteReference><span
  class=MsoFootnoteReference><span style='font-size:8.0pt;
  font-family:"Arial Narrow",sans-serif'>[2]</span></span></span></a></span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'><a
  href="#ipa519" title="IPA:519, USV:02E5">&#741;</a></span></p>
  </td>
  <td width=36 style='width:27.05pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>#4</span></p>
  </td>
  <td width=32 valign=top style='width:24.05pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'><a
  href="#ipa512" title="IPA:512, USV:030B">e&#779;</a></span></p>
  </td>
  <td width=38 style='width:28.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>@4</span></p>
  </td>
  <td width=53 style='width:39.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Extra
  high</span></p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'><a
  href="#ipa529" title="IPA:529, USV:02E9 02E5">&#745;&#741;</a></span></p>
  </td>
  <td width=50 style='width:37.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>#04</span></p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'><a
  href="#ipa524" title="IPA:524, USV:030C">e&#780;</a></span></p>
  </td>
  <td width=50 style='width:37.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>@13</span></p>
  </td>
  <td width=62 style='width:46.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Rising</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'><a
  href="#ipa520" title="IPA:520, USV:02E6">&#742;</a></span></p>
  </td>
  <td width=36 style='width:27.05pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>#3</span></p>
  </td>
  <td width=32 valign=top style='width:24.05pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'><a
  href="#ipa513" title="IPA:513, USV:0301">e&#769;</a></span></p>
  </td>
  <td width=38 style='width:28.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>@3</span></p>
  </td>
  <td width=53 style='width:39.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>High</span></p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'><a
  href="#ipa530" title="IPA:530, USV:02E5 02E9">&#741;&#745;</a></span></p>
  </td>
  <td width=50 style='width:37.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>#40</span></p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'><a
  href="#ipa525" title="IPA:525, USV:0302">e&#770;</a></span></p>
  </td>
  <td width=50 style='width:37.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>@31</span></p>
  </td>
  <td width=62 style='width:46.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Falling</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'><a
  href="#ipa521" title="IPA:521, USV:02E7">&#743;</a></span></p>
  </td>
  <td width=36 style='width:27.05pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>#2</span></p>
  </td>
  <td width=32 valign=top style='width:24.05pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'><a
  href="#ipa514" title="IPA:514, USV:0304">e&#772;</a></span></p>
  </td>
  <td width=38 style='width:28.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>@2</span></p>
  </td>
  <td width=53 style='width:39.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Mid</span></p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL";
  color:black'><a href="#ipa531" title="IPA:531, USV:02E7 02E5">&#743;&#741;</a></span></p>
  </td>
  <td width=50 style='width:37.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>#24</span></p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL";
  color:red'><a href="#ipa526" title="IPA:526, USV:1DC4">e&#7620;</a></span></p>
  </td>
  <td width=50 style='width:37.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>@23</span></p>
  </td>
  <td width=62 style='width:46.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>High
  rising</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'><a
  href="#ipa522" title="IPA:522, USV:02E8">&#744;</a></span></p>
  </td>
  <td width=36 style='width:27.05pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>#1</span></p>
  </td>
  <td width=32 valign=top style='width:24.05pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'><a
  href="#ipa515" title="IPA:515, USV:0300">e&#768;</a></span></p>
  </td>
  <td width=38 style='width:28.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>@1</span></p>
  </td>
  <td width=53 style='width:39.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Low</span></p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL";
  color:black'><a href="#ipa532" title="IPA:532, USV:02E9 02E7">&#744;&#743;</a></span></p>
  </td>
  <td width=50 style='width:37.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>#12</span></p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL";
  color:red'><a href="#ipa527" title="IPA:527, USV:1DC5">e&#7621;</a></span></p>
  </td>
  <td width=50 style='width:37.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>@12</span></p>
  </td>
  <td width=62 style='width:46.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Low
  rising</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'><a
  href="#ipa523" title="IPA:523, USV:02E9">&#745;</a></span></p>
  </td>
  <td width=36 style='width:27.05pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>#0</span></p>
  </td>
  <td width=32 valign=top style='width:24.05pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'><a
  href="#ipa516" title="IPA:516, USV:030F">e&#783;</a></span></p>
  </td>
  <td width=38 style='width:28.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>@0</span></p>
  </td>
  <td width=53 style='width:39.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Extra
  low</span></p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL";
  color:black'><a href="#ipa533" title="IPA:533, USV:02E8 02E5 02E8">&#744;&#741;&#744;</a></span></p>
  </td>
  <td width=50 style='width:37.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>#141</span></p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL";
  color:red'><a href="#ipa528" title="IPA:528, USV:1DC8">e&#7624;</a></span></p>
  </td>
  <td width=50 style='width:37.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>@131</span></p>
  </td>
  <td width=62 style='width:46.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Rising-falling</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'>&nbsp;</p>
  </td>
  <td width=36 style='width:27.05pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=32 valign=top style='width:24.05pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt;page-break-after:avoid'><span
  style='font-family:"Charis SIL"'><a href="#ipa517"
  title="IPA:517, USV:A71C">&#xA71C;</a></span></p>
  </td>
  <td width=38 valign=top style='width:28.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-family:"Courier New"'>#&lt;</span></p>
  </td>
  <td width=53 style='width:39.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Downstep</span></p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'>&nbsp;</p>
  </td>
  <td width=50 style='width:37.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL";
  color:blue'>e&#7622;</span></p>
  </td>
  <td width=50 style='width:37.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New";
  color:blue'>@21</span></p>
  </td>
  <td width=62 style='width:46.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>Low falling</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'>&nbsp;</p>
  </td>
  <td width=36 style='width:27.05pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=32 valign=top style='width:24.05pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'><a
  href="#ipa518" title="IPA:518, USV:A71B">&#xA71B;</a></span></p>
  </td>
  <td width=38 valign=top style='width:28.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-family:"Courier New"'>#&gt;</span></p>
  </td>
  <td width=53 style='width:39.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Upstep</span></p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'>&nbsp;</p>
  </td>
  <td width=50 style='width:37.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL";
  color:blue'>e&#7623;</span></p>
  </td>
  <td width=50 style='width:37.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New";
  color:blue'>@32</span></p>
  </td>
  <td width=62 style='width:46.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>High falling</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'>&nbsp;</p>
  </td>
  <td width=36 style='width:27.05pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=32 valign=top style='width:24.05pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL";
  color:blue'>&#42781;</span></p>
  </td>
  <td width=38 style='width:28.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New";
  color:blue'>!^</span></p>
  </td>
  <td width=53 style='width:39.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>Africanist downstep</span></p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'>&nbsp;</p>
  </td>
  <td width=50 style='width:37.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL";
  color:blue'>e&#7625;</span></p>
  </td>
  <td width=50 style='width:37.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New";
  color:blue'>@313</span></p>
  </td>
  <td width=62 style='width:46.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>Falling-rising</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'>&nbsp;</p>
  </td>
  <td width=36 style='width:27.05pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=32 valign=top style='width:24.05pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt;page-break-after:avoid'><span
  style='font-family:"Charis SIL";color:blue'>&#42782;</span></p>
  </td>
  <td width=38 valign=top style='width:28.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-family:"Courier New";color:blue'>#!</span></p>
  </td>
  <td width=53 style='width:39.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>Africanist upstep (raised)</span></p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'>&nbsp;</p>
  </td>
  <td width=50 style='width:37.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt;page-break-after:avoid'><span
  style='font-family:"Charis SIL"'><a href="#ipa510" title="IPA:510, USV:2197">&#8599;</a></span></p>
  </td>
  <td width=50 valign=top style='width:37.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-family:"Courier New"'>#&gt;&gt; </span></p>
  </td>
  <td width=62 style='width:46.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Global
  rise</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.5pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'>&nbsp;</p>
  </td>
  <td width=36 style='width:27.05pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=32 valign=top style='width:24.05pt;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL";
  color:blue'>&#42783;</span></p>
  </td>
  <td width=38 valign=top style='width:28.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-family:"Courier New";color:blue'>##!</span></p>
  </td>
  <td width=53 style='width:39.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>Africanist upstep (lowered)</span></p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'>&nbsp;</p>
  </td>
  <td width=50 style='width:37.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>&nbsp;</span></p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt;page-break-after:avoid'><span
  style='font-family:"Charis SIL"'><a href="#ipa511" title="IPA:511, USV:2198">&#8600;</a></span></p>
  </td>
  <td width=50 valign=top style='width:37.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-family:"Courier New"'>#&lt;&lt; </span></p>
  </td>
  <td width=62 style='width:46.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Global
  fall</span></p>
  </td>
 </tr>
</table>

<h3>Superscripts</h3>

<p>In this section, if you turned on <b>Before</b> in <b>Keyboard options</b>, you will type the opposite sequence to what is in the below table. For example, this sequence "&Hat;3" would produce "³", "&Hat;h" would produce "ʰ", and "&Hat;=g" would produce "ˠ".</p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=0
 style='width:334.1pt;margin-left:3.0pt;border-collapse:collapse;border:none'>
 <tr>
  <td width=121 style='width:91.1pt;border-top:solid;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL";
  color:blue'>³</span></p>
  </td>
  <td width=192 style='width:91.1pt;border-top:solid;border-left:none windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New";
  color:blue'>3^ (0-9)</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:solid;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>superscript number</span></p>
  </td>
 </tr>
 <tr>
  <td width=121 style='width:91.1pt;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.5pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL";
  color:blue'>&#8315;</span></p>
  </td>
  <td width=192 style='width:2.0in;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New";
  color:blue'>-^</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>superscript hyphen</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:solid windowtext 1.5pt;
  border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'>k<a
  href="#ipa404" title="IPA:404, USV:02B0">&#688;</a></span></p>
  </td>
  <td width=84 style='width:63.0pt;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>h^</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Aspirated</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'>t<a
  href="#ipa420" title="IPA:420, USV:02B7">&#695;</a></span></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>w^</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Labialised</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'>t<a
  href="#ipa421" title="IPA:421, USV:02B2">&#690;</a></span></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>j^</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Palatalised</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'>l<a
  href="#ipa422" title="IPA:422, USV:02E0">&#736;</a></span></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>g=^</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Velarised</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'>t<a
  href="#ipa423" title="IPA:423, USV:02E4">&#740;</a></span></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>?&lt;^</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Pharyngealised</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'><a
  href="#ipa425" title="IPA:425, USV:207F">&#8319;</a>k</span></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>n^
  </span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Pre/post
  nasalised</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'>t<a
  href="#ipa426" title="IPA:426, USV:02E1">&#737;</a></span></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>l^</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Lateral
  release</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL";
  color:blue'>&#7598;&#607;</span></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>symbol followed by</span><span style='font-size:9.0pt;
  font-family:"Courier New";color:blue'> ^ </span><span lang=EN-GB
  style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;color:blue'>e.g.</span><span
  style='font-size:9.0pt;font-family:"Courier New";color:blue'> n=^</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>Other superscripts are available<a href="#_ftn4" name="_ftnref4"
  title=""><span class=MsoFootnoteReference><span class=MsoFootnoteReference><span
  style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>[4]</span></span></span></a></span></p>
  </td>
 </tr>
</table>

<h3>Subscripts</h3>

<p>In this section, if you turned on <b>Before</b> in <b>Keyboard options</b>, you will type the opposite sequence to what is in the below table. For example, this sequence "_3" would produce "₃"</p>
<p>Use the "_" rota after the numeral to continue with <a href="#diacritics">Diacritics &amp; Suprasegmentals</a></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=0
 style='width:334.1pt;margin-left:3.0pt;border-collapse:collapse;border:none'>
 <tr>
  <td width=121 style='width:91.1pt;border-top:solid;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL";
  color:blue'>₃</span></p>
  </td>
  <td width=192 style='width:91.1pt;border-top:solid;border-left:none windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New";
  color:blue'>3_ (0-9)</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:solid;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>subscript number</span></p>
  </td>
 </tr>
</table>

<h3>Other (non-IPA) Symbols</h3>

<p>In this section, if you turned on <b>Before</b> in <b>Keyboard options</b>, you will type the opposite sequence to what is in the below table. For example, this sequence "&gt;c" would produce "ƈ".</p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=0
 style='width:149.4pt;border-collapse:collapse;border:none'>
 <tr style='page-break-inside:avoid;height:16.25pt'>
  <td width=40 valign=top style='width:29.8pt;border-top:solid windowtext 2.25pt;
  border-left:solid windowtext 2.25pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL";color:blue'><a
  href="#ipa163" title="IPA:163, USV:0188"><span style='color:blue'>&#392;</span></a></span></p>
  </td>
  <td width=36 style='width:27.05pt;border-top:solid windowtext 2.25pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New";
  color:blue'>c&gt;</span></p>
  </td>
  <td width=123 style='width:92.55pt;border-top:solid windowtext 2.25pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>vl palatal implosive</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=40 valign=top style='width:29.8pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL";color:blue'>&#545;</span></p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New";
  color:blue'>d|</span></p>
  </td>
  <td width=123 style='width:92.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>alveolo-palatal vd plosive</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=40 valign=top style='width:29.8pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL";color:blue'>&#1106;</span></p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New";
  color:blue'>h|</span></p>
  </td>
  <td width=123 style='width:92.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>vd pharyngeal nasal</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=40 valign=top style='width:29.8pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL";color:blue'><a
  href="#ipa165" title="IPA:165, USV:0199"><span style='color:blue'>&#409;</span></a></span></p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New";
  color:blue'>k&gt;</span></p>
  </td>
  <td width=123 style='width:92.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>vl velar implosive</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=40 valign=top style='width:29.8pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL";color:blue'>&#564;</span></p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New";
  color:blue'>l|</span></p>
  </td>
  <td width=123 style='width:92.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>front-palatal vd lateral approximant</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=40 valign=top style='width:29.8pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL";color:blue'>&#565;</span></p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New";
  color:blue'>n|</span></p>
  </td>
  <td width=123 style='width:92.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>front-palatal vd nasal</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=40 valign=top style='width:29.8pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL";color:blue'><a
  href="#ipa159" title="IPA:159, USV:01A5"><span style='color:blue'>&#421;</span></a></span></p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New";
  color:blue'>p&gt;</span></p>
  </td>
  <td width=123 style='width:92.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>vl bilabial implosive</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=40 valign=top style='width:29.8pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL";color:blue'><a
  href="#ipa167" title="IPA:167, USV:02A0"><span style='color:blue'>&#672;</span></a></span></p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New";
  color:blue'>q&gt;</span></p>
  </td>
  <td width=123 style='width:92.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>vl uvular implosive</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=40 valign=top style='width:29.8pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL";color:blue'>&#7576;</span></p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New";
  color:blue'>S=</span></p>
  </td>
  <td width=123 style='width:92.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>vl retroflex postalveolar fricative</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=40 valign=top style='width:29.8pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL";color:blue'><a
  href="#ipa161" title="IPA:161, USV:01AD"><span style='color:blue'>&#429;</span></a></span></p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New";
  color:blue'>t&gt;</span></p>
  </td>
  <td width=123 style='width:92.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>vl dental or alveolar implosive</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=40 valign=top style='width:29.8pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL";color:blue'>&#566;</span></p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New";
  color:blue'>t|</span></p>
  </td>
  <td width=123 style='width:92.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>front-palatal vl plosive</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=40 valign=top style='width:29.8pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL";color:blue'><a
  href="#ipa201" title="IPA:201, USV:0287"><span style='color:blue'>&#647;</span></a></span></p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New";
  color:blue'>T|</span></p>
  </td>
  <td width=123 style='width:92.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>dental click</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=40 valign=top style='width:29.8pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL";color:blue'>&#11379;</span></p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New";
  color:blue'>w&lt;</span></p>
  </td>
  <td width=123 style='width:92.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>bilabial flap</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=40 valign=top style='width:29.8pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=tableipanormal><span style='font-family:"Charis SIL";color:blue'>&#7578;</span></p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New";
  color:blue'>Z=</span></p>
  </td>
  <td width=123 style='width:92.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>vd retroflex postalveolar fricative</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=40 valign=top style='width:29.8pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL";color:blue'>+</span></p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New";
  color:blue'>+=</span></p>
  </td>
  <td width=123 style='width:92.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=40 valign=top style='width:29.8pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL";color:blue'>&#8709;</span></p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New";
  color:blue'>0=</span></p>
  </td>
  <td width=123 style='width:92.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>Empty set</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=40 valign=top style='width:29.8pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 2.25pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=tableipanormal style='line-height:12.0pt'><span style='font-family:
  "Charis SIL";color:blue'>&#9676;</span></p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New";
  color:blue'>0&gt;</span></p>
  </td>
  <td width=123 style='width:92.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 2.25pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>Diacritic “holder”</span></p>
  </td>
 </tr>
</table>


<h3 id="diacritics">Diacritics &amp; Suprasegmentals</h3>


<p>In this section the keystrokes are the same whether you turned on <b>Before</b> or not.</p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=0
 style='width:334.1pt;margin-left:3.0pt;border-collapse:collapse;border:none'>
 <tr>
  <td width=121 style='width:91.1pt;border-top:solid;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL";
  color:blue'>k&#701;</span></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-top:solid;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New";
  color:blue'>[[</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:solid;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>Light aspiration</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'><a
  href="#ipa419" title="IPA:419, USV:02DE">e&#734;</a></span></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>[[[</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Rhoticity</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'>t<a
  href="#ipa401" title="IPA:401, USV:02BC">&#700;</a></span></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>]]</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Ejective</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'><a
  href="#ipa427" title="IPA:427, USV:031A">t&#794;</a></span></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>]]]</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>No
  audible release</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL";
  color:blue'>b<a href="#ipa492" title="IPA:492, USV:02BB"><span
  style='color:blue'>&#699;</span></a></span></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New";
  color:blue'>]]]]</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>Weak aspiration</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'><a
  href="#ipa431" title="IPA:431, USV:0329">l&#809;</a></span></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>$</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Syllabic</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'><a
  href="#ipa432" title="IPA:432, USV:032F">a&#815;</a></span></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>$$</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Non-syllabic</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'><a
  href="#ipa406" title="IPA:406, USV:0330">a&#816;</a></span></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>$$$</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Creaky
  voiced</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL";
  color:blue'>&#7567;</span></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>symbol followed by</span><span style='font-size:9.0pt;font-family:
  "Courier New";color:blue'> $$$$ </span><span style='font-size:9.0pt;
  font-family:"Arial Narrow",sans-serif;color:blue'>e.g.</span><span
  style='font-size:9.0pt;font-family:"Courier New";color:blue'> a$$$$</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>Retroflex hooks<a href="#_ftn5" name="_ftnref5" title=""><span
  class=MsoFootnoteReference><span class=MsoFootnoteReference><span lang=EN-GB
  style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;color:blue'>[5]</span></span></span></a></span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'><a
  href="#ipa402" title="IPA:402, USV:0325">n&#805;</a></span></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>%</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Voiceless</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'><a
  href="#ipa403" title="IPA:403, USV:032C">s&#812;</a></span></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>%%</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Voiced</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'><a
  href="#ipa405" title="IPA:405, USV:0324">s&#804;</a></span></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>%%%</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Breathy
  voiced</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL";
  color:blue'>&#7552;</span></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>symbol followed by</span><span style='font-size:9.0pt;font-family:
  "Arial Narrow",sans-serif;color:blue'> </span><span lang=EN-GB
  style='font-size:9.0pt;font-family:"Courier New";color:blue'>%%%% </span><span
  style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>e.g.</span><span style='font-size:9.0pt;font-family:
  "Courier New";color:blue'> b%%%%</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>Palatal hooks<a href="#_ftn6" name="_ftnref6" title=""><span
  class=MsoFootnoteReference><span class=MsoFootnoteReference><span lang=EN-GB
  style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;color:blue'>[6]</span></span></span></a></span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'><a
  href="#ipa402b" title="IPA:402, USV:030A">&#331;&#778;</a></span></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>@</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Voiceless
  (diacritics are sometimes placed above a symbol with a descender)</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.5pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'><a
  href="#ipa402b" title="IPA:402, USV:030A">&#331;</a>&#781;</span></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>@@</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Syllabic
  (diacritics are sometimes placed above a symbol with a descender)</span></p>
  </td>
 </tr>
  <td width=43 valign=top style='width:.45in;border-top:solid windowtext 1.5pt;
  border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'><a
  href="#ipa408" title="IPA:408, USV:032A">t&#810;</a></span></p>
  </td>
  <td width=84 style='width:63.0pt;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>{</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Dental</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'><a
  href="#ipa409" title="IPA:409, USV:033A">t&#826;</a></span></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>{{</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Apical</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'><a
  href="#ipa410" title="IPA:410, USV:033B">t&#827;</a></span></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>{{{</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Laminal</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'><a
  href="#ipa407" title="IPA:407, USV:033C">t&#828;</a></span></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>{{{{</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Linguolabial</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL";
  color:black'><a href="#ipa497" title="IPA:497, USV:0323">t&#803;</a></span></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New";
  color:black'>{{{{{</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:black'>Closer variety / Fricative</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL";
  color:black'><a href="#ipa424" title="IPA:424, USV:0303">e&#771;</a></span></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New";
  color:black'>~</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:black'>Nasalised</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'><a
  href="#ipa209" title="IPA:209, USV:026B">&#619;</a></span></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>l~~</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Velarized
  or pharyngealized<a href="#_ftn7" name="_ftnref7" title=""><span
  class=MsoFootnoteReference><span class=MsoFootnoteReference><span lang=EN-GB
  style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>[7]</span></span></span></a></span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'><a
  href="#ipa415" title="IPA:415, USV:0308">e&#776;</a></span></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>*</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Centralised</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'><a
  href="#ipa416" title="IPA:416, USV:033D">e&#829;</a></span></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>**</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Mid
  centralised</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt;page-break-after:avoid'><span
  style='font-family:"Charis SIL"'><a href="#ipa505" title="IPA:505, USV:0306">e&#774;</a></span></p>
  </td>
  <td width=84 valign=top style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-family:"Courier New"'>***</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Extra
  short</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt;page-break-after:avoid'><span
  style='font-family:"Charis SIL";color:black'><a href="#ipa493"
  title="IPA:493, USV:0307">e&#775;</a></span></p>
  </td>
  <td width=84 valign=top style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-family:"Courier New";color:black'>****</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:black'>Palatalization/Centralization</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt;page-break-after:avoid'><span
  style='font-family:"Charis SIL";color:blue'>m&#784;</span></p>
  </td>
  <td width=84 valign=top style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-family:"Courier New";color:blue'>*****</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'><a
  href="#ipa433" title="IPA:433, USV:0361">k&#865;p</a></span></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>#&amp;</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table style='line-height:12.0pt'><span style='font-size:
  9.0pt;font-family:"Arial Narrow",sans-serif'>Double articulation / affricate<a
  href="#_ftn8" name="_ftnref8" title=""><span class=MsoFootnoteReference><span
  class=MsoFootnoteReference><span style='font-size:9.0pt;
  font-family:"Arial Narrow",sans-serif'>[8]</span></span></span></a></span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'><a
  href="#ipa509b" title="IPA:(509), USV:035C">t&#860;s</a></span></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>@&amp;</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table style='line-height:12.0pt'><span style='font-size:
  9.0pt;font-family:"Arial Narrow",sans-serif'>Double articulation / affricate<a
  href="#_ftn9" name="_ftnref9" title=""><span class=MsoFootnoteReference><span
  class=MsoFootnoteReference><span style='font-size:9.0pt;
  font-family:"Arial Narrow",sans-serif'>[9]</span></span></span></a></span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'><a
  href="#ipa413" title="IPA:413, USV:031F">u&#799;</a></span></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>+</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Advanced</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'><a
  href="#ipa414" title="IPA:414, USV:0320">i&#800;</a></span></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>_</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Retracted</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'><a
  href="#ipa429" title="IPA:429, USV:031D">e&#797;</a></span></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>++</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Raised</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'><a
  href="#ipa430" title="IPA:430, USV:031E">e&#798;</a></span></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>_</span><span
  style='font-size:9.0pt;font-family:"Charis SIL"'>&#8200;</span><span
  style='font-size:9.0pt;font-family:"Courier New"'>_</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Lowered</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'><a
  href="#ipa417" title="IPA:417, USV:0318">e&#792;</a></span></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>+++</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>+ATR</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'><a
  href="#ipa418" title="IPA:418, USV:0319">e&#793;</a></span></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>_</span><span
  style='font-size:9.0pt;font-family:"Charis SIL"'>&#8200;</span><span
  style='font-size:9.0pt;font-family:"Courier New"'>_</span><span
  style='font-size:9.0pt;font-family:"Charis SIL"'>&#8200;</span><span
  style='font-size:9.0pt;font-family:"Courier New"'>_</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>-ATR</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'><a
  href="#ipa411" title="IPA:411, USV:0339">e&#825;</a></span></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>++++</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>More
  rounded</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL"'><a
  href="#ipa412" title="IPA:412, USV:031C">e&#796;</a></span></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New"'>_</span><span
  style='font-size:9.0pt;font-family:"Charis SIL"'>&#8200;</span><span
  style='font-size:9.0pt;font-family:"Courier New"'>_</span><span
  style='font-size:9.0pt;font-family:"Charis SIL"'>&#8200;</span><span
  style='font-size:9.0pt;font-family:"Courier New"'>_</span><span
  style='font-size:9.0pt;font-family:"Charis SIL"'>&#8200;</span><span
  style='font-size:9.0pt;font-family:"Courier New"'>_</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif'>Less
  rounded</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL";
  color:blue'>o&#807;</span></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Courier New";
  color:blue'>_</span><span style='font-size:9.0pt;font-family:"Charis SIL";
  color:blue'>&#8200;</span><span style='font-size:9.0pt;font-family:
  "Courier New";color:blue'>_</span><span style='font-size:9.0pt;
  font-family:"Charis SIL";color:blue'>&#8200;</span><span lang=EN-GB
  style='font-size:9.0pt;font-family:"Courier New";color:blue'>_</span><span
  style='font-size:9.0pt;font-family:"Charis SIL";color:blue'>&#8200;</span><span
  style='font-size:9.0pt;font-family:"Courier New";color:blue'>_</span><span
  style='font-size:9.0pt;font-family:"Charis SIL";color:blue'>&#8200;</span><span
  style='font-size:9.0pt;font-family:"Courier New";color:blue'>_</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>open vowel </span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt;page-break-after:avoid'><span
  style='font-family:"Charis SIL";color:blue'>p&#840;</span></p>
  </td>
  <td width=84 valign=top style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-family:"Courier New";color:blue'>}}}</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>Fortis</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt;page-break-after:avoid'><span
  style='font-family:"Charis SIL";color:blue'>p&#7618;</span></p>
  </td>
  <td width=84 valign=top style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-family:"Courier New";color:blue'>}}}}</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>Lenis</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL";
  color:blue'>&#8594;</span></p>
  </td>
  <td width=84 valign=top style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-family:"Courier New";color:blue'>=&gt;</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>Becomes, is realized as</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-family:"Charis SIL";
  color:blue'>&#963;</span></p>
  </td>
  <td width=84 valign=top style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-family:"Courier New";color:blue'>s&gt;</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>Syllable</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.5pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;line-height:12.0pt'><span style='font-size:10.0pt;
  font-family:"Arial",sans-serif;color:blue'>&#847;</span></p>
  </td>
  <td width=84 valign=top style='width:63.0pt;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-family:"Courier New";color:blue'>=&lt;</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=table><span style='font-size:9.0pt;font-family:"Arial Narrow",sans-serif;
  color:blue'>Combining Grapheme Joiner</span></p>
  </td>
 </tr>
</table>


<h1>Appendix: IPA number chart</h1>

<p><span style='font-size:10.0pt;font-family:"Charis SIL";
color:green'>Green denotes IPA characters unsupported by this keyboard.</span></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=0
 style='width:462.25pt;border-collapse:collapse;border:none'>
 <thead>
  <tr>
   <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
   padding:0in 5.4pt 0in 5.4pt'>
   <p class=MsoNormal align=center style='margin-top:6.0pt;margin-right:0in;
   margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;text-align:center'><b><span
   style='font-size:8.0pt;font-family:"Arial",sans-serif'>Alph sorting key</span></b></p>
   </td>
   <td width=48 style='width:36.8pt;border:solid windowtext 1.0pt;border-left:
   none;padding:0in 5.4pt 0in 5.4pt'>
   <p class=MsoNormal align=center style='margin-top:6.0pt;margin-right:0in;
   margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;text-align:center'><b><span
   style='font-size:8.0pt;font-family:"Arial",sans-serif'>Glyph</span></b></p>
   </td>
   <td width=67 valign=top style='width:35.3pt;border:solid windowtext 1.0pt;
   border-left:none;padding:0in 5.4pt 0in 5.4pt'>
   <p class=MsoNormal align=center style='margin-top:6.0pt;margin-right:0in;
   margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;text-align:center'><b><span
   style='font-size:8.0pt;font-family:"Arial",sans-serif'>Key-strokes</span></b></p>
   </td>
   <td width=53 style='width:41.2pt;border:solid windowtext 1.0pt;border-left:
   none;padding:0in 5.4pt 0in 5.4pt'>
   <p class=MsoNormal align=center style='margin-top:6.0pt;margin-right:0in;
   margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;text-align:center'><b><span
   style='font-size:8.0pt;font-family:"Arial",sans-serif'>IPA No.</span></b></p>
   </td>
   <td width=51 style='width:38.65pt;border:solid windowtext 1.0pt;border-left:
   none;padding:0in 5.4pt 0in 5.4pt'>
   <p class=MsoNormal align=center style='margin-top:6.0pt;margin-right:0in;
   margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;text-align:center'><b><span
   style='font-size:8.0pt;font-family:"Arial",sans-serif'>USV</span></b></p>
   </td>
   <td width=135 style='width:103.6pt;border:solid windowtext 1.0pt;border-left:
   none;padding:0in 5.4pt 0in 5.4pt'>
   <p class=MsoNormal align=center style='margin-top:6.0pt;margin-right:0in;
   margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;text-align:center'><b><span
   style='font-size:8.0pt;font-family:"Arial",sans-serif'>Symbol Name</span></b></p>
   </td>
   <td width=211 style='width:168.75pt;border:solid windowtext 1.0pt;
   border-left:none;padding:0in 5.4pt 0in 5.4pt'>
   <p class=MsoNormal align=center style='margin-top:6.0pt;margin-right:0in;
   margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;text-align:center'><b><span
   style='font-size:8.0pt;font-family:"Arial",sans-serif'>IPA Phonetic
   Description</span></b></p>
   </td>
  </tr>
 </thead>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>1.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa304><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>a</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>a</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>304</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0061</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Lowercase
  A</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>open
  front unrounded vowel</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>2.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa324><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#592;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>a&gt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>324</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0250</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Turned
  A</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>near-open
  central vowel</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>3.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa305><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#593;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>a=</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>305</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0251</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Script
  A</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>open
  back unrounded vowel</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>4.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa313><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#594;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>o=</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>313</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0252</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Turned
  Script A</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>open
  back rounded vowel</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>5.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa325><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>æ</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>a&lt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>325</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>00E6</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Ash;
  Lowercase A-E ligature</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>near-open
  front unrounded vowel</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>6.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:black'>A</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:black'>A</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>701</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>0041</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Upper-case A</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>A</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>7.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa102><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>b</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>b</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>102</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0062</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Lowercase
  B</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  bilabial plosive</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>8.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa160><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#595;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>b&gt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>160</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0253</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Hooktop
  B</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  bilabial implosive</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>9.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa121><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#665;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>B=</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>121</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0299</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Small
  Capital B</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  bilabial trill</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>10.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa127><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#946;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>b=</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>127</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>03B2</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Beta</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  bilabial fricative</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>11.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:black'>B</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:black'>B</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>702</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>0042</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Upper-case B</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>B</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>12.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa107><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>c</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>c</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>107</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0063</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Lowercase
  C</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vl
  palatal plosive</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>13.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa163><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#392;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>c&gt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>163</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0188</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Hooktop
  C</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vl
  palatal implosive <i>(withdrawn, 1993)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>14.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL";
  color:green'>&#269;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>299</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>010D</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>C wedge</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>vl postalveolar affricate <i>(not IPA usage)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>15.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa138><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>ç</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>c=</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>138</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>00E7</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>C
  Cedilla</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vl
  palatal fricative</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>16.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa182><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#597;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>c&lt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>182</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0255</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Curly-tail
  C</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vl
  alveolo-palatal fricative</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>17.</p>
  </td>
  <td width=48 valign=top style='width:36.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL";
  color:green'>&#663;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 valign=top style='width:41.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>202</span></p>
  </td>
  <td width=51 valign=top style='width:38.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>0297</span></p>
  </td>
  <td width=135 valign=top style='width:103.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Stretched C</span></p>
  </td>
  <td width=211 valign=top style='width:168.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>postalveolar click <i>(superceded by 178, 1989)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>18.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:black'>C</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:black'>C</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>624 (=703)</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>0043</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Upper-case C</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Creak</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>19.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:black'>C</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:black'>C</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>703 (use 624)</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>0043</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Upper-case C</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>C (Creak)</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>20.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa104><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>d</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>d</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>104</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0064</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Lowercase
  D</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  dental or alveolar plosive</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>21.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa162><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#599;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>d&gt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>162</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0257</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Hooktop
  D</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  dental or alveolar implosive</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>22.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa106><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#598;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>d&lt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>106</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0256</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Right-tail
  D</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  retroflex plosive</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>23.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa219><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#7569;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>d&gt;$$$$</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>219</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>1D91</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Hooktop
  right-tail D</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  retroflex implosive<i> (not explicitly IPA approved)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>24.</p>
  </td>
  <td width=48 valign=top style='width:36.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL";
  color:green'>&#675;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 valign=top style='width:41.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>212</span></p>
  </td>
  <td width=51 valign=top style='width:38.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>02A3</span></p>
  </td>
  <td width=135 valign=top style='width:103.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>D-Z ligature</span></p>
  </td>
  <td width=211 valign=top style='width:168.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>vd alveolar affricate <i>(superceded by 104 + 133)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>25.</p>
  </td>
  <td width=48 valign=top style='width:36.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL";
  color:green'>&#676;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 valign=top style='width:41.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>214</span></p>
  </td>
  <td width=51 valign=top style='width:38.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>02A4</span></p>
  </td>
  <td width=135 valign=top style='width:103.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>D-Ezh ligature</span></p>
  </td>
  <td width=211 valign=top style='width:168.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>vd postalveolar affricate <i>(superceded by 104 + 135)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>26.</p>
  </td>
  <td width=48 valign=top style='width:36.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL";
  color:green'>&#677;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 valign=top style='width:41.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>216</span></p>
  </td>
  <td width=51 valign=top style='width:38.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>02A5</span></p>
  </td>
  <td width=135 valign=top style='width:103.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>D-Curly-tail-Z ligature</span></p>
  </td>
  <td width=211 valign=top style='width:168.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>vd alveolo-palatal affricate <i>(superceded by 104 + 183)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>27.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa131><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>ð</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>d=</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>131</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>00F0</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Eth</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  dental fricative</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>28.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:black'>D</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:black'>D</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>704</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>0044</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Upper-case D</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>D</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>29.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa302><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>e</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>e</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>302</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0065</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Lowercase
  E</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>close-mid
  front unrounded vowel</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>30.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa218><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#7498;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>e=^</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>218</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>1D4A</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Superscript
  schwa</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>mid
  central vowel release</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>31.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa322><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#601;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>e=</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>322</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0259</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Schwa</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>mid
  central vowel</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>32.</p>
  </td>
  <td width=48 valign=top style='width:36.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL";
  color:green'>&#602;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 valign=top style='width:41.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>327</span></p>
  </td>
  <td width=51 valign=top style='width:38.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>025A</span></p>
  </td>
  <td width=135 valign=top style='width:103.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Right-hook schwa</span></p>
  </td>
  <td width=211 valign=top style='width:168.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>R-coloured mid central vowel <i>(Equivalent to 322 + 419)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>33.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa397><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#600;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>E=</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>397</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0258</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Reversed
  E</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>close-mid
  central unrounded vowel</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>34.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa303><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#603;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>e&lt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>303</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>025B</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Epsilon</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>open-mid
  front unrounded vowel</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>35.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa396><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#666;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>e|</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>396</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>029A</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Closed
  epsilon</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>open-mid
  central rounded vowel<i> (superceded by 395, 1996)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>36.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa326><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#604;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>e&gt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>326</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>025C</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Reversed
  epsilon</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>open-mid
  central unrounded vowel</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>37.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa395><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#606;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>O&lt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>395</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>025E</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Closed
  reversed epsilon</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>open-mid
  central rounded vowel</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>38.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:black'>E</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:black'>E</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>705</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>0045</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Upper-case E</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>E</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>39.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa128><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>f</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>f</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>128</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0066</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Lowercase
  F</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vl
  labiodental fricative</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>40.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&#681;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>602</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>02A9</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>F-Eng ligature</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Velopharyngeal fricative</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>41.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:black'>F</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:black'>F</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>622 (=706)</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>0046</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Upper-case F</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Falsetto</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>42.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:black'>F</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:black'>F</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>706 (use 622)</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>0046</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Upper-case F</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>F (Falsetto)</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>43.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa110><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#609;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>g&lt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>110</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0261</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Opentail
  G</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  velar plosive<i> (equivalent to 210)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>44.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa166><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#608;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>g&gt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>166</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0260</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Hooktop
  G</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  velar implosive</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>45.</p>
  </td>
  <td width=48 valign=top style='width:36.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL";
  color:black'>g</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:black'>g</span></p>
  </td>
  <td width=53 valign=top style='width:41.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>210</span></p>
  </td>
  <td width=51 valign=top style='width:38.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>0067</span></p>
  </td>
  <td width=135 valign=top style='width:103.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Looptail G</span></p>
  </td>
  <td width=211 valign=top style='width:168.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>vd velar plosive <i>(equivalent to 110)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>46.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa112><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#610;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>G=</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>112</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0262</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Small
  Capital G</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  uvular plosive</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>47.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa168><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#667;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>G&gt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>168</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>029B</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Hooktop
  Small Capital G</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  uvular implosive</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>48.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:black'>G</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:black'>G</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>707</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>0047</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Upper-case G</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>G</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>49.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa141><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#611;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>g=</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>141</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0263</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Gamma</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  velar fricative</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>50.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa422><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#736;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>g=^</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>422</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>02E0</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Superscript
  Gamma</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>velarized</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>51.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa315><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#612;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>O&gt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>315</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0264</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Ram's
  Horns</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>close-mid
  back unrounded vowel</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>52.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa146><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>h</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>h</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>146</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0068</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Lowercase
  H</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vl
  glottal fricative</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>53.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa404><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#688;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>h^</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>404
  (=671)</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>02B0</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Superscript
  H</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>aspirated</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>54.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL";
  color:black'>&#688;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:black'>h^</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>671 (use 404)</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>02B0</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Left-sited superscript H</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Pre-aspiration</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>55.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa144><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#295;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>h&gt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>144</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0127</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Crossed
  H</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vl
  pharyngeal fricative</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>56.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa147><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#614;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>h&lt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>147</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0266</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Hooktop
  H</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  glottal fricative</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>57.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa175><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#615;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>H&gt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>175</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0267</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Hooked
  Heng</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>simultaneous
  vl postalveolar and velar fricative</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>58.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa171><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#613;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>y&lt;
  </span><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>or</span><span
  style='font-family:"Courier New"'> h=</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>171</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0265</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Turned
  H</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  labial-palatal approximant</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>59.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa173><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#668;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>H=</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>173</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>029C</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Small
  Capital H</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vl
  epiglottal fricative</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>60.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:black'>H</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:black'>H</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>708</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>0048</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Upper-case H</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>H</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>61.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa301><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>i</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>i</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>301</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0069</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Lowercase
  I</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>close
  front unrounded vowel</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>62.</p>
  </td>
  <td width=48 valign=top style='width:36.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL";
  color:green'>&#305;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 valign=top style='width:41.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>394</span></p>
  </td>
  <td width=51 valign=top style='width:38.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>0131</span></p>
  </td>
  <td width=135 valign=top style='width:103.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Undotted I</span></p>
  </td>
  <td width=211 valign=top style='width:168.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><i><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Not IPA usage</span></i></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>63.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa317><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#616;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>I=</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>317</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0268</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Barred
  I</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>close
  central unrounded vowel</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>64.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa399><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#617;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>i|</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>399</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0269</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Iota</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>near-close
  near-front unrounded vowel <i>(superseded by 319, 1989)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>65.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa319><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#618;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>i=</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>319</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>026A</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Small
  Capital I</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>near-close
  near-front unrounded vowel</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>66.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:black'>I</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:black'>I</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>709</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>0049</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Upper-case I</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>I</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>67.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa153><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>j</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>j</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>153</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>006A</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Lowercase
  J</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  palatal approximant</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>68.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa421><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#690;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>j^</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>421</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>02B2</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Superscript
  J</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>palatalized</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>69.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa139><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#669;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>j&lt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>139</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>029D</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Curly-tail
  J</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  palatal fricative</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>70.</p>
  </td>
  <td width=48 valign=top style='width:36.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL";
  color:green'>&#496;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 valign=top style='width:41.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>298</span></p>
  </td>
  <td width=51 valign=top style='width:38.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>01F0</span></p>
  </td>
  <td width=135 valign=top style='width:103.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>J wedge</span></p>
  </td>
  <td width=211 valign=top style='width:168.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>vd postalveolar affricate <i>(not IPA usage)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>71.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa108><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#607;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>j=</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>108</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>025F</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Barred
  Dotless J</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  palatal plosive</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>72.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa164><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#644;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>j&gt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>164</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0284</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Hooktop
  Barred Dotless J</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  palatal implosive</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>73.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:black'>J</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:black'>J</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>626 (=710)</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>004A</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Upper-case J</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Jaw</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>74.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:black'>J</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:black'>J</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>710 (use 626)</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>004A</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Upper-case J</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>J (Jaw)</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>75.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa109><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>k</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>k</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>109</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>006B</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Lowercase
  K</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vl
  velar plosive</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>76.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa165><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#409;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>k&gt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>165</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0199</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Hooktop
  K</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vl
  velar implosive <i>(withdrawn, 1993)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>77.</p>
  </td>
  <td width=48 valign=top style='width:36.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL";
  color:green'>&#670;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 valign=top style='width:41.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>291</span></p>
  </td>
  <td width=51 valign=top style='width:38.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>029E</span></p>
  </td>
  <td width=135 valign=top style='width:103.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Turned K</span></p>
  </td>
  <td width=211 valign=top style='width:168.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><i><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Withdrawn, 1979</span></i></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>78.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:black'>K</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:black'>K</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>711</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>004B</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Upper-case K</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>K</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>79.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa155><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>l</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>l</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>155</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>006C</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Lowercase
  L</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  dental or alveolar lateral approximant</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>80.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa426><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#737;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>l^</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>426</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>02E1</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Superscript
  L</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>lateral
  release</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>81.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa209><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#619;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>l~~</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>209</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>026B</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>L
  with tilde</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>velarized
  vd dental or alveolar lateral approximant</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>82.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa148><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#620;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>l=</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>148</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>026C</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Belted
  L</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vl
  dental or alveolar lateral fricative</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>83.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa156><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#621;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>l&lt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>156</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>026D</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Right-tail
  L</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  retroflex lateral approximant</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>84.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa158><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#671;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>L=</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>158</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>029F</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Small
  Capital L</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  velar lateral approximant</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>85.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa149><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#622;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>l&gt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>149</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>026E</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>L-Ezh
  ligature</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  dental or alveolar lateral fricative</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>86.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&#682;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>603</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>02AA</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>L-S ligature</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Lateralized [s]</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>87.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&#683;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>604</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>02AB</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>L-Z ligature</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Laterialized [z]</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>88.</p>
  </td>
  <td width=48 valign=top style='width:36.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL";
  color:green'>&#955;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 valign=top style='width:41.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>295</span></p>
  </td>
  <td width=51 valign=top style='width:38.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>03BB</span></p>
  </td>
  <td width=135 valign=top style='width:103.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Lambda</span></p>
  </td>
  <td width=211 valign=top style='width:168.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>vl dental or alveolar lateral fricative <i> (Not IPA usage)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>89.</p>
  </td>
  <td width=48 valign=top style='width:36.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL";
  color:green'>&#411;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 valign=top style='width:41.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>294</span></p>
  </td>
  <td width=51 valign=top style='width:38.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>019B</span></p>
  </td>
  <td width=135 valign=top style='width:103.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Barred lambda</span></p>
  </td>
  <td width=211 valign=top style='width:168.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>vl dental or alveolar lateral affricate <i> (Not IPA usage)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>90.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:black'>L</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:black'>L</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>625 (=712)</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>004C</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Upper-case L</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Larynx</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>91.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:black'>L</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:black'>L</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>712 (use 625)</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>004C</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Upper-case L</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>L (Larynx)</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>92.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa114><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>m</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>m</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>114</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>006D</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Lowercase
  M</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  bilabial nasal</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>93.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa115><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#625;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>m&gt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>115</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0271</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Left-tail
  M (at right)</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  labiodental nasal</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>94.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa316><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#623;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>u=</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>316</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>026F</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Turned
  M</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>close
  back unrounded vowel</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>95.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa154><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#624;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>w&gt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>154</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0270</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Turned
  M, Right Leg</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  velar approximant</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>96.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:black'>M</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:black'>M</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>713</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>004D</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Upper-case M</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>M</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>97.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa116><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>n</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>n</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>116</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>006E</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Lowercase
  N</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  dental or alveolar nasal</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>98.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa425><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#8319;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>n^</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>425</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>207F</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Superscript
  N</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>nasal
  release</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>99.</p>
  </td>
  <td width=48 valign=top style='width:36.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL";
  color:green'>&#414;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 valign=top style='width:41.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>293</span></p>
  </td>
  <td width=51 valign=top style='width:38.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>019E</span></p>
  </td>
  <td width=135 valign=top style='width:103.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>N, right leg</span></p>
  </td>
  <td width=211 valign=top style='width:168.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>syllabic nasal <i>(withdrawn, 1976)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>100.</p>
  </td>
  <td width=48 valign=top style='width:36.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa118><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#626;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>n=</span></p>
  </td>
  <td width=53 valign=top style='width:41.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>118</span></p>
  </td>
  <td width=51 valign=top style='width:38.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0272</span></p>
  </td>
  <td width=135 valign=top style='width:103.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Left-tail
  N (at left)</span></p>
  </td>
  <td width=211 valign=top style='width:168.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  palatal nasal</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>101.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa119><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#331;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>n&gt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>119</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>014B</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Eng</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  velar nasal</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>102.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa117><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#627;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>n&lt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>117</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0273</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Right-tail
  N</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  retroflex nasal</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>103.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa120><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#628;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>N=</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>120</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0274</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Small
  Capital N</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  uvular nasal</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>104.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:black'>N</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:black'>N</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>714</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>004E</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Upper-case N</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>N</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>105.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa307><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>o</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>o</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>307</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>006F</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Lowercase
  O</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>close-mid
  back rounded vowel</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>106.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa176><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#664;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>p=</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>176</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0298</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Bull's
  Eye</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>bilabial
  click</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>107.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa323><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#629;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>O=</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>323</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0275</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Barred
  O</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>close-mid
  central rounded vowel</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>108.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa310><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>ø</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>o&gt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>310</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>00F8</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Slashed
  O</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>close-mid
  front rounded vowel</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>109.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa311><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>œ</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>E&lt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>311</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0153</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Lowercase
  O-E ligature</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>open-mid
  front rounded vowel</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>110.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa312><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#630;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>E&gt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>312</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0276</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Small
  Capital O-E ligature</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>open
  front rounded vowel</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>111.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>Œ</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>627</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>0152</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Upper-case O-E ligature</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Oesophageal speech</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>112.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa306><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#596;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>o&lt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>306</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0254</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Open
  O</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>open-mid
  back rounded vowel</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>113.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa398><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#631;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>u|</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>398</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0277</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Closed
  omega</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>near-close
  near-back rounded vowel<i> (superceded by 321, 1989)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>114.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:black'>O</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:black'>O</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>715</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>004F</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Upper-case O</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>O</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>115.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa101><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>p</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>p</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>101</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0070</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Lowercase
  P</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vl
  bilabial plosive</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>116.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa159><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#421;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>p&gt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>159</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>01A5</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Hooktop
  p</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vl
  bilabial implosive <i>(withdrawn, 1993)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>117.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:black'>P</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:black'>P</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>716</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>0050</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Upper-case P</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>P</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>118.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa126><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#632;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>f=</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>126</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0278</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Phi</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vl
  bilabial fricative</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>119.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa111><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>q</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>q</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>111</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0071</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Lowercase
  Q</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vl
  uvular plosive</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>120.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa167><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#672;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>q&gt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>167</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>02A0</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Hooktop
  q</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vl
  uvular implosive <i>(withdrawn, 1993)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>121.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:black'>Q</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:black'>Q</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>717</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>0051</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Upper-case Q</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Q</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>122.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa122><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>r</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>r</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>122</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0072</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Lowercase
  R</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  dental or alveolar trill</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>123.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa124><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#638;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>r&gt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>124</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>027E</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Fish-hook
  R</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  dental or alveolar tap</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>124.</p>
  </td>
  <td width=48 valign=top style='width:36.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL";
  color:green'>&#636;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 valign=top style='width:41.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>206</span></p>
  </td>
  <td width=51 valign=top style='width:38.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>027C</span></p>
  </td>
  <td width=135 valign=top style='width:103.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Long-leg r</span></p>
  </td>
  <td width=211 valign=top style='width:168.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><i><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Withdrawn, 1989</span></i></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>125.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa181><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#634;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>L&gt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>181</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>027A</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Turned
  Long-leg R</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  alveolar lateral flap</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>126.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa125><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#637;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>r&lt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>125</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>027D</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Right-tail
  R</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  retroflex flap</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>127.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa151><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#633;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>r=</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>151</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0279</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Turned
  R</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  dental or alveolar approximant</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>128.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa152><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#635;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>R&lt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>152</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>027B</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Turned
  R, Right Tail</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  retroflex approximant</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>129.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa123><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#640;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>R=</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>123</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0280</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Small
  Capital R</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  uvular trill</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>130.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:black'>R</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:black'>R</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>718</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>0052</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Upper-case R</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>R</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>131.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa143><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#641;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>R&gt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>143</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0281</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Inverted
  Small Capital R</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  uvular fricative</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>132.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:black'>&#694;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:black'>R&gt;^</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>676</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>02B6</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Superscript inverted small capital R</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Uvularized</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>133.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa132><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>s</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>s</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>132</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0073</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Lowercase
  S</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vl
  alveolar fricative</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>134.</p>
  </td>
  <td width=48 valign=top style='width:36.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL"'>&#738;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>s^</span></p>
  </td>
  <td width=53 valign=top style='width:41.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>207</span></p>
  </td>
  <td width=51 valign=top style='width:38.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>02E2</span></p>
  </td>
  <td width=135 valign=top style='width:103.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Superscript
  S</span></p>
  </td>
  <td width=211 valign=top style='width:168.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><i><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Withdrawn,
  1989</span></i></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>135.</p>
  </td>
  <td width=48 valign=top style='width:36.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL";
  color:green'>š</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 valign=top style='width:41.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>297</span></p>
  </td>
  <td width=51 valign=top style='width:38.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>0161</span></p>
  </td>
  <td width=135 valign=top style='width:103.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>S wedge</span></p>
  </td>
  <td width=211 valign=top style='width:168.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>vl postalveolar fricative<i> (not IPA usage)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>136.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa136><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#642;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>s&lt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>136</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0282</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Right-Tail
  S (at left)</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vl
  retroflex fricative</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>137.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:black'>S</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:black'>S</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>719</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>0053</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Upper-case S</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>S</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>138.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa134><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#643;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>s=</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>134</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0283</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Esh</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vl
  postalveolar fricative</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>139.</p>
  </td>
  <td width=48 valign=top style='width:36.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL";
  color:green'>&#646;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 valign=top style='width:41.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>204</span></p>
  </td>
  <td width=51 valign=top style='width:38.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>0286</span></p>
  </td>
  <td width=135 valign=top style='width:103.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Curly-tail esh</span></p>
  </td>
  <td width=211 valign=top style='width:168.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><i><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Withdrawn, 1989</span></i></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>140.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa103><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>t</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>t</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>103</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0074</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Lowercase
  T</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vl
  dental or alveolar plosive</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>141.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa161><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#429;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>t&gt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>161</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>01AD</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Hooktop
  T</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vl
  dental or alveolar implosive <i>(withdrawn, 1993)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>142.</p>
  </td>
  <td width=48 valign=top style='width:36.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL";
  color:green'>&#427;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 valign=top style='width:41.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>208</span></p>
  </td>
  <td width=51 valign=top style='width:38.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>01AB</span></p>
  </td>
  <td width=135 valign=top style='width:103.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Left-hook T</span></p>
  </td>
  <td width=211 valign=top style='width:168.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>palatalized vl dental or alveolar plosive <i>(withdrawn, 1989)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>143.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa105><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#648;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>t&lt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>105</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0288</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Right-tail
  T</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vl
  retroflex plosive</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>144.</p>
  </td>
  <td width=48 valign=top style='width:36.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL";
  color:green'>&#678;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 valign=top style='width:41.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>211</span></p>
  </td>
  <td width=51 valign=top style='width:38.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>02A6</span></p>
  </td>
  <td width=135 valign=top style='width:103.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>T-S ligature</span></p>
  </td>
  <td width=211 valign=top style='width:168.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>vl dental or alveolar affricate <i>(superceded by 103 + 132)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>145.</p>
  </td>
  <td width=48 valign=top style='width:36.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL";
  color:green'>&#679;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 valign=top style='width:41.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>213</span></p>
  </td>
  <td width=51 valign=top style='width:38.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>02A7</span></p>
  </td>
  <td width=135 valign=top style='width:103.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>T-Esh ligature</span></p>
  </td>
  <td width=211 valign=top style='width:168.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>vl postalveolar affricate <i>(superceded by 103 + 134)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>146.</p>
  </td>
  <td width=48 valign=top style='width:36.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL";
  color:green'>&#680;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 valign=top style='width:41.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>215</span></p>
  </td>
  <td width=51 valign=top style='width:38.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>02A8</span></p>
  </td>
  <td width=135 valign=top style='width:103.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span lang=FR style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>T-Curly-tail-C ligature</span></p>
  </td>
  <td width=211 valign=top style='width:168.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>vl alveolo-palatal affricate <i>(superceded by 103 + 182)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>147.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa201><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#647;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>T|</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>201</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0287</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Turned
  T</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>dental
  click <i>(superceded by 177, 1989)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>148.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:black'>T</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:black'>T</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>720</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>0054</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Upper-case T</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>T</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>149.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa130><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#952;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>t=</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>130</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>03B8</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Theta</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vl
  dental fricative</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>150.</p>
  </td>
  <td width=48 valign=top style='width:36.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa217><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#7615;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>t=^</span></p>
  </td>
  <td width=53 valign=top style='width:41.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>217</span></p>
  </td>
  <td width=51 valign=top style='width:38.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>1DBF</span></p>
  </td>
  <td width=135 valign=top style='width:103.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Superscript
  theta</span></p>
  </td>
  <td width=211 valign=top style='width:168.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vl
  dental fricative release</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>151.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:Code2000;color:green'>&#920;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>628</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>0398</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Upper-case Greek Theta</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Protruded-tongue voice</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>152.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa308><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>u</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>u</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>308</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0075</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Lowercase
  U</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>close
  back rounded vowel</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>153.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa318><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#649;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>U=</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>318</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0289</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Barred
  U</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>close
  central rounded vowel</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>154.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa321><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#650;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>u&lt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>321</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>028A</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Upsilon</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>near-close
  near-back rounded vowel</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>155.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:black'>U</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:black'>U</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>721</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>0055</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Upper-case U</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>U</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>156.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa129><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>v</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>v</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>129</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0076</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Lowercase
  V</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  labiodental fricative</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>157.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL"'>&#11377;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>v&lt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>184</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>2C71</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>labiodental
  flap</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>158.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa150><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#651;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>v=</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>150</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>028B</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Cursive
  V</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  labiodental approximant</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>159.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:black'>&#7609;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:black'>v=^</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>673</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>1DB9</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Superscript cursive V</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Labiodentalized</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>160.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa314><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#652;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>u&gt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>314</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>028C</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Turned
  V</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>open-mid
  back unrounded vowel</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>161.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:black'>V</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:black'>V</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>621 (=722)</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>0056</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Upper-case V</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Voice</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>162.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:black'>V</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:black'>V</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>722 (use 621)</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>0056</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Upper-case V</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>V (Voice)</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>163.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa170><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>w</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>w</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>170</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0077</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Lowercase
  W</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  labial-velar approximant</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>164.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa420><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#695;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>w^</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>420</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>02B7</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Superscript
  W</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>labialized</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>165.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa169><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#653;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>w=</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>169</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>028D</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Turned
  W</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vl
  labial-velar fricative</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>166.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:black'>W</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:black'>W</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>623 (=723)</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>0057</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Upper-case W</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Whisper</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>167.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:black'>W</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:black'>W</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>723 (use 623)</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>0057</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Upper-case W</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>W (Whisper)</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>168.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa140><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>x</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>x</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>140</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0078</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Lowercase
  X</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vl
  velar fricative</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>169.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa292><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#739;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>x^</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>292</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>02E3</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Superscript
  X</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vl
  velar fricative release</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>170.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa142><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#967;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>x=</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>142</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>03C7</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Chi</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vl
  uvular fricative</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>171.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:black'>X</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:black'>X</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>724</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>0058</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Upper-case X</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>X</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>172.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa309><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>y</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>y</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>309</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0079</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Lowercase
  Y</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>close
  front rounded vowel</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>173.</p>
  </td>
  <td width=48 valign=top style='width:36.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL";
  color:black'>&#696;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:black'>y^</span></p>
  </td>
  <td width=53 valign=top style='width:41.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>496</span></p>
  </td>
  <td width=51 valign=top style='width:38.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>02B8</span></p>
  </td>
  <td width=135 valign=top style='width:103.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Superscript Y</span></p>
  </td>
  <td width=211 valign=top style='width:168.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>high-front rounding / palatalized <i>(not IPA usage)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>174.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa157><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#654;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>L&lt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>157</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>028E</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Turned
  Y</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  palatal lateral approximant</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>175.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa320><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#655;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>Y=</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>320</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>028F</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Small
  Capital Y</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>near-close
  near-front rounded vowel</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>176.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:black'>Y</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:black'>Y</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>725</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>0059</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Upper-case Y</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Y</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>177.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa133><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>z</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>z</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>133</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>007A</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Lowercase
  Z</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  alveolar fricative</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>178.</p>
  </td>
  <td width=48 valign=top style='width:36.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL";
  color:green'>ž</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 valign=top style='width:41.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>296</span></p>
  </td>
  <td width=51 valign=top style='width:38.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>017E</span></p>
  </td>
  <td width=135 valign=top style='width:103.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Z wedge</span></p>
  </td>
  <td width=211 valign=top style='width:168.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>vd postalveolar fricative <i>(not IPA usage)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>179.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa183><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#657;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>z&gt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>183</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0291</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Curly-tail
  Z</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  alveolo-palatal fricative</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>180.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa137><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#656;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>z&lt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>137</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0290</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Right-tail
  Z</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  retroflex fricative</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>181.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa135><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#658;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>z=</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>135</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0292</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Ezh;
  Tailed Z</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  postalveolar fricative</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>182.</p>
  </td>
  <td width=48 valign=top style='width:36.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL";
  color:green'>&#659;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 valign=top style='width:41.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>205</span></p>
  </td>
  <td width=51 valign=top style='width:38.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>0293</span></p>
  </td>
  <td width=135 valign=top style='width:103.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Curly-tail ezh</span></p>
  </td>
  <td width=211 valign=top style='width:168.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><i><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Withdrawn, 1989</span></i></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>183.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:black'>Z</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:black'>Z</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>726</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>005A</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Upper-case Z</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Z</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>184.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa113><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#660;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>?=</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>113</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0294</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Glottal
  Stop</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>glottal
  plosive</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>185.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa145><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#661;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>?&lt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>145</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0295</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Reversed
  Glottal Stop</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  pharyngeal fricative or approximant</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>186.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa172><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#673;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>Q=</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>172</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>02A1</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Barred
  Glottal Stop</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>epiglottal
  plosive</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>187.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa174><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#674;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>Q&lt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>174</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>02A2</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Barred
  Reversed Glottal Stop</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>vd
  epiglottal fricative or approximant</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>188.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa177><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#448;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>!&lt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>177</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>01C0</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Pipe</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>dental
  click</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>189.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa178><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#451;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>!</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>178</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>01C3</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Exclamation
  Point</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>(post)alveolar
  click </span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>190.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa179><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#450;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>!=</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>179</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>01C2</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Double-barred
  Pipe</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>palatoalveolar
  click</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>191.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa180><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#8214;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>!&gt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>180</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>01C1</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Double
  Vertical Line</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>alveolar
  lateral click</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>192.</p>
  </td>
  <td width=48 valign=top style='width:36.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL";
  color:green'>&#662;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 valign=top style='width:41.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>203</span></p>
  </td>
  <td width=51 valign=top style='width:38.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>0296</span></p>
  </td>
  <td width=135 valign=top style='width:103.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Inverted glottal stop</span></p>
  </td>
  <td width=211 valign=top style='width:168.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>alveolar lateral click<i> (superceded by 180, 1989)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>193.</p>
  </td>
  <td width=48 valign=top style='width:36.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL";
  color:green'>&#443;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 valign=top style='width:41.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>290</span></p>
  </td>
  <td width=51 valign=top style='width:38.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>01BB</span></p>
  </td>
  <td width=135 valign=top style='width:103.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Barred two</span></p>
  </td>
  <td width=211 valign=top style='width:168.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><i><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Withdrawn, 1976</span></i></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>194.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa401><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#700;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>]]</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>401</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>02BC</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Apostrophe</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>ejective</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>195.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa402><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#9676;&#805;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>%</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>402a</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0325</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Under-ring</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>voiceless</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>196.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa402b><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#9676;&#778;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>@</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>402b</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>030A</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Over-ring</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>voiceless
  (use if character has descender)</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>197.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL"'>&#9676;&#812;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>%%</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>403
  (=663, 664)</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>032C</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Subscript
  Wedge</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>voiced</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>198.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL"'>&#9676;&#804;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>%%%</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>405</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0324</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Subscript
  Umlaut</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>breathy
  voiced</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>199.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa406><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#9676;</span></a><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#816;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>$$$</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>406</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0330</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Subscript
  Tilde</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>creaky
  voiced</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>200.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa407><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#9676;</span></a><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#828;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>{{{{</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>407</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>033C</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Subscript
  Seagull</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>linguolabial</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>201.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa408><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#9676;</span></a><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#810;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>{</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>408</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>032A</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Subscript</span><span
   style='font-size:8.0pt;font-family:"Arial",sans-serif'> Bridge</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>dental</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>202.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL"'>&#9676;&#826;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>{{</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>409</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>033A</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Inverted
  Subscript Bridge</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>apical</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>203.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa410><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#9676;</span></a><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#827;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>{{{</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>410</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>033B</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Subscript
  Square</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>laminal</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>204.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa411><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#9676;</span></a><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#825;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>++++</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>411</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0339</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Subscript
  Right Half-ring</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>more
  rounded</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>205.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa412><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#9676;</span></a><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#796;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>____</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>412</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>031C</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Subscript
  Left Half-ring</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>less
  rounded</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>206.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa413><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#9676;&#799;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>+</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>413</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>031F</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Subscript
  Plus</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>advanced</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>207.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa414><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#9676;</span></a><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#800;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>_</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>414</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0320</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Under-bar</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>retracted</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>208.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa415><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#9676;</span></a><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#776;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>*</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>415</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0308</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Umlaut</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>centralized</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>209.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa416><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#9676;</span></a><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#829;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>**</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>416</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>033D</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Over-cross</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>mid-centralized</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>210.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa417><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#9676;</span></a><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#792;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>+++</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>417</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0318</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Advancing
  Sign</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>advanced
  tongue root</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>211.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL"'>&#9676;&#793;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>___</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>418</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0319</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Retracting
  Sign</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>retracted
  tongue root</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>212.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa419><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#9676;&#734;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>[[[</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>419</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>02DE</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Right
  Hook</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>rhoticity</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>213.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa423><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#740;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>?&lt;^</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>423</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>02E4</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Superscript
  reversed glottal stop</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>pharyngealized</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>214.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa424><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#9676;</span></a><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#771;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>~</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>424</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0303</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Superscript
  Tilde</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>nasalized</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>215.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa427><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#9676;&#794;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>]]]</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>427</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>031A</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Corner</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>no
  audible release</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>216.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL";
  color:green'>&#9676;&#820;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>428</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>0334</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Superimposed tilde</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Velarized or pharyngealized (use precomposed characters)</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>217.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL"'>&#9676;&#797;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>++</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>429</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>031D</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Raising
  Sign</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>raised</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>218.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL"'>&#9676;&#798;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>__</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>430</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>031E</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Lowering
  Sign</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>lowered</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>219.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa431><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#9676;</span></a><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#809;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>$</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>431</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0329</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Syllabicity
  Mark</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>syllabic</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>220.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa432><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#9676;</span></a><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#815;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>$$</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>432</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>032F</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Subscript
  Arch</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>non-syllabic</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>221.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa433><span style='font-size:12.0pt;font-family:
  "Charis SIL"'> </span></a><span style='font-size:12.0pt;font-family:"Charis SIL"'>&#865;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>#&amp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>433</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0361</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Top
  Tie Bar</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>affricate
  or double articulation</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>222.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa509b><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#860;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>@&amp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>433</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>035C</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Bottom
  Tie Bar</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>affricate
  or double articulation</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>223.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:Code2000;
  color:green'>&#9676;&#802;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>489</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>0322</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Subscript right hook</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Rhoticity<i> (Superseded by 419, 1989)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>224.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL";
  color:green'>&#761;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>490</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>?</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Open corner</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Release / burst <i>(not IPA usage)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>225.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa491><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>,</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>,</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>491</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>002C</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Comma</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>pause<i>
  (not IPA usage)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>226.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa492><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#699;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>]]]]</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>492</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>02BB</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Reversed
  apostrophe</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>weak
  aspiration<i> (withdrawn, 1979)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>227.</p>
  </td>
  <td width=48 valign=top style='width:36.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa493><span style='font-size:12.0pt;font-family:
  "Charis SIL";color:black'>&#9676;&#775;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:black'>****</span></p>
  </td>
  <td width=53 valign=top style='width:41.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>493</span></p>
  </td>
  <td width=51 valign=top style='width:38.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>0307</span></p>
  </td>
  <td width=135 valign=top style='width:103.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Over-dot</span></p>
  </td>
  <td width=211 valign=top style='width:168.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>palatalization/centralization <i>(withdrawn,1979)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>228.</p>
  </td>
  <td width=48 valign=top style='width:36.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL";
  color:green'>&#727;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 valign=top style='width:41.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>494</span></p>
  </td>
  <td width=51 valign=top style='width:38.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>02D7</span></p>
  </td>
  <td width=135 valign=top style='width:103.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Minus sign</span></p>
  </td>
  <td width=211 valign=top style='width:168.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>retracted variety (backed)<i> (use 414 or 418, 1989)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>229.</p>
  </td>
  <td width=48 valign=top style='width:36.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL";
  color:green'>&#726;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 valign=top style='width:41.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>495</span></p>
  </td>
  <td width=51 valign=top style='width:38.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>02D6</span></p>
  </td>
  <td width=135 valign=top style='width:103.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Plus sign</span></p>
  </td>
  <td width=211 valign=top style='width:168.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>advanced variety (fronted) <i>(use 413 or 417, 1989)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>230.</p>
  </td>
  <td width=48 valign=top style='width:36.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa497><span style='font-size:12.0pt;font-family:
  "Charis SIL";color:black'>&#9676;&#803;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:black'>{{{{{</span></p>
  </td>
  <td width=53 valign=top style='width:41.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>497</span></p>
  </td>
  <td width=51 valign=top style='width:38.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>0323</span></p>
  </td>
  <td width=135 valign=top style='width:103.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Under-dot</span></p>
  </td>
  <td width=211 valign=top style='width:168.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>closer variety / fricative <i>(use 429, 1989)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>231.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:Code2000;
  color:green'>&#9676;&#801;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>498</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>0321</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Subscript left hook</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>palatalized <i>(superseded by 421, 1989)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>232.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL";
  color:green'>&#9676;&#811;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>499</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>032B</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Subscript W</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>labialized <i>(superseded by 420, 1989)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>233.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa501><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#712;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>}</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>501</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>02C8</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Vertical
  Stroke (Superior)</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>primary
  stress </span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>234.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa502><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#716;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>}}</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>502</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>02CC</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Vertical
  Stroke (Inferior)</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>secondary
  stress</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>235.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa503><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#720;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>:</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>503</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>02D0</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Length
  Mark</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>length
  mark</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>236.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa504><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#721;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>::</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>504</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>02D1</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Half-length
  Mark</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>half-length</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>237.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa505><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#9676;</span></a><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#774;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>***</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>505</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0306</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Breve</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>extra-short</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>238.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa506><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>.</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>.</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>506
  (631, 632, 633)</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>002E</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Period</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>syllable
  break</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>239.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa507><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>|</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>.&lt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>507</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>007C</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Vertical
  Line</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>minor
  (foot) group</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>240.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa508><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#8214;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>.=</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>508</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>2016</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Double
  vertical line (thick)</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>major
  (intonation) group</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>241.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL"'> <a
  name=ipa509>&#8255;</a></span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>#=</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>509</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>203F</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Bottom
  Tie Bar</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>linking
  (absence of a break)</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>242.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa510><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#8599;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>#&gt;&gt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>510</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>2197</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Upward
  Diagonal Arrow</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>global
  rise</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>243.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa511><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#8600;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>#&lt;&lt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>511</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>2198</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Downward
  Diagonal Arrow</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>global
  fall</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>244.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa512><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#9676;&#779;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>@4</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>512</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>030B</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Double
  Acute Accent (over)</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>extra
  high level</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>245.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa513><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#9676;</span></a><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#769;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>@3</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>513</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0301</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Acute
  Accent (over)</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>high
  level</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>246.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa514><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#9676;</span></a><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#772;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>@2</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>514</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0304</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Macron</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>mid
  level</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>247.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa515><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#9676;</span></a><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#768;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>@1</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>515</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0300</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Grave
  Accent (over)</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>low
  level</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>248.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa516><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#9676;</span></a><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#783;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>@0</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>516</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>030F</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Double
  Grave Accent (over)</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>extra
  low level</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>249.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa517><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#xA71C;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>#&lt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>517</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>A71C</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Down
  Arrow</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>downstep</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>250.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa518><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#xA71B;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>#&gt;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>518</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>A71B</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Up
  Arrow</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>upstep</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>251.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa519><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#741;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>#4</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>519</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>02E5</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Extra-high
  Tone Bar</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>extra
  high level</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>252.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa520><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#742;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>#3</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>520</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>02E6</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>High
  Tone Bar</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>high
  level</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>253.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa521><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#743;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>#2</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>521</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>02E7</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Mid
  Tone Bar</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>mid
  level</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>254.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa522><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#744;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>#1</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>522</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>02E8</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Low
  Tone Bar</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>low
  level</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>255.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa523><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#745;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>#0</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>523</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>02E9</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Extra-low
  Tone Bar</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>extra
  low level</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>256.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL"'>&#9676;&#780;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>@13</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>524</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>030C</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Wedge</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>rising
  contour</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>257.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa525><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#9676;&#770;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>@31</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>525</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0302</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Circumflex</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>falling
  contour</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>258.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal align=left style='margin-top:3.0pt;margin-right:0in;
  margin-bottom:3.0pt;margin-left:0in;text-align:left;line-height:12.0pt'><a
  name=ipa526><span style='font-family:"Charis SIL";color:black'>&#9676;&#7620;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>@23</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>526</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>1DC4</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Macron
  plus acute accent</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>high
  rising contour</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>259.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal align=left style='margin-top:3.0pt;margin-right:0in;
  margin-bottom:3.0pt;margin-left:0in;text-align:left;line-height:12.0pt'><a
  name=ipa527><span style='font-family:"Charis SIL";color:black'>&#9676;&#7621;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>@12</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>527</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>1DC5</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Grave
  accent plus macron</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>low
  rising contour</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>260.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal align=left style='margin-top:3.0pt;margin-right:0in;
  margin-bottom:3.0pt;margin-left:0in;text-align:left;line-height:12.0pt'><a
  name=ipa528><span style='font-family:"Charis SIL";color:black'>&#9676;&#7624;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>@131</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>528</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>1DC8</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span lang=FR style='font-size:8.0pt;font-family:"Arial",sans-serif'>Grave
  plus acute plus grave accent</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>rising-falling
  contour</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>261.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa529><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#745;&#741;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>#04</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>529</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>02E9
  02E5</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Rising
  tone letter</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>rising
  contour</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>262.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa530><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#741;&#745;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>#40</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>530</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>02E5
  02E9</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Falling
  tone letter</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>falling
  contour</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>263.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa531><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#743;&#741;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>#24</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>531</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>02E7
  02E5</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>High-rising
  tone letter</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>high
  rising contour</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>264.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa532><span style='font-size:12.0pt;font-family:
  "Charis SIL"'>&#745;&#743;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>#12</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>532</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>02E9
  02E7</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Low-rising
  tone letter</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>low
  rising contour</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>265.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><a name=ipa533><span style='font-family:"Charis SIL";
  color:black'>&#744;&#741;&#744;</span></a></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>#141</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>533</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>02E8
  02E5 02E8</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Rising-falling
  tone letter</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>rising-falling
  contour</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>266.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&#9676;&#785;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>595</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>0311</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Superscript arch</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>long falling tone / advanced / palatal <i>(not IPA usage)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>267.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&#711;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>596</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>02C7</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Wedge; hác&#780;ek</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>falling-rising tone <i>(usage redefined,1989. See 524)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>268.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>ˆ</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>597</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>02C6</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Circumflex</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>rising-falling tone <i>(usage redefined, 1989. See 525)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>269.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&#9676;&#790;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>598</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>0316 / 02CE</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Subscript grave accent</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>low falling tone <i>(superseded (1989)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>270.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&#9676;&#791;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>599</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>0317 /  02CF</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Subscript acute accent</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>low rising tone <i>(superseded, 1989)</i></span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>271.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&#685;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>601</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>02AD</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Double bridge</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Bidental percussive</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>272.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&#10061;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>611</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>274D</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Balloon</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Unidentified segment(s)</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>273.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>*</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>612</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>002A</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Asterisk</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Placeholder symbol</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>274.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>(.)</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>631 (use 506)</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>002E</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Bracketed single period</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Short pause</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>275.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>(..)</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>632 (use 506)</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>002E 002E</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Bracketed double period</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Medium-length pause</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>276.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>(...)</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>633 (use 506)</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>002E 002E 002E</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Bracketed triple period</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Long pause</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>277.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&nbsp;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>634</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>1D191</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Forte</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Loud speech</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>278.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&nbsp;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>635</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>&nbsp;</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Fortissimo</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Louder speech</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>279.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&nbsp;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>636</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>&nbsp;</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Piano</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Quiet speech</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>280.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&nbsp;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>637</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>1D18F</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Pianissimo</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Quieter speech</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>281.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&nbsp;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>638</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>&nbsp;</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Allegro</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Fast speech</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>282.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&nbsp;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>639</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>&nbsp;</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Lento</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Slow speech</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>283.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:black'>1</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:black'>1</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>640</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>0031</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Numeral one</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Slight degree</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>284.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:black'>2</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:black'>2</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>641</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>0032</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Numeral two</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Moderate degree</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>285.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:black'>3</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:black'>3</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>642</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>0033</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Numeral three</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:black'>Extreme degree</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>286.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&#9676;&#838;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>651</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>0346</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Superscript bridge</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Dentolabial</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>287.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&#9676;&#845;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>652</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>034D</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Subscript double arrow</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Labial spreading</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>288.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&#9676;&#810;&#838;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>653</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>032A 0346</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Superscript+subscript bridge</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Bidental articulation</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>289.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&#9676;&#842;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>654</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>034A</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Superscript slashed tilde</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Denasal</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>290.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&#9676;&#843;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>655</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>034B</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Superscript dotted tilde</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Nasal escape</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>291.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&#9676;&#844;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>656</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>034C</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Superscript double tilde</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Velopharyngeal friction</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>292.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&#9676;&#840;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>657</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>0348</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Subscript double syllabicity mark</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Stronger articulation</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>293.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&#9676;&#841;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>658</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>0349</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Subscript corner</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Weaker articulation</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>294.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>\</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>659</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>005C</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Backslash</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Reiterated articulation</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>295.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&#9676;&#846;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>660</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>034E</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Subscript upward arrow-head</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Whistled articulation</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>296.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&#8595;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>661</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>2193</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Down full arrow</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Ingressive air flow</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>297.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&#8593;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>662</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>2191</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Up full arrow</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Egressive air flow</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>298.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&#748;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>663 (use 403)</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>02EC</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Left-sited subscript wedge</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Pre-voicing</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>299.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&#748;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>664 (=403)</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>02EC</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Right-sited subscript wedge</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Post-voicing</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>300.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&nbsp;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>665</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>&nbsp;</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Bracketed subscript wedge</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Partial voicing</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>301.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&nbsp;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>666</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>&nbsp;</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Left-bracketed subscript wedge</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Initial partial voicing</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>302.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&nbsp;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>667</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>&nbsp;</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Right-bracketed subscript wedge</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Final partial voicing</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>303.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&nbsp;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>668</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>&nbsp;</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Bracketed under-ring</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Partial devoicing</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>304.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&nbsp;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>669</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>&nbsp;</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Left-bracketed under-ring</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Initial partial devoicing</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>305.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&nbsp;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>670</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>&nbsp;</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Right-bracketed under-ring</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Final partial devoicing</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>306.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&#451;&#451;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>672</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>01C3 01C3</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Right-sited double exclamation point</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Ventricular</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>307.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&#9676;&#866;&#9676;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>674</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>0362</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Subscript right arrow</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Slurred articulation</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>308.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&#9676;&#839;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>675</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>0347</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Subscript equals sign</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Alveolarized</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>309.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&nbsp;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>677</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>&nbsp;</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Superscript double-barred H</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Faucalized</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>310.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&nbsp;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>678</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>&nbsp;</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Superscript O-E ligature</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Labialized: Open-rounded</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>311.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&#451;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>679</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>01C3</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Right-sited exclamation point</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Harsh</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>312.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&#9676;&#831;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>680</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>033F</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Superscript equals sign</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Unaspirated</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>313.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&#9676;&#852;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>681</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>0354</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Subscript left pointer</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Laterally offset to the right</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>314.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&#9676;&#853;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>682</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>0355</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Subscript right pointer</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Laterally offset to the left</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>315.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>&#9676;&#816;</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>683 (=406)</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0330</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Right-sited subscript tilde</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Creaky</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>316.</p>
  </td>
  <td width=48 valign=top style='width:36.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL"'>[</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>[</span></p>
  </td>
  <td width=53 valign=top style='width:41.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>901</span></p>
  </td>
  <td width=51 valign=top style='width:38.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>005B</span></p>
  </td>
  <td width=135 valign=top style='width:103.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Left
  Square Bracket</span></p>
  </td>
  <td width=211 valign=top style='width:168.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>begin
  phonetic transcription</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>317.</p>
  </td>
  <td width=48 valign=top style='width:36.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL"'>]</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>]</span></p>
  </td>
  <td width=53 valign=top style='width:41.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>902</span></p>
  </td>
  <td width=51 valign=top style='width:38.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>005D</span></p>
  </td>
  <td width=135 valign=top style='width:103.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Right
  Square Bracket</span></p>
  </td>
  <td width=211 valign=top style='width:168.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>end
  phonetic transcription</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>318.</p>
  </td>
  <td width=48 valign=top style='width:36.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL"'>/</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>/</span></p>
  </td>
  <td width=53 valign=top style='width:41.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>903</span></p>
  </td>
  <td width=51 valign=top style='width:38.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>002F</span></p>
  </td>
  <td width=135 valign=top style='width:103.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Forward
  Slash</span></p>
  </td>
  <td width=211 valign=top style='width:168.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>begin/end
  phonemic transcription</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>319.</p>
  </td>
  <td width=48 valign=top style='width:36.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL"'>(</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>(</span></p>
  </td>
  <td width=53 valign=top style='width:41.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>906</span></p>
  </td>
  <td width=51 valign=top style='width:38.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0028</span></p>
  </td>
  <td width=135 valign=top style='width:103.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Left
  parenthesis</span></p>
  </td>
  <td width=211 valign=top style='width:168.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>indistinguishable
  utterance (begin)</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>320.</p>
  </td>
  <td width=48 valign=top style='width:36.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL"'>)</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>)</span></p>
  </td>
  <td width=53 valign=top style='width:41.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>907</span></p>
  </td>
  <td width=51 valign=top style='width:38.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0029</span></p>
  </td>
  <td width=135 valign=top style='width:103.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Right
  parenthesis</span></p>
  </td>
  <td width=211 valign=top style='width:168.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>indistinguishable
  utterance (end)</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>321.</p>
  </td>
  <td width=48 valign=top style='width:36.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL"'>((</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>((</span></p>
  </td>
  <td width=53 valign=top style='width:41.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>908</span></p>
  </td>
  <td width=51 valign=top style='width:38.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0028
  0028</span></p>
  </td>
  <td width=135 valign=top style='width:103.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Left
  double parenthesis</span></p>
  </td>
  <td width=211 valign=top style='width:168.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Sound
  obscured (begin)</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>322.</p>
  </td>
  <td width=48 valign=top style='width:36.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:12.0pt;font-family:"Charis SIL"'>))</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New"'>))</span></p>
  </td>
  <td width=53 valign=top style='width:41.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>909</span></p>
  </td>
  <td width=51 valign=top style='width:38.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>0029
  0029</span></p>
  </td>
  <td width=135 valign=top style='width:103.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Right
  double parenthesis</span></p>
  </td>
  <td width=211 valign=top style='width:168.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif'>Sound
  obscured (end)</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>323.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>{</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Tahoma",sans-serif;
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>910</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>007B</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Left brace</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Begin prosodic notation</span></p>
  </td>
 </tr>
 <tr>
  <td width=51 valign=top style='width:37.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p>324.</p>
  </td>
  <td width=48 style='width:36.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-family:"Charis SIL";color:green'>}</span></p>
  </td>
  <td width=67 valign=top style='width:35.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-family:"Courier New";
  color:green'>&nbsp;</span></p>
  </td>
  <td width=53 style='width:41.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>911</span></p>
  </td>
  <td width=51 style='width:38.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>007D</span></p>
  </td>
  <td width=135 style='width:103.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>Right brace</span></p>
  </td>
  <td width=211 style='width:168.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p><span style='font-size:8.0pt;font-family:"Arial",sans-serif;
  color:green'>End prosodic notation</span></p>
  </td>
 </tr>
</table>

<p>&nbsp;</p>



<hr align=left size=1 width="33%">

<div id=ftn1>

<p class=MsoFootnoteText style='line-height:10.0pt'><a href="#_ftnref1"
name="_ftn1" title=""><span class=MsoFootnoteReference><span
class=MsoFootnoteReference><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>[1]</span></span></span></a>
<span style='font-family:"Charis SIL";color:black'>Use “</span><span
style='font-family:"Courier New";color:black'>&amp;</span><span
style='font-family:"Charis SIL";color:black'>”</span><span style='font-family:
"Charis SIL";color:black'> for Left-stem level tones, e.g. “</span><span
style='font-family:"Courier New";color:black'>&amp;0</span><span
style='font-family:"Charis SIL";color:black'>” becomes A712 (&#42770;). </span></p>

</div>

<div id=ftn2>

<p class=MsoFootnoteText style='line-height:10.0pt'><a href="#_ftnref2"
name="_ftn2" title=""><span class=MsoFootnoteReference><span style='font-family:
"Charis SIL"'><span class=MsoFootnoteReference><span style='font-size:8.0pt;
font-family:"Charis SIL"'>[2]</span></span></span></span></a><span
style='font-family:"Charis SIL"'> </span><span style='font-family:"Charis SIL"'>Glides
to and from any level (e.g. “</span><span style='font-family:"Courier New"'>#32</span><span
style='font-family:"Charis SIL"'>” becomes &#742;&#743;) and any sequence of
any two glides (e.g. “</span><span style='font-family:"Courier New"'>#314</span><span
style='font-family:"Charis SIL"'>” becomes &#742;&#744;&#741;).</span></p>

</div>

<div id=ftn3>

<p class=MsoFootnoteText><a href="#_ftnref3" name="_ftn3" title=""><span
class=MsoFootnoteReference><span class=MsoFootnoteReference><span
style='font-size:8.0pt;font-family:"Times New Roman",serif'>[3]</span></span></span></a>
These require the use of Charis SIL (http://scripts.sil.org/CharisSIL) or
Charis SIL (http://scripts.sil.org/CharisSIL) version 4.1 or greater. They will
turn into contours if used in Graphite applications.</p>

</div>

<div id=ftn4>

<p class=MsoFootnoteText style='margin-bottom:0in;margin-bottom:.0001pt;
line-height:10.0pt'><a href="#_ftnref4" name="_ftn4" title=""><span
class=MsoFootnoteReference><span style='font-family:"Charis SIL"'><span
class=MsoFootnoteReference><span style='font-size:8.0pt;font-family:"Charis SIL"'>[4]</span></span></span></span></a><span
style='font-family:"Charis SIL"'> The following characters can be
superscripted: 0123456789 + - = ( ) &#661; &#660; b &#946; c &#597; d ð f &#632;
g &#609; &#611; h &#614;  j &#607; &#669;
k l &#621;  &#671; m &#625; n &#626; &#627;
&#331; &#628; p r &#633; &#635; &#641; s &#642; &#643; t &#952; v &#651; w &#624;
x &#613; z &#657; &#656; &#658; a &#592;  &#7426;
&#593; e &#601; &#604; &#603;   i &#618;
&#616; o &#594; &#596; &#629;  &#652;
u &#623; &#650; &#649; y  </span></p>

</div>

<div id=ftn5>

<p class=MsoFootnoteText style='line-height:10.0pt'><a href="#_ftnref5"
name="_ftn5" title=""><span class=MsoFootnoteReference><span style='font-family:
"Charis SIL";color:#339966'><span class=MsoFootnoteReference><span
style='font-size:8.0pt;font-family:"Charis SIL";color:#339966'>[5]</span></span></span></span></a><span
style='font-family:"Charis SIL";color:black'> Retroflex hooks may be added to:
a </span><span style='font-family:"Charis SIL";color:black'>&#593; &#599; e
&#603; &#604; &#601; i &#596; &#643; u &#658; (&#7567; &#7568; &#7569; &#7570; &#7571;
&#7572; &#7573; &#7574; &#7575; &#7576; &#7577;  &#7578;)</span></p>

</div>

<div id=ftn6>

<p class=MsoFootnoteText style='line-height:10.0pt'><a href="#_ftnref6"
name="_ftn6" title=""><span class=MsoFootnoteReference><span style='font-family:
"Charis SIL";color:black'><span class=MsoFootnoteReference><span
style='font-size:8.0pt;font-family:"Charis SIL";color:black'>[6]</span></span></span></span></a><span
style='font-family:"Charis SIL";color:black'> Palatal hooks may be added to: b
d f &#609; k l m n p r s &#643; v x z (&#7552; &#7553; &#7554; &#7555; &#7556; &#7557;
&#7558; &#7559; &#7560; &#7561; &#7562; &#7563; &#7564; &#7565; &#7566;)</span></p>

</div>

<div id=ftn7>

<p class=MsoFootnoteText><a href="#_ftnref7" name="_ftn7" title=""><span
class=MsoFootnoteReference><span style='font-family:"Charis SIL";color:black'><span
class=MsoFootnoteReference><span style='font-size:8.0pt;font-family:"Charis SIL";
color:black'>[7]</span></span></span></span></a><span style='font-family:"Charis SIL";
color:black'> Available for </span><span style='font-family:"Charis SIL";
color:black'>&#7532;, &#7533;, &#7534;, &#619;, &#7535;, &#7536;, &#7537;, &#7538;,
&#7539;, &#7540;, &#7541; and &#7542;. </span></p>

</div>

<div id=ftn8>

<p class=MsoFootnoteText style='margin-bottom:0in;margin-bottom:.0001pt;
line-height:9.5pt'><a href="#_ftnref8" name="_ftn8" title=""><span
class=MsoFootnoteReference><span style='font-family:"Charis SIL";color:black'><span
class=MsoFootnoteReference><span style='font-size:8.0pt;font-family:"Charis SIL";
color:black'>[8]</span></span></span></span></a><span style='font-family:"Charis SIL";
color:black'> Typed between the characters. Thus </span><span style='font-family:
"Courier New";color:black'>k#&amp;p</span><span style='font-family:"Charis SIL";
color:black'>.</span></p>

</div>

<div id=ftn9>

<p class=MsoFootnoteText style='margin-bottom:0in;margin-bottom:.0001pt;
line-height:9.5pt'><a href="#_ftnref9" name="_ftn9" title=""><span
class=MsoFootnoteReference><span style='font-family:"Charis SIL";color:black'><span
class=MsoFootnoteReference><span style='font-size:8.0pt;font-family:"Charis SIL";
color:black'>[9]</span></span></span></span></a><span style='font-family:"Charis SIL";
color:black'> Typed between the characters. Thus </span><span style='font-family:
"Courier New";color:black'>t@&amp;s</span><span style='font-family:"Charis SIL";
color:black'>.</span></p>

</div>


