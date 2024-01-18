

<?php


$DATA = ["Wie gesund bist du körperlich?", "Ich nehme Nahrungsergänzungsmittel", "Ich nehme keine Nahrungsergänzungsmittel", "Wie wichtig ist köperliche Aktivität für
dich?", "Keine zusätzliche körperliche Aktivität", "Gewichte heben", "Gehen", "Wandern", "Joggen", "Rennen", "Schwimmen", "Tanzen", "Aerobics", "Pilates", "Team Sport", "Andere körperliche Aktivität", "Hast du das Gefühl, zu wenig, genügend
oder viel zu viel zusätzliche körperliche
Aktivitäten zu betreiben?", "An einem typischen Tag: Wie viele deiner
Malzeiten oder Snacks enthalten
Kohlenhydrate?", "An einem typischen Tag: Wie viele deiner
Malzeiten oder Snacks enthalten Protein?", "An einem typischen Tag: Wie viele deiner
Malzeiten oder Snacks enthalten
Gemüse?", "An einem typischen Tag: Wie viele deiner
Malzeiten oder Snacks enthalten Früchte?", "An einem typischen Tag: Wie viele deiner
Malzeiten kommen aus der Mikrowelle
oder sind schon fertig zubereitet?"];




// Keine zusätzliche körperliche Aktivität /
// Gewichte heben / Gehen / Wandern / Joggen /
// Rennen / Schwimmen / Tanzen / Aerobics /
// Pilates / Team Sport / Andere (Radio Buttons
// oder Checkboxen; “Andere” zusätzlich mit
// einzeiligem Eingabefeld; OK-Button)


$QUESTIONDATABASE = ['question_1', 'question_2', 'question_2_1', 'question_3', 'question_4', 'question_4_1', 'question_4_2', 'question_4_3', 'question_4_4', 'question_4_5', 'question_4_6', 'question_4_7', 'question_4_8', 'question_4_9', 'question_4_10', 'question_4_11', 'question_5', 'question_6', 'question_7', 'question_8', 'question_9', 'question_10'];


define("USERDATA",     []);

$QUESTIONS = ["Wie gesund bist du körperlich? ", "Nimmst du Nahrungsergänzungsmittel?", "Wie wichtig ist köperliche Aktivität für
dich?", "Welche zusätzliche körperliche Aktivität
betreibst du am meisten?", "Hast du das Gefühl, zu wenig, genügend
oder viel zu viel zusätzliche körperliche
Aktivitäten zu betreiben?", "An einem typischen Tag: Wie viele deiner
Malzeiten oder Snacks enthalten
Kohlenhydrate?", "An einem typischen Tag: Wie viele deiner
Malzeiten oder Snacks enthalten Protein?", "An einem typischen Tag: Wie viele deiner
Malzeiten oder Snacks enthalten
Gemüse?", "An einem typischen Tag: Wie viele deiner
Malzeiten oder Snacks enthalten Früchte?", "An einem typischen Tag: Wie viele deiner
Malzeiten kommen aus der Mikrowelle
oder sind schon fertig zubereitet?"];





$QUESTION_4 = ['question_4', 'question_4_1', 'question_4_2', 'question_4_3', 'question_4_4', 'question_4_5', 'question_4_6', 'question_4_6', 'question_4_7', 'question_4_8', 'question_4_9', 'question_4_10', 'question_4_10', 'question_4_11'];

$ALLQUESTIONS =  ['question_1', 'question_2', 'question_3', 'question_4', 'question_5', 'question_6', 'question_7', 'question_8', 'question_9', 'question_10'];



$QUESTION_2 = ['question_2', 'question_2_1'];


$FORMELEMENTS = ["   
                 
<p for='question_1'>$QUESTIONS[0]</p>
</fieldset>
<fieldset class='fieldset_input'>
<ul class='range_etiquetes'>
    <li class='left_range_etiquete'>Nicht gesund</li>
    <li class='right_range_etiquete'>Sehr gesund</li>
</ul>
<label for='question_1'></label>
<input type='range' min='1' max='5' value='3' step='0.5' class='slider' id='myRange' name='question_1' required>



 ", "   
 <p for='question_2'>$QUESTIONS[1]</p>
 </fieldset>
 <fieldset class='fieldset_input fieldset_imput_radio' >
 <div class='radio_plus_label'>
 <label for='ja'>ja</label>
 <input type='radio'  name='question_2' id='ja' />
 </div>
 <div class='radio_plus_label'>
 <label for='nein'>nein</label>
 <input type='radio'  name='question_2_1'  id='nein'/>
 </div>
 
 ", "   
 <p for='question_3'>$QUESTIONS[2]</p>
 </fieldset>
 <fieldset class='fieldset_input'>
 <ul class='range_etiquetes'>
 <li class='left_range_etiquete'>Nicht wichtig</li>
 <li class='right_range_etiquete'>Sehr Wichtig</li>
</ul>
  <label for='question_3'></label>
  <input type='range' min='1' max='5' value='3' class='slider' id='myRange' name='question_3' required>", "  
  <p for='question_4'>$QUESTIONS[3]</p>
  </fieldset>
  <fieldset class='fieldset_input fieldset_checkbox'>
  <div class='ckeckbox_plus_label'>
  <label for='question_4'>Keine zusätzliche körperliche Aktivität</label>
  <input type='checkbox'  name='question_4' />
  </div>
  <div class='ckeckbox_plus_label'>
  <label for='question_4_1'>Gewichte heben</label>
  <input type='checkbox'  name='question_4_1' />
  </div>
  <div class='ckeckbox_plus_label'>
  <label for='question_4_2'>Gehen</label>
  <input type='checkbox'  name='question_4_2' />
  </div>
  <div class='ckeckbox_plus_label'>
  <label for='question_4_3'>Wandern</label>
  <input type='checkbox'  name='question_4_3' />
  </div>
  <div class='ckeckbox_plus_label'>
  <label for='question_4_4'>Joggen</label>
  <input type='checkbox'  name='question_4_4' />
  </div>
  <div class='ckeckbox_plus_label'>
  <label for='question_4_5'>Rennen</label>
  <input type='checkbox'  name='question_4_5' />
  </div>
  <div class='ckeckbox_plus_label'>
  <label for='question_4_6'>Schwimmen</label>
  <input type='checkbox'  name='question_4_6' />
  </div>
  <div class='ckeckbox_plus_label'>
  <label for='question_4_7'>Tanzen</label>
  <input type='checkbox'  name='question_4_7' />
  </div>
  <div class='ckeckbox_plus_label'>
  <label for='question_4_8'>Aerobics</label>
  <input type='checkbox'  name='question_4_8' />
  </div>
  <div class='ckeckbox_plus_label'>
  <label for='question_4_9'>Pilates</label>
  <input type='checkbox'  name='question_4_9' />
  </div>
  <div class='ckeckbox_plus_label'>
  <label for='question_4_10'>Team Sport</label>
  <input  type='checkbox'  name='question_4_10' />
  </div>
  <div class='ckeckbox_plus_label'>
  <label for='question_4_11'>Andere</label>
  <input type='checkbox'  name='question_4_11' />
  </div>
  
 ", "   
 <p for='question_5'>$QUESTIONS[4]</p>
 </fieldset>
 <fieldset class='fieldset_input'>
 <ul class='range_etiquetes'>
    <li class='left_range_etiquete'>Zu wenig</li>
    <li class='right_range_etiquete'>Zu viel</li>
</ul>
 <label for='question_5'></label>
 <input type='range' min='0' max='5' value='3' class='slider' id='myRange' name='question_5'>

  ", "   
  <p for='question_6'>$QUESTIONS[5]</p>
  </fieldset>
  <fieldset class='fieldset_input'>
  <label for='question_6'>Gib eine zahl ein</label>
  <input type='number' min='0' max = '5' required name='question_6' />
 
", "   
<p for='question_7'>$QUESTIONS[6]</p>
</fieldset>
<fieldset class='fieldset_input'>
<label for='question_7'>Gib eine zahl ein</label>
<input type='number' name='question_7' min='0' max = '5' required />

", "   
<p for='question_8'>$QUESTIONS[7]</p>
</fieldset>
<fieldset class='fieldset_input'>
<label for='question_8'>Gib eine zahl ein</label>
<input type='number' name='question_8' min='0' max = '5' required />
  

", "  
<p for='question_9'>$QUESTIONS[8]</p>
</fieldset>
<fieldset class='fieldset_input'>
<label for='question_9'>Gib eine zahl ein</label>
<input type='number' name='question_9' min='0' max = '5' required/>
  

", "   
<p for='question_10'>$QUESTIONS[9]</p>
</fieldset>
<fieldset class='fieldset_input'>
<label for='question_10'>Gib eine zahl ein</label>
<input type='number' name='question_10' min='0' max = '5' required/>
      

"];
