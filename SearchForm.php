
    <form name="myForm" action="searchResult.php"  method="post">
      <fieldset class="one">
        <legend class="one">Renter(s) information</legend>     
          <p>
            <label><span class="spaned">How many people will live in the apartment?</span>        
              <input type="number" name="the name" min="1" max="7"/>
            </label>
          </p>
          <p>
            <span class="spaned">Smoker?</span> 
            <label><input type="radio" name="bool" value="yes"/> yes</label>
            <label><input type="radio" name="bool" value="no"/> no</label>
          </p>
          <p>
            <span class="spaned">Any pets?</span><br />
            <label><input type="checkbox" name="pets" value="Cat(s)"/>Cat(s)</label>
            <br />
            <label><input type="checkbox" name="pets" value="Dog(s)"/>Dog(s)</label>
            <br />
            <label><input type="checkbox" name="pets" value="Other Specify:(s)"/>Other</label>
            <label><span class="spaned">Specify:</span><input type="text" name="pets" size="25"/></label>
            <br />
            <label><input type="checkbox" name="pets" value="No Pets"/>No Pets</label>
            <br />
          </p>     
      </fieldset>
      <fieldset class="two">
        <legend class="two">What are you looking for?</legend>
          <ul>
            <li><span class="spaned">Size of apartment:</span><br />
              <label><input type="checkbox" name="size" id="size1" value="Studio"/>Studio</label>
              <label><input type="checkbox" name="size" id="size2" value="3.5"/>3&frac12;</label>
              <label><input type="checkbox" name="size" id="size3" value="4.5"/>4&frac12;</label>
              <label><input type="checkbox" name="size" id="size4" value="5.5"/>5&frac12;</label>
              <label><input type="checkbox" name="size" id="size5" value="More than 5.5">More than 5&frac12;</label><br /><br />
            </li>
            <li><span class="spaned">Do you have preferred location?</span><br />
              <label><input type="checkbox" name="location" id="locations1" value="West Island"/>West Island</label>
              <label><input type="checkbox" name="location" id="locations2" value="Downtown"/>Downtown </label>
              <label><input type="checkbox" name="location" id="locations3" value="Lower Westmount"/>Lower Westmount </label>
              <label><input type="checkbox" name="location" id="locations4" value="NDG"/>NDG </label>
              <label><input type="checkbox" name="location" id="locations5" value="East end of Island"/>East end of Island </label>
              <label><input type="checkbox" name="location" id="locations6" value="Don't care"/>Don't care  </label>
			  <br /><br />
            </li>
            <li><span class="spaned">Price Range/month:</span><br />
              <label>       
              <select name="price">
                <option id="price1" value="500">&lt;$500</option>
                <option id="price2" value="600">$500 to $600</option>
                <option id="price3" value="700">$600 to $700</option>
                <option id="price4" value="800">$700 to $800</option>
                <option id="price5" value="900">$800 to $900</option>
                <option id="price6" value="1000">$900 to $1000</option>
                <option id="price7" value="1100">$1000 to $1100</option>
                <option id="price8" value="1200">$1100 to $1200</option>
                <option id="price9" value="1300">&gt;$1200</option>
                <option id="price10" value="1400">No price limit</option>
              </select>
             </label><br /><br />
            </li>
          <li><span class="spaned">Would be nice to have</span><br />
            <label><input type="checkbox" name="including" value="Fire place"/>Fire place</label>
            <label><input type="checkbox" name="including" value="Laundromat in buiding"/>Laundromat in buiding </label>
            <label><input type="checkbox" name="including" value="Indoor Parking"/>Indoor Parking </label>
            <label><input type="checkbox" name="including" value="Outdoor Parking"/>Outdoor Parking </label>
            <label><input type="checkbox" name="including" value="Balcony"/>Balcony </label>
          </li>
        </ul>
      </fieldset>
	  <fieldset>
	    <legend>Expert suggestions</legend>
		<p id="suggestions"></p>
	  </fieldset>
      <p>Let's see what we can find...</p>
      <p>
        <input id="clicked" type="submit"  value="Search"/>
        <input type="reset" value="Start over"/>
      </p>
    </form>
  