<table id="reservationtable" style="width:800px">
							<tr>
								<th colspan="11"><center><h2>DECEMBER</h2><img id='garland' src='garland.png'  align='center' /></center></th>
								
							</tr>
							<tr>
								<th>Dates</th>
								<th>Room 1</th>
								<th>Room 2</th>
								<th>Room 3</th>
								<th>Room 4</th>
								<th>Room 5</th>
								<th>Room 6</th>
								<th>Room 7</th>
								<th>Room 8</th>
								<th>Room 9</th>
								<th>Room 10</th>
							</tr>
							
							<tr>
								<td>Dec 1</td>
								<td>
								<?php
									//This is the function that is used in every cell of the calendar table. It is modified depending on the date and room number
									
									//query to get all reservations from  database
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										//extracts dates and room number from reservations
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										
										//sends arrival and departure date to GetDays function to recieve array of all dates of stay
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										//checks if arrival date is equal to current date
										if ($datetocheck == '2014-12-01' &&  $roomtocheck == '1'){
										
											//places X if match
											echo 'X';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
												//checks dates between the arrival and departure to see if it matches current cell
												if ($row2 == '2014-12-01' &&  $roomtocheck == '1'){
													//places X if match
													echo 'X';
												}
											
											
											
											}
										}
										
										
										//SAME FOR ALL DATES BELOW
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-01' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-01' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-01' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-01' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-01' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-01' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-01' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-01' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-01' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-01' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-01' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-01' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-01' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-01' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-01' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-01' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-01' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-01' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
												
							</tr>
							
							<tr>
				
							
							<td>Dec 2</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-02' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-02' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-02' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-02' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-02' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-02' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-02' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-02' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-02' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-02' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-02' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-02' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-02' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-02' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-02' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-02' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-02' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-02' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-02' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-02' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								
								</tr>
							
							<tr>
								
							
							<td>Dec 3</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-03' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-03' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-03' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-03' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-03' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-03' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-03' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-03' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-03' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-03' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-03' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-03' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-03' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-03' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-03' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-03' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-03' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-03' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-03' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-03' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
											
							</tr>
							<tr>
								
							<td>Dec 4</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-04' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-04' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-04' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-04' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-04' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-04' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-04' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-04' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-04' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-04' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-04' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-04' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-04' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-04' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-04' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-04' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-04' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-04' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-04' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-04' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
											
							</tr>
							
							<tr>
								
								
							<td>Dec 5</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-05' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-05' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-05' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-05' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-05' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-05' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-05' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-05' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-05' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-05' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-05' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-05' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-05' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-05' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-05' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-05' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-05' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-05' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-05' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-05' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>			
							</tr>
							<td>Dec 6</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-06' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-06' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-06' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-06' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-06' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-06' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-06' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-06' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-06' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-06' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-06' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-06' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-06' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-06' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-06' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-06' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-06' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-06' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-06' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-06' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
																
							</tr>
							
							<tr>
								<td>Dec 7</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-07' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-07' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-07' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-07' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-07' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-07' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-07' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-07' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-07' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-07' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-07' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-07' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-07' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-07' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-07' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-07' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-07' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-07' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-07' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-07' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr>
							
							
							
							<tr>
								<td>Dec 8</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-08' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-08' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-08' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-08' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-08' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-08' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-08' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-08' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-08' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-08' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-08' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-08' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-08' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-08' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-08' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-08' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-08' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-08' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-08' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-08' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Dec 9</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-09' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-09' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-09' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-09' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-09' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-09' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-09' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-09' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-09' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-09' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-09' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-09' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-09' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-09' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-09' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-09' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-09' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-09' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-09' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-09' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Dec 10</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-10' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-10' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-10' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-10' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-10' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-10' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-10' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-10' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-10' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-10' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-10' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-10' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-10' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-10' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-10' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-10' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-10' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-10' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-10' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-10' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Dec 11</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-11' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-11' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-11' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-11' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-11' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-11' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-11' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-11' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-11' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-11' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-11' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-11' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-11' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-11' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-11' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-11' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-11' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-11' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-11' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-11' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Dec 12</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-12' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-12' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-12' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-12' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-12' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-12' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-12' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-12' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-12' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-12' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-12' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-12' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-12' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-12' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-12' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-12' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-12' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-12' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-12' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-12' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Dec 13</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-13' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-13' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-13' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-13' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-13' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-13' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-13' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-13' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-13' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-13' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-13' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-13' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-13' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-13' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-13' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-13' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-13' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-13' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-13' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-13' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Dec 14</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-14' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-14' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-14' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-14' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-14' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-14' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-14' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-14' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-14' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-14' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-14' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-14' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-14' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-14' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-14' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-14' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-14' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-14' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-14' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-14' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Dec 15</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-15' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-15' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-15' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-15' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-15' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-15' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-15' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-15' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-15' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-15' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-15' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-15' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-15' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-15' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-15' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-15' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-15' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-15' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-15' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-15' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Dec 16</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-16' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-16' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-16' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-16' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-16' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-16' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-16' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-16' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-16' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-16' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-16' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-16' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-16' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-16' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-16' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-16' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-16' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-16' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-16' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-16' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Dec 17</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-17' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-17' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-17' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-17' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-17' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-17' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-17' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-17' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-17' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-17' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-17' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-17' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-17' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-17' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-17' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-17' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-17' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-17' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-17' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-17' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Dec 18</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-18' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-18' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-18' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-18' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-18' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-18' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-18' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-18' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-18' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-18' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-18' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-18' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-18' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-18' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-18' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-18' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-18' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-18' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-18' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-18' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Dec 19</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-19' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-19' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-19' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-19' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-19' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-19' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-19' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-19' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-19' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-19' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-19' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-19' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-19' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-19' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-19' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-19' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-19' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-19' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-19' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-19' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Dec 20</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-20' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-20' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-20' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-20' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-20' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-20' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-20' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-20' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-20' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-20' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-20' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-20' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-20' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-20' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-20' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-20' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-20' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-20' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-20' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-20' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Dec 21</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-21' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-21' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-21' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-21' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-21' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-21' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-21' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-21' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-21' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-21' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-21' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-21' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-21' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-21' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-21' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-21' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-21' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-21' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-21' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-21' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Dec 22</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-22' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-22' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-22' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-22' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-22' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-22' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-22' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-22' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-22' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-22' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-22' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-22' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-22' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-22' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-22' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-22' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-22' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-22' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-22' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-22' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Dec 23</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-23' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-23' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-23' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-23' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-23' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-23' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-23' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-23' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-23' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-23' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-23' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-23' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-23' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-23' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-23' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-23' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-23' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-23' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-23' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-23' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Dec 24</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-24' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-24' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-24' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-24' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-24' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-24' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-24' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-24' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-24' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-24' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-24' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-24' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-24' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-24' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-24' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-24' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-24' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-24' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-24' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-24' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Dec 25</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-25' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-25' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-25' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-25' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-25' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-25' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-25' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-25' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-25' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-25' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-25' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-25' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-25' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-25' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-25' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-25' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-25' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-25' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-25' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-25' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Dec 26</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-26' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-26' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-26' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-26' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-26' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-26' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-26' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-26' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-26' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-26' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-26' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-26' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-26' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-26' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-26' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-26' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-26' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-26' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-26' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-26' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Dec 27</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-27' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-27' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-27' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-27' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-27' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-27' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-27' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-27' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-27' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-27' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-27' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-27' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-27' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-27' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-27' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-27' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-27' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-27' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-27' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-27' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Dec 28</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-28' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-28' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-28' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-28' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-28' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-28' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-28' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-28' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-28' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-28' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-28' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-28' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-28' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-28' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-28' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-28' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-28' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-28' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-28' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-28' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Dec 29</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-29' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-29' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-29' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-29' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-29' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-29' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-29' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-29' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-29' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-29' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-29' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-29' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-29' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-29' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-29' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-29' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-29' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-29' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-29' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-29' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Dec 30</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-30' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-30' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-30' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-30' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-30' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-30' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-30' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-30' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-30' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-30' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-30' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-30' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-30' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-30' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-30' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-30' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-30' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-30' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-30' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-30' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Dec 31</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-31' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-31' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-31' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-31' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-31' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-31' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-31' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-31' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-31' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-31' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-31' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-31' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-31' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-31' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-31' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-31' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-31' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-31' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2014-12-31' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2014-12-31' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr>
							
							<tr>
								<th colspan="11"><center><h2>JANUARY</h2><img id='snowflake' src='snowflake.png'  align='center' /></center></th>
								
							</tr>
							<tr>
								<th>Dates</th>
								<th>Room 1</th>
								<th>Room 2</th>
								<th>Room 3</th>
								<th>Room 4</th>
								<th>Room 5</th>
								<th>Room 6</th>
								<th>Room 7</th>
								<th>Room 8</th>
								<th>Room 9</th>
								<th>Room 10</th>
							</tr>
							
							<tr>
								<td>Jan 1</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-01' &&  $roomtocheck == '1'){
										
										
											echo 'X';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-01' &&  $roomtocheck == '1'){
												
													echo 'X';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-01' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-01' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-01' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-01' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-01' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-01' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-01' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-01' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-01' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-01' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-01' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-01' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-01' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-01' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-01' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-01' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-01' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-01' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								</tr>
								
								<tr>
				
							
							<td>Jan 2</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-02' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-02' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-02' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-02' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-02' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-02' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-02' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-02' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-02' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-02' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-02' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-02' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-02' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-02' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-02' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-02' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-02' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-02' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-02' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-02' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								
								</tr>
							
							<tr>
								
							
							<td>Jan 3</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-03' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-03' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-03' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-03' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-03' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-03' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-03' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-03' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-03' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-03' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-03' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-03' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-03' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-03' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-03' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-03' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-03' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-03' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-03' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-03' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
											
							</tr>
							<tr>
								
							<td>Jan 4</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-04' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-04' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-04' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-04' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-04' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-04' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-04' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-04' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-04' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-04' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-04' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-04' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-04' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-04' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-04' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-04' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-04' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-04' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-04' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-04' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
											
							</tr>
							
							<tr>
								
								
							<td>Jan 5</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-05' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-05' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-05' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-05' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-05' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-05' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-05' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-05' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-05' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-05' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-05' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-05' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-05' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-05' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-05' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-05' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-05' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-05' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-05' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-05' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>			
							</tr>
							<td>Jan 6</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-06' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-06' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-06' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-06' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-06' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-06' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-06' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-06' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-06' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-06' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-06' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-06' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-06' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-06' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-06' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-06' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-06' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-06' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-06' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-06' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
																
							</tr>
							
							<tr>
								<td>Jan 7</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-07' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-07' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-07' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-07' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-07' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-07' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-07' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-07' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-07' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-07' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-07' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-07' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-07' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-07' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-07' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-07' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-07' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-07' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-07' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-07' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr>
							
							
							
							<tr>
								<td>Jan 8</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-08' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-08' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-08' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-08' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-08' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-08' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-08' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-08' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-08' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-08' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-08' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-08' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-08' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-08' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-08' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-08' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-08' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-08' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-08' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-08' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Jan 9</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-09' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-09' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-09' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-09' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-09' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-09' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-09' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-09' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-09' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-09' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-09' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-09' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-09' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-09' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-09' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-09' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-09' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-09' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-09' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-09' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Jan 10</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-10' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-10' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-10' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-10' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-10' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-10' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-10' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-10' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-10' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-10' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-10' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-10' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-10' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-10' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-10' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-10' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-10' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-10' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-10' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-10' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Jan 11</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-11' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-11' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-11' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-11' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-11' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-11' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-11' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-11' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-11' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-11' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-11' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-11' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-11' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-11' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-11' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-11' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-11' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-11' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-11' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-11' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Jan 12</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-12' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-12' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-12' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-12' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-12' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-12' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-12' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-12' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-12' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-12' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-12' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-12' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-12' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-12' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-12' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-12' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-12' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-12' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-12' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-12' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Jan 13</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-13' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-13' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-13' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-13' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-13' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-13' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-13' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-13' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-13' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-13' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-13' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-13' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-13' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-13' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-13' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-13' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-13' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-13' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-13' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-13' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Jan 14</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-14' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-14' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-14' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-14' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-14' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-14' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-14' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-14' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-14' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-14' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-14' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-14' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-14' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-14' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-14' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-14' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-14' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-14' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-14' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-14' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Jan 15</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-15' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-15' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-15' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-15' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-15' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-15' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-15' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-15' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-15' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-15' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-15' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-15' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-15' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-15' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-15' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-15' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-15' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-15' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-15' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-15' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Jan 16</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-16' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-16' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-16' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-16' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-16' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-16' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-16' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-16' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-16' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-16' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-16' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-16' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-16' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-16' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-16' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-16' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-16' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-16' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-16' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-16' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Jan 17</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-17' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-17' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-17' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-17' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-17' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-17' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-17' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-17' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-17' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-17' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-17' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-17' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-17' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-17' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-17' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-17' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-17' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-17' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-17' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-17' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Jan 18</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-18' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-18' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-18' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-18' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-18' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-18' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-18' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-18' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-18' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-18' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-18' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-18' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-18' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-18' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-18' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-18' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-18' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-18' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-18' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-18' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Jan 19</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-19' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-19' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-19' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-19' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-19' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-19' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-19' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-19' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-19' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-19' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-19' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-19' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-19' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-19' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-19' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-19' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-19' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-19' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-19' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-19' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Jan 20</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-20' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-20' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-20' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-20' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-20' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-20' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-20' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-20' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-20' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-20' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-20' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-20' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-20' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-20' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-20' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-20' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-20' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-20' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-20' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-20' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Jan 21</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-21' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-21' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-21' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-21' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-21' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-21' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-21' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-21' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-21' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-21' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-21' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-21' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-21' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-21' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-21' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-21' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-21' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-21' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-21' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-21' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Jan 22</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-22' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-22' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-22' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-22' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-22' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-22' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-22' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-22' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-22' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-22' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-22' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-22' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-22' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-22' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-22' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-22' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-22' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-22' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-22' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-22' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Jan 23</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-23' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-23' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-23' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-23' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-23' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-23' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-23' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-23' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-23' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-23' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-23' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-23' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-23' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-23' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-23' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-23' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-23' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-23' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-23' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-23' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Jan 24</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-24' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-24' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-24' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-24' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-24' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-24' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-24' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-24' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-24' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-24' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-24' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-24' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-24' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-24' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-24' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-24' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-24' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-24' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-24' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-24' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Jan 25</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-25' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-25' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-25' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-25' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-25' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-25' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-25' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-25' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-25' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-25' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-25' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-25' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-25' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-25' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-25' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-25' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-25' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-25' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-25' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-25' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Jan 26</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-26' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-26' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-26' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-26' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-26' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-26' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-26' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-26' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-26' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-26' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-26' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-26' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-26' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-26' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-26' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-26' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-26' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-26' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-26' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-26' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Jan 27</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-27' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-27' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-27' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-27' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-27' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-27' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-27' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-27' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-27' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-27' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-27' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-27' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-27' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-27' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-27' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-27' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-27' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-27' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-27' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-27' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Jan 28</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-28' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-28' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-28' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-28' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-28' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-28' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-28' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-28' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-28' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-28' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-28' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-28' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-28' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-28' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-28' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-28' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-28' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-28' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-28' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-28' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Jan 29</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-29' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-29' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-29' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-29' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-29' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-29' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-29' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-29' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-29' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-29' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-29' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-29' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-29' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-29' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-29' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-29' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-29' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-29' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-29' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-29' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Jan 30</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-30' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-30' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-30' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-30' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-30' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-30' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-30' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-30' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-30' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-30' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-30' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-30' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-30' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-30' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-30' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-30' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-30' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-30' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-30' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-30' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr><tr>
								<td>Jan 31</td>
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-31' &&  $roomtocheck == '1'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-31' &&  $roomtocheck == '1'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	
								<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-31' &&  $roomtocheck == '2'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-31' &&  $roomtocheck == '2'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-31' &&  $roomtocheck == '3'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-31' &&  $roomtocheck == '3'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-31' &&  $roomtocheck == '4'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-31' &&  $roomtocheck == '4'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-31' &&  $roomtocheck == '5'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-31' &&  $roomtocheck == '5'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-31' &&  $roomtocheck == '6'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-31' &&  $roomtocheck == '6'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-31' &&  $roomtocheck == '7'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-31' &&  $roomtocheck == '7'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-31' &&  $roomtocheck == '8'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-31' &&  $roomtocheck == '8'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-31' &&  $roomtocheck == '9'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-31' &&  $roomtocheck == '9'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>	<td>
								<?php
									$query = "SELECT  reservations.arrival_Date, reservations.departure_Date, reservations.fk_room_Number FROM reservations ";
									$result = mysql_query($query);
									
									
									
									while ($row = mysql_fetch_array($result)) {
										$datetocheck = $row['arrival_Date'];
										$leavetocheck = $row['departure_Date'];
										$roomtocheck = $row['fk_room_Number'];
										$dateArray = GetDays($datetocheck, $leavetocheck);
										
										
										if ($datetocheck == '2015-01-31' &&  $roomtocheck == '10'){
										
										
											echo '<p class="booked" align="center">X</p>';
										
										
										}
										else{
										
											foreach ($dateArray as $row2) {
											
												if ($row2 == '2015-01-31' &&  $roomtocheck == '10'){
												
													echo '<p class="booked" align="center">X</p>';
												}
											
											
											
											}
										}
										
										
										
									
										
									}
							
								?>	
								
								</td>
												
							</tr>
							
							
							
						</table>