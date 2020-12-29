<?php
function judul($judul)
{
  // code...
  echo '<div class="card-header">
    <div class="card-title">'.$judul.'</div>
  </div>';
}
function input_($label,$type,$name,$value)
{
  echo '<div class="form-group">
					<label>'.$label.'</label>
					<input type="'.$type.'" class="form-control" name="'.$name.'" value="'.$value.'">
				</div>';
}
function input_d($label,$type,$name,$value,$d)
{
  echo '<div class="form-group">
					<label>'.$label.'</label>
					<input type="'.$type.'" class="form-control" name="'.$name.'" value="'.$value.'" disabled>
				</div>';
}
function combo_($label,$name,$list,$attr){
	echo '<div class="form-group">
            <label>'.$label.'</label>
                <select class="form-control" name="'.$name.'">'.$attr.' ';
            foreach ($list as $ls) {
            	# code...
            	echo '<option value="'.$ls.'">'.$ls.'</option>';
            }

    echo '     </select>
        </div>';
}
function textarea_($label,$name,$value)
{
  echo '<div class="form-group">
					<label for="comment">'.$label.'</label>
					<textarea class="form-control" name="'.$name.'" rows="5">'.$value.'
					</textarea>
				</div>';
}
function radio_($label,$name,$value1,$value2,$v1,$v2,$attr){
	echo '<div class="form-check">
        <label>'.$label.'</label>
            <div class="form-radio-label ml-3">
                <input type="radio" id="'.$value1.'" value="'.$value1.'" name="'.$name.'" '.$attr.'>
                <span class="form-radio-sign">'.$v1.'</span>
            </div>
            <div class="form-radio-label ml-3">
                <input type="radio" id="'.$value2.'" value="'.$value2.'" name="'.$name.'">
                <span class="form-radio-sign">'.$v2.'</span>
            </div>
    </div>';
}
function itemtbl($label,$value)
{
  // code...
  echo "<tr>
    <td>".$label."</td>
    <td>: ".$value."</td>
  </tr>";
}
?>
