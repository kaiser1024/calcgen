WHAT HAPPENS SERVER SIDE?

!! NO AJAX --> reload prevention via js !!

1. General fetch:
	- date and time
	- user region
	- device type
	- browser

2. All possible html snippets are sent to client via public function render() ob_start as follows:

<form id="inputform">

			<div id="inputfieldwrapper" display: block>
    				<label for="inputfieldlabel"><?php foreach *Taken from server-side PHP array*></label>
				<select name="inputfieldlabelselectname" id="inputfieldlabelselectid"><option value="">Válassz...</option>
        				<?php foreach *Taken from server-side PHP array* ?>
						<option value="<?php echo esc_attr($value); ?>">
							<?php echo esc_html($label); ?>
						</option>
					<?php endforeach; ?>
				</select>


3. Intake:
	* PHP populates all possible divs with "display:none"


4. PHP array is sent to server to set configuration for each INTAKE div:

	* actual values for each div iteration (e.g. div id="inputfieldwrapper" to be replaced to div id="carbrand"
	* all const for server-side js - e.g.: base fee(s), base divider(s), base multiplier(s), including arays where certain select values define the const (e.g. if select value is less than 100, then multiplier const is 1, if select value is greater than 100, then multiplier const is 2 etc.)
	* display logic (div + select) - such as ancestor field (if given previous intake field has xyz select value, js reverser script flips "display:none" to "display:block", if no ancestor is set, flip is automatic - e.g. to ensure first field is never hidden)
	* 



5. PHP array establishes flow from INTAKE to OUTPUT:

	* INTAKE div format to OUTPUT:
		? string to string
		? string to integer
		? integer to integer
		? string to const
		? integer to const

6. Output: 
	* Text: PHP populates all possible divs with "display: block"
	* Logic: sets all initial const values


WHAT HAPPENS CLIENT SIDE?

1. All js hardcoded (manipulations from server-side via PHP array)

- 

- js derives all general const from server data:

	* current date (YYYYMMDD)
	* current month (YYYYMM)
	* current year (YYYY)
	* elapsed years
	* elapsed years + 1
	* elapsed months + 1

- browser knows all logic, triggers as per PHP array config

	* js sets reversor rules for block/none dependency
	* js sets select load rules

- creates event listeners for:
	* all buttons
	* all select changes
	
- resets all selects if changed

- creates error logic for all input fields
