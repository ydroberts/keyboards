<?php
   $pagename = 'NTL OneKey 新傣文一键 Keyboard Help';
   $pagetitle = $pagename;
   require_once('header.php');
?>

<p>This keyboard was developed to input New Tai Lue (新傣文), a script which is used for the Tai Lue (aka ᦅᧄᦺᦑᦟᦹᧉ, Tai Lü, Dai Lue, Xishuangbanna Dai, 傣泐语, 傣仂语, etc.) language in Xishuangbanna Prefecture in Yunnan, China. The NTL OneKey keyboard is designed to work with the <a href="https://github.com/silnrsi/font-nokyung/releases" target="_blank">Nokyung</a> font, but you can use this keyboard with any Unicode New Tai Lue font.</p>

<h2>Desktop Layout</h2>
<p>The NTL OneKey desktop keyboard layout enables users to input almost any new Tai Lue character with one press of a single key (possibly in combination with the Shift key).

  <div id='osk-container'>
    <div id='osk' data-states='default shift'></div>
  </div>

<p>Please note that the following letters or punctuation marks can be inputted by pressing the appropriate key twice:

  <style type="text/css">
    table.ntlkeys { border-collapse: collapse; width: 25%; font-size: small; }
    .ntlkeys td,
    .ntlkeys th {
       border: 1px solid #cccccc; text-align: left; padding: 5px;
    }
    .ntlkeys tr:nth-child(even) { background-color: #eeeeee; }
    .ntlkeys tr { height: 2.2em; }
  </style>
  <table class="ntlkeys">
    <tr>
      <th>Character</th>
      <th>Unicode</th>
      <th>Keystroke</th>
    </tr>
    <tr>
      <td>ᦶ</td>
      <td>U+19B6</td>
      <td>ww</td>
    </tr>
    <tr>
      <td>&rsquo;</td>
      <td>U+2019</td>
      <td>&#0039;&#8202;&#0039;</td>
    </tr>
    <tr>
      <td>&rdquo;</td>
      <td>U+201D</td>
      <td>&#0034;&#8202;&#0034;</td>
    </tr>
    <tr>
      <td>—</td>
      <td>U+2014</td>
      <td>~~</td>
    </tr>
    <tr>
      <td>《</td>
      <td>U+300A</td>
      <td>&lt;&lt;</td>
    </tr>
    <tr>
      <td>》</td>
      <td>U+300B</td>
      <td>&gt;&gt;</td>
    </tr>
    <tr>
      <td>．</td>
      <td>U+FF0E</td>
      <td>..</td>
    </tr>
  </table>

  <H3>Keystroke Chart</H3>
  <table class="ntlkeys" style="float: left; margin-right: 5px">
    <tr>
      <th>Character</th>
      <th>Unicode</th>
      <th>Keystroke</th>
    </tr>
    <tr>
      <td>ᦀ</td>
      <td>U+1980</td>
      <td>a</td>
    </tr>
    <tr>
      <td>ᦁ</td>
      <td>U+1981</td>
      <td>A</td>
    </tr>
    <tr>
      <td>ᦂ</td>
      <td>U+1982</td>
      <td>k</td>
    </tr>
    <tr>
      <td>ᦃ</td>
      <td>U+1983</td>
      <td>x</td>
    </tr>
    <tr>
      <td>ᦄ</td>
      <td>U+1984</td>
      <td>g</td>
    </tr>
    <tr>
      <td>ᦅ</td>
      <td>U+1985</td>
      <td>K</td>
    </tr>
    <tr>
      <td>ᦆ</td>
      <td>U+1986</td>
      <td>X</td>
    </tr>
    <tr>
      <td>ᦇ</td>
      <td>U+1987</td>
      <td>G</td>
    </tr>
    <tr>
      <td>ᦈ</td>
      <td>U+1988</td>
      <td>z</td>
    </tr>
    <tr>
      <td>ᦉ</td>
      <td>U+1989</td>
      <td>s</td>
    </tr>
    <tr>
      <td>ᦊ</td>
      <td>U+198A</td>
      <td>j</td>
    </tr>
    <tr>
      <td>ᦋ</td>
      <td>U+198B</td>
      <td>Z</td>
    </tr>
    <tr>
      <td>ᦌ</td>
      <td>U+198C</td>
      <td>S</td>
    </tr>
    <tr>
      <td>ᦍ</td>
      <td>U+198D</td>
      <td>J</td>
    </tr>
    <tr>
      <td>ᦎ</td>
      <td>U+198E</td>
      <td>t</td>
    </tr>
    <tr>
      <td>ᦏ</td>
      <td>U+198F</td>
      <td>y</td>
    </tr>
    <tr>
      <td>ᦐ</td>
      <td>U+1990</td>
      <td>n</td>
    </tr>
    <tr>
      <td>ᦑ</td>
      <td>U+1991</td>
      <td>T</td>
    </tr>
    <tr>
      <td>ᦒ</td>
      <td>U+1992</td>
      <td>Y</td>
    </tr>
    <tr>
      <td>ᦓ</td>
      <td>U+1993</td>
      <td>N</td>
    </tr>
    <tr>
      <td>ᦔ</td>
      <td>U+1994</td>
      <td>p</td>
    </tr>
    <tr>
      <td>ᦕ</td>
      <td>U+1995</td>
      <td>u</td>
    </tr>
    <tr>
      <td>ᦖ</td>
      <td>U+1996</td>
      <td>m</td>
    </tr>
    <tr>
      <td>ᦗ</td>
      <td>U+1997</td>
      <td>P</td>
    </tr>
    <tr>
      <td>ᦘ</td>
      <td>U+1998</td>
      <td>U</td>
    </tr>
    <tr>
      <td>ᦙ</td>
      <td>U+1999</td>
      <td>M</td>
    </tr>
    <tr>
      <td>ᦚ</td>
      <td>U+199A</td>
      <td>f</td>
    </tr>
    <tr>
      <td>ᦛ</td>
      <td>U+199B</td>
      <td>v</td>
    </tr>
    <tr>
      <td>ᦜ</td>
      <td>U+199C</td>
      <td>l</td>
    </tr>
    <tr>
      <td>ᦝ</td>
      <td>U+199D</td>
      <td>F</td>
    </tr>
    <tr>
      <td>ᦞ</td>
      <td>U+199E</td>
      <td>V</td>
    </tr>
    <tr>
      <td>ᦟ</td>
      <td>U+199F</td>
      <td>L</td>
    </tr>
    <tr>
      <td>ᦠ</td>
      <td>U+19A0</td>
      <td>h</td>
    </tr>
    <tr>
      <td>ᦡ</td>
      <td>U+19A1</td>
      <td>d</td>
    </tr>
  </table>
  <table class="ntlkeys" style="float: left; margin-right: 5px">
    <tr>
      <th>Character</th>
      <th>Unicode</th>
      <th>Keystroke</th>
    </tr>
    <tr>
      <td>ᦢ</td>
      <td>U+19A2</td>
      <td>b</td>
    </tr>
    <tr>
      <td>ᦣ</td>
      <td>U+19A3</td>
      <td>H</td>
    </tr>
    <tr>
      <td>ᦤ</td>
      <td>U+19A4</td>
      <td>D</td>
    </tr>
    <tr>
      <td>ᦥ</td>
      <td>U+19A5</td>
      <td>B</td>
    </tr>
    <tr>
      <td>ᦦ</td>
      <td>U+19A6</td>
      <td>i</td>
    </tr>
    <tr>
      <td>ᦧ</td>
      <td>U+19A7</td>
      <td>o</td>
    </tr>
    <tr>
      <td>ᦨ</td>
      <td>U+19A8</td>
      <td>I</td>
    </tr>
    <tr>
      <td>ᦩ</td>
      <td>U+19A9</td>
      <td>O</td>
    </tr>
    <tr>
      <td>ᦪ</td>
      <td>U+19AA</td>
      <td>[</td>
    </tr>
    <tr>
      <td>ᦫ</td>
      <td>U+19AB</td>
      <td>{</td>
    </tr>
    <tr>
      <td>ᦰ</td>
      <td>U+19B0</td>
      <td>/</td>
    </tr>
    <tr>
      <td>ᦱ</td>
      <td>U+19B1</td>
      <td>r</td>
    </tr>
    <tr>
      <td>ᦲ</td>
      <td>U+19B2</td>
      <td>R</td>
    </tr>
    <tr>
      <td>ᦳ</td>
      <td>U+19B3</td>
      <td>e</td>
    </tr>
    <tr>
      <td>ᦴ</td>
      <td>U+19B4</td>
      <td>E</td>
    </tr>
    <tr>
      <td>ᦵ</td>
      <td>U+19B5</td>
      <td>w</td>
    </tr>
    <tr>
      <td>ᦶ</td>
      <td>U+19B6</td>
      <td>ww</td>
    </tr>
    <tr>
      <td>ᦷ</td>
      <td>U+19B7</td>
      <td>W</td>
    </tr>
    <tr>
      <td>ᦸ</td>
      <td>U+19B8</td>
      <td>q</td>
    </tr>
    <tr>
      <td>ᦹ</td>
      <td>U+19B9</td>
      <td>Q</td>
    </tr>
    <tr>
      <td>ᦺ</td>
      <td>U+19BA</td>
      <td>@</td>
    </tr>
    <tr>
      <td>ᦻ</td>
      <td>U+19BB</td>
      <td>#</td>
    </tr>
    <tr>
      <td>ᦼ</td>
      <td>U+19BC</td>
      <td>$</td>
    </tr>
    <tr>
      <td>ᦽ</td>
      <td>U+19BD</td>
      <td>%</td>
    </tr>
    <tr>
      <td>ᦾ</td>
      <td>U+19BE</td>
      <td>^</td>
    </tr>
    <tr>
      <td>ᦿ</td>
      <td>U+19BF</td>
      <td>&</td>
    </tr>
    <tr>
      <td>ᧀ</td>
      <td>U+19C0</td>
      <td>*</td>
    </tr>
    <tr>
      <td>ᧁ</td>
      <td>U+19C1</td>
      <td>(</td>
    </tr>
    <tr>
      <td>ᧂ</td>
      <td>U+19C2</td>
      <td>)</td>
    </tr>
    <tr>
      <td>ᧃ</td>
      <td>U+19C3</td>
      <td>0</td>
    </tr>
    <tr>
      <td>ᧄ</td>
      <td>U+19C4</td>
      <td>_</td>
    </tr>
    <tr>
      <td>ᧅ</td>
      <td>U+19C5</td>
      <td>-</td>
    </tr>
    <tr>
      <td>ᧆ</td>
      <td>U+19C6</td>
      <td>+</td>
    </tr>
    <tr>
      <td>ᧇ</td>
      <td>U+19C7</td>
      <td>=</td>
    </tr>
  </table>
  <table class="ntlkeys">
    <tr>
      <th>Character</th>
      <th>Unicode</th>
      <th>Keystroke</th>
    </tr>
    <tr>
      <td>ᧈ</td>
      <td>U+19C8</td>
      <td>c</td>
    </tr>
    <tr>
      <td>ᧉ</td>
      <td>U+19C9</td>
      <td>C</td>
    </tr>
    <tr>
      <td>᧐</td>
      <td>U+19D0</td>
      <td>`</td>
    </tr>
    <tr>
      <td>᧑</td>
      <td>U+19D1</td>
      <td>1</td>
    </tr>
    <tr>
      <td>᧒</td>
      <td>U+19D2</td>
      <td>2</td>
    </tr>
    <tr>
      <td>᧓</td>
      <td>U+19D3</td>
      <td>3</td>
    </tr>
    <tr>
      <td>᧔</td>
      <td>U+19D4</td>
      <td>4</td>
    </tr>
    <tr>
      <td>᧕</td>
      <td>U+19D5</td>
      <td>5</td>
    </tr>
    <tr>
      <td>᧖</td>
      <td>U+19D6</td>
      <td>6</td>
    </tr>
    <tr>
      <td>᧗</td>
      <td>U+19D7</td>
      <td>7</td>
    </tr>
    <tr>
      <td>᧘</td>
      <td>U+19D8</td>
      <td>8</td>
    </tr>
    <tr>
      <td>᧙</td>
      <td>U+19D9</td>
      <td>9</td>
    </tr>
    <tr>
      <td>᧚</td>
      <td>U+19DA</td>
      <td>!</td>
    </tr>
    <tr>
      <td>᧞</td>
      <td>U+19DE</td>
      <td>]</td>
    </tr>
    <tr>
      <td>᧟</td>
      <td>U+19DF</td>
      <td>}</td>
    </tr>
    <tr>
      <td>&lsquo;</td>
      <td>U+2018</td>
      <td>&#0039;</td>
    </tr>
    <tr>
      <td>&rsquo;</td>
      <td>U+2019</td>
      <td>&#0039;&#8202;&#0039;</td>
    </tr>
    <tr>
      <td>&ldquo;</td>
      <td>U+201C</td>
      <td>&#0034;</td>
    </tr>
    <tr>
      <td>&rdquo;</td>
      <td>U+201D</td>
      <td>&#0034;&#8202;&#0034;</td>
    </tr>
    <tr>
      <td>。</td>
      <td>U+3002</td>
      <td>.</td>
    </tr>
    <tr>
      <td>，</td>
      <td>U+FF0C</td>
      <td>,</td>
    </tr>
    <tr>
      <td>、</td>
      <td>U+3001</td>
      <td>\</td>
    </tr>
    <tr>
      <td>？</td>
      <td>U+FF1F</td>
      <td>?</td>
    </tr>
    <tr>
      <td>！</td>
      <td>U+FF01</td>
      <td>|</td>
    </tr>
    <tr>
      <td>：</td>
      <td>U+FF1A</td>
      <td>:</td>
    </tr>
    <tr>
      <td>；</td>
      <td>U+FF1B</td>
      <td>;</td>
    </tr>
    <tr>
      <td>…</td>
      <td>U+2026</td>
      <td>~</td>
    </tr>
    <tr>
      <td>—</td>
      <td>U+2014</td>
      <td>~~</td>
    </tr>
    <tr>
      <td>（</td>
      <td>U+FF08</td>
      <td>&lt;</td>
    </tr>
    <tr>
      <td>）</td>
      <td>U+FF09</td>
      <td>&gt;</td>
    </tr>
    <tr>
      <td>《</td>
      <td>U+300A</td>
      <td>&lt;&lt;</td>
    </tr>
    <tr>
      <td>》</td>
      <td>U+300B</td>
      <td>&gt;&gt;</td>
    </tr>
    <tr>
      <td>．</td>
      <td>U+FF0E</td>
      <td>..</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ffffff;"></td>
    </tr>
  </table>

  <h2>Mobile/Tablet Layout</h2>
<p>The NTL OneKey mobile/tablet keyboard is not constrained by physical keyboard layouts, so its layout differs from the desktop keyboard layout. However, it achieves a similar design goal, enabling users to input most New Tai Lue alphabetic characters with a tap (or long-press) of a single key.</p>

<p>For any key which has a gray dot in the upper-right corner, the user can input at least one other character through a long-press of that key. For example, a long-press of the &lsquo;ᦀ&rsquo; key allows the user to input &lsquo;ᦁ&rsquo;, a long-press of the &lsquo;¥&rsquo; key (in the numeric layer) allows the user to input &lsquo;₭&rsquo; or &lsquo;฿&rsquo;, etc.</p>

<div id='osk-tablet-container'>
  <div id='osk-tablet' data-states='default shift numeric'></div>
</div>

