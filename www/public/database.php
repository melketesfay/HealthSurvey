

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
<label for='question_1'>1:Überhaupt nicht gesund 5: Extrem Gesund</label>
<input type='range' min='1' max='5' value='3' step='0.5' class='slider' id='myRange' name='question_1' required>



 ","   
 <p for='question_2'>$QUESTIONS[1]</p>
 </fieldset>
 <fieldset class='fieldset_input' >
 <label for='ja'>ja</label>

 <input type='radio'  name='question_2' id='ja' />

 <label for='nein'>nein</label>
 <input type='radio'  name='question_2_1'  id='nein'/>

 
 ","   
 <p for='question_3'>$QUESTIONS[2]</p>
 </fieldset>
 <fieldset class='fieldset_input'>

  <label for='question_3'>1:Überhaupt nicht wichtig 5: Sehr Wichtig</label>
  <input type='range' min='1' max='5' value='3' class='slider' id='myRange' name='question_3' required>", "  
  <p for='question_4'>$QUESTIONS[3]</p>
  </fieldset>
  <fieldset class='fieldset_input'>
  <label for='question_4'>Keine zusätzliche körperliche Aktivität</label>

  <input type='checkbox'  name='question_4' />
  <label for='question_4_1'>Gewichte heben</label>
  <input type='checkbox'  name='question_4_1' />
  <label for='question_4_2'>Gehen</label>
  <input type='checkbox'  name='question_4_2' />
  <label for='question_4_3'>Wandern</label>
  <input type='checkbox'  name='question_4_3' />
  <label for='question_4_4'>Joggen</label>
  <input type='checkbox'  name='question_4_4' />
  <label for='question_4_5'>Rennen</label>
  <input type='checkbox'  name='question_4_5' />
  <label for='question_4_6'>Schwimmen</label>
  <input type='checkbox'  name='question_4_6' />
  <label for='question_4_7'>Tanzen</label>
  <input type='checkbox'  name='question_4_7' />
  <label for='question_4_8'>Aerobics</label>
  <input type='checkbox'  name='question_4_8' />
  <label for='question_4_9'>Pilates</label>
  <input type='checkbox'  name='question_4_9' />
  <label for='question_4_10'>Team Sport</label>
  <input  type='checkbox'  name='question_4_10' />
  <label for='question_4_11'>Andere</label>
  <input type='checkbox'  name='question_4_11' />
  
  
 ","   
 <p for='question_5'>$QUESTIONS[4]</p>
 </fieldset>
 <fieldset class='fieldset_input'>
 <label for='question_5'>1:Zu wenig 5: Zu viel</label>
 <input type='range' min='1' max='5' value='3' class='slider' id='myRange' name='question_5'>

  ","   
  <p for='question_6'>$QUESTIONS[5]</p>
  </fieldset>
  <fieldset class='fieldset_input'>
  <label for='question_6'>Gib eine zahl ein</label>
  <input type='number' min='1' max = '5' required name='question_6' />
 
","   
<p for='question_7'>$QUESTIONS[6]</p>
</fieldset>
<fieldset class='fieldset_input'>
<label for='question_7'>Gib eine zahl ein</label>
<input type='number' name='question_7' min='1' max = '5' required />

","   
<p for='question_8'>$QUESTIONS[7]</p>
</fieldset>
<fieldset class='fieldset_input'>
<label for='question_8'>Gib eine zahl ein</label>
<input type='number' name='question_8' min='1' max = '5' required />
  

","  
<p for='question_9'>$QUESTIONS[8]</p>
</fieldset>
<fieldset class='fieldset_input'>
<label for='question_9'>Gib eine zahl ein</label>
<input type='number' name='question_9' min='1' max = '5' required/>
  

","   
<p for='question_10'>$QUESTIONS[9]</p>
</fieldset>
<fieldset class='fieldset_input'>
<label for='question_10'>Gib eine zahl ein</label>
<input type='number' name='question_10' min='1' max = '5' required/>
      

"];