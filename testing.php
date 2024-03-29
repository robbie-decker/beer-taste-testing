





// Query that excludes values beyond 6 standard deviations from the mean of the result set (notice 6 

SELECT t.Result FROM
  result AS t
  CROSS JOIN (
    SELECT AVG(Result) avgr, STD(Result) stdr
    FROM myTable
    WHERE myField = myCondition
  ) AS stats
WHERE 
  t.myField = myCondition
  AND t.Result BETWEEN (stats.avgr-6*stats.stdr) AND (stats.avgr+6*stats.stdr)
LIMIT 75






















<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
                        
                            <label for="style">What style do you believe this sample is?</label>
                            <select  name="select2" id="style" class="form-control">
<option value="Unknown">I have no idea</option>
<option value="Altbier">Altbier</option>
<option value="Australian Sparkling Ale">Australian Sparkling Ale</option>
<option value="Barleywine - American">Barleywine - American</option>
<option value="Barleywine - English">Barleywine - English</option>
<option value="Barleywine - Other">Barleywine - Other</option>
<option value="Belgian Blonde">Belgian Blonde</option>
<option value="Belgian Dubbel">Belgian Dubbel</option>
<option value="Belgian Enkel / Patersbier">Belgian Enkel / Patersbier</option>
<option value="Belgian Quadrupel">Belgian Quadrupel</option>
<option value="Belgian Strong Dark Ale">Belgian Strong Dark Ale</option>
<option value="Belgian Strong Golden Ale">Belgian Strong Golden Ale</option>
<option value="Belgian Tripel">Belgian Tripel</option>
<option value="Bitter - Best">Bitter - Best</option>
<option value="Bitter - Extra Special / Strong (ESB)">Bitter - Extra Special / Strong (ESB)</option>
<option value="Bitter - Session / Ordinary">Bitter - Session / Ordinary</option>
<option value="Bière de Champagne / Bière Brut">Bière de Champagne / Bière Brut</option>
<option value="Black & Tan">Black & Tan</option>
<option value="Blonde Ale">Blonde Ale</option>
<option value="Bock - Doppelbock">Bock - Doppelbock</option>
<option value="Bock - Eisbock">Bock - Eisbock</option>
<option value="Bock - Hell / Maibock / Lentebock">Bock - Hell / Maibock / Lentebock</option>
<option value="Bock - Single / Traditional">Bock - Single / Traditional</option>
<option value="Bock - Weizenbock">Bock - Weizenbock</option>
<option value="Bock - Weizendoppelbock">Bock - Weizendoppelbock</option>
<option value="Brett Beer">Brett Beer</option>
<option value="Brown Ale - American">Brown Ale - American</option>
<option value="Brown Ale - Belgian">Brown Ale - Belgian</option>
<option value="Brown Ale - English">Brown Ale - English</option>
<option value="Brown Ale - Imperial / Double">Brown Ale - Imperial / Double</option>
<option value="Brown Ale - Other">Brown Ale - Other</option>
<option value="California Common">California Common</option>
<option value="Chilli / Chile Beer">Chilli / Chile Beer</option>
<option value="Cider - Dry">Cider - Dry</option>
<option value="Cider - Graff">Cider - Graff</option>
<option value="Cider - Herbed / Spiced / Hopped">Cider - Herbed / Spiced / Hopped</option>
<option value="Cider - Ice / Applewine">Cider - Ice / Applewine</option>
<option value="Cider - Other Fruit">Cider - Other Fruit</option>
<option value="Cider - Perry">Cider - Perry</option>
<option value="Cider - Rosé">Cider - Rosé</option>
<option value="Cider - Sweet">Cider - Sweet</option>
<option value="Cider - Traditional / Apfelwein">Cider - Traditional / Apfelwein</option>
<option value="Corn Beer / Chicha de Jora">Corn Beer / Chicha de Jora</option>
<option value="Cream Ale">Cream Ale</option>
<option value="Dark Ale">Dark Ale</option>
<option value="Farmhouse Ale - Bière de Coupage">Farmhouse Ale - Bière de Coupage</option>
<option value="Farmhouse Ale - Bière de Garde">Farmhouse Ale - Bière de Garde</option>
<option value="Farmhouse Ale - Bière de Mars">Farmhouse Ale - Bière de Mars</option>
<option value="Farmhouse Ale - Grisette">Farmhouse Ale - Grisette</option>
<option value="Farmhouse Ale - Other">Farmhouse Ale - Other</option>
<option value="Farmhouse Ale - Sahti">Farmhouse Ale - Sahti</option>
<option value="Farmhouse Ale - Saison">Farmhouse Ale - Saison</option>
<option value="Festbier">Festbier</option>
<option value="Flavored Malt Beverage">Flavored Malt Beverage</option>
<option value="Freeze-Distilled Beer">Freeze-Distilled Beer</option>
<option value="Fruit Beer">Fruit Beer</option>
<option value="Gluten-Free">Gluten-Free</option>
<option value="Golden Ale">Golden Ale</option>
<option value="Grape Ale - Italian">Grape Ale - Italian</option>
<option value="Grape Ale - Other">Grape Ale - Other</option>
<option value="Grodziskie / Grätzer">Grodziskie / Grätzer</option>
<option value="Happoshu">Happoshu</option>
<option value="Hard Ginger Beer">Hard Ginger Beer</option>
<option value="Hard Kombucha / Jun">Hard Kombucha / Jun</option>
<option value="Hard Seltzer">Hard Seltzer</option>
<option value="Historical Beer - Adambier">Historical Beer - Adambier</option>
<option value="Historical Beer - Berliner Braunbier">Historical Beer - Berliner Braunbier</option>
<option value="Historical Beer - Burton Ale">Historical Beer - Burton Ale</option>
<option value="Historical Beer - Dampfbier">Historical Beer - Dampfbier</option>
<option value="Historical Beer - Gruit / Ancient Herbed Ale">Historical Beer - Gruit / Ancient Herbed Ale</option>
<option value="Historical Beer - Kentucky Common">Historical Beer - Kentucky Common</option>
<option value="Historical Beer - Kottbusser">Historical Beer - Kottbusser</option>
<option value="Historical Beer - Lichtenhainer">Historical Beer - Lichtenhainer</option>
<option value="Historical Beer - Mumme">Historical Beer - Mumme</option>
<option value="Historical Beer - Other">Historical Beer - Other</option>
<option value="Historical Beer - Steinbier">Historical Beer - Steinbier</option>
<option value="Historical Beer - Zoigl">Historical Beer - Zoigl</option>
<option value="Honey Beer">Honey Beer</option>
<option value="IPA - American">IPA - American</option>
<option value="IPA - Belgian">IPA - Belgian</option>
<option value="IPA - Black / Cascadian Dark Ale">IPA - Black / Cascadian Dark Ale</option>
<option value="IPA - Brett">IPA - Brett</option>
<option value="IPA - Brut">IPA - Brut</option>
<option value="IPA - Cold">IPA - Cold</option>
<option value="IPA - English">IPA - English</option>
<option value="IPA - Farmhouse">IPA - Farmhouse</option>
<option value="IPA - Imperial / Double">IPA - Imperial / Double</option>
<option value="IPA - Imperial / Double Black">IPA - Imperial / Double Black</option>
<option value="IPA - Imperial / Double Milkshake">IPA - Imperial / Double Milkshake</option>
<option value="IPA - Imperial / Double New England / Hazy">IPA - Imperial / Double New England / Hazy</option>
<option value="IPA - Milkshake">IPA - Milkshake</option>
<option value="IPA - New England / Hazy">IPA - New England / Hazy</option>
<option value="IPA - New Zealand">IPA - New Zealand</option>
<option value="IPA - Other">IPA - Other</option>
<option value="IPA - Quadruple">IPA - Quadruple</option>
<option value="IPA - Red">IPA - Red</option>
<option value="IPA - Rye">IPA - Rye</option>
<option value="IPA - Session">IPA - Session</option>
<option value="IPA - Sour">IPA - Sour</option>
<option value="IPA - Triple">IPA - Triple</option>
<option value="IPA - Triple New England / Hazy">IPA - Triple New England / Hazy</option>
<option value="IPA - White / Wheat">IPA - White / Wheat</option>
<option value="Kellerbier / Zwickelbier">Kellerbier / Zwickelbier</option>
<option value="Koji / Ginjo Beer">Koji / Ginjo Beer</option>
<option value="Kvass">Kvass</option>
<option value="Kölsch">Kölsch</option>
<option value="Lager - Amber">Lager - Amber</option>
<option value="Lager - American">Lager - American</option>
<option value="Lager - American Amber / Red">Lager - American Amber / Red</option>
<option value="Lager - American Light">Lager - American Light</option>
<option value="Lager - Dark">Lager - Dark</option>
<option value="Lager - Dortmunder / Export">Lager - Dortmunder / Export</option>
<option value="Lager - Helles">Lager - Helles</option>
<option value="Lager - IPL (India Pale Lager)">Lager - IPL (India Pale Lager)</option>
<option value="Lager - Japanese Rice">Lager - Japanese Rice</option>
<option value="Lager - Leichtbier">Lager - Leichtbier</option>
<option value="Lager - Mexican">Lager - Mexican</option>
<option value="Lager - Munich Dunkel">Lager - Munich Dunkel</option>
<option value="Lager - Pale">Lager - Pale</option>
<option value="Lager - Red">Lager - Red</option>
<option value="Lager - Strong">Lager - Strong</option>
<option value="Lager - Vienna">Lager - Vienna</option>
<option value="Lager - Winter">Lager - Winter</option>
<option value="Lambic - Faro">Lambic - Faro</option>
<option value="Lambic - Framboise">Lambic - Framboise</option>
<option value="Lambic - Fruit">Lambic - Fruit</option>
<option value="Lambic - Gueuze">Lambic - Gueuze</option>
<option value="Lambic - Kriek">Lambic - Kriek</option>
<option value="Lambic - Other">Lambic - Other</option>
<option value="Lambic - Traditional">Lambic - Traditional</option>
<option value="Malt Beer">Malt Beer</option>
<option value="Malt Liquor">Malt Liquor</option>
<option value="Mead - Acerglyn / Maple Wine">Mead - Acerglyn / Maple Wine</option>
<option value="Mead - Bochet">Mead - Bochet</option>
<option value="Mead - Braggot">Mead - Braggot</option>
<option value="Mead - Cyser">Mead - Cyser</option>
<option value="Mead - Melomel">Mead - Melomel</option>
<option value="Mead - Metheglin">Mead - Metheglin</option>
<option value="Mead - Other">Mead - Other</option>
<option value="Mead - Pyment">Mead - Pyment</option>
<option value="Mead - Session / Short">Mead - Session / Short</option>
<option value="Mead - Traditional">Mead - Traditional</option>
<option value="Mild - Dark">Mild - Dark</option>
<option value="Mild - Light">Mild - Light</option>
<option value="Mild - Other">Mild - Other</option>
<option value="Märzen">Märzen</option>
<option value="Non-Alcoholic Beer - IPA">Non-Alcoholic Beer - IPA</option>
<option value="Non-Alcoholic Beer - Lager">Non-Alcoholic Beer - Lager</option>
<option value="Non-Alcoholic Beer - Other">Non-Alcoholic Beer - Other</option>
<option value="Non-Alcoholic Beer - Pale Ale">Non-Alcoholic Beer - Pale Ale</option>
<option value="Non-Alcoholic Beer - Porter / Stout">Non-Alcoholic Beer - Porter / Stout</option>
<option value="Non-Alcoholic Beer - Shandy / Radler">Non-Alcoholic Beer - Shandy / Radler</option>
<option value="Non-Alcoholic Beer - Sour">Non-Alcoholic Beer - Sour</option>
<option value="Non-Alcoholic Beer - Wheat Beer">Non-Alcoholic Beer - Wheat Beer</option>
<option value="Non-Alcoholic Cider / Perry">Non-Alcoholic Cider / Perry</option>
<option value="Non-Alcoholic Mead">Non-Alcoholic Mead</option>
<option value="Old Ale">Old Ale</option>
<option value="Pale Ale - American">Pale Ale - American</option>
<option value="Pale Ale - Australian">Pale Ale - Australian</option>
<option value="Pale Ale - Belgian">Pale Ale - Belgian</option>
<option value="Pale Ale - English">Pale Ale - English</option>
<option value="Pale Ale - Milkshake">Pale Ale - Milkshake</option>
<option value="Pale Ale - New England / Hazy">Pale Ale - New England / Hazy</option>
<option value="Pale Ale - New Zealand">Pale Ale - New Zealand</option>
<option value="Pale Ale - Other">Pale Ale - Other</option>
<option value="Pale Ale - XPA (Extra Pale)">Pale Ale - XPA (Extra Pale)</option>
<option value="Pilsner - Czech">Pilsner - Czech</option>
<option value="Pilsner - German">Pilsner - German</option>
<option value="Pilsner - Imperial / Double">Pilsner - Imperial / Double</option>
<option value="Pilsner - Italian">Pilsner - Italian</option>
<option value="Pilsner - Other">Pilsner - Other</option>
<option value="Porter - American">Porter - American</option>
<option value="Porter - Baltic">Porter - Baltic</option>
<option value="Porter - Coffee">Porter - Coffee</option>
<option value="Porter - English">Porter - English</option>
<option value="Porter - Imperial / Double">Porter - Imperial / Double</option>
<option value="Porter - Imperial / Double Baltic">Porter - Imperial / Double Baltic</option>
<option value="Porter - Imperial / Double Coffee">Porter - Imperial / Double Coffee</option>
<option value="Porter - Other">Porter - Other</option>
<option value="Pumpkin / Yam Beer">Pumpkin / Yam Beer</option>
<option value="Rauchbier">Rauchbier</option>
<option value="Red Ale - American Amber / Red">Red Ale - American Amber / Red</option>
<option value="Red Ale - Imperial / Double">Red Ale - Imperial / Double</option>
<option value="Red Ale - Irish">Red Ale - Irish</option>
<option value="Red Ale - Other">Red Ale - Other</option>
<option value="Roggenbier">Roggenbier</option>
<option value="Root Beer">Root Beer</option>
<option value="Rye Beer">Rye Beer</option>
<option value="Rye Wine">Rye Wine</option>
<option value="Schwarzbier">Schwarzbier</option>
<option value="Scotch Ale / Wee Heavy">Scotch Ale / Wee Heavy</option>
<option value="Scottish Ale">Scottish Ale</option>
<option value="Scottish Export Ale">Scottish Export Ale</option>
<option value="Shandy / Radler">Shandy / Radler</option>
<option value="Smoked Beer">Smoked Beer</option>
<option value="Sorghum / Millet Beer">Sorghum / Millet Beer</option>
<option value="Sour - Berliner Weisse">Sour - Berliner Weisse</option>
<option value="Sour - Flanders Oud Bruin">Sour - Flanders Oud Bruin</option>
<option value="Sour - Flanders Red Ale">Sour - Flanders Red Ale</option>
<option value="Sour - Fruited">Sour - Fruited</option>
<option value="Sour - Fruited Berliner Weisse">Sour - Fruited Berliner Weisse</option>
<option value="Sour - Fruited Gose">Sour - Fruited Gose</option>
<option value="Sour - Other">Sour - Other</option>
<option value="Sour - Other Gose">Sour - Other Gose</option>
<option value="Sour - Smoothie / Pastry">Sour - Smoothie / Pastry</option>
<option value="Sour - Traditional Gose">Sour - Traditional Gose</option>
<option value="Specialty Grain">Specialty Grain</option>
<option value="Spiced / Herbed Beer">Spiced / Herbed Beer</option>
<option value="Stout - American">Stout - American</option>
<option value="Stout - Coffee">Stout - Coffee</option>
<option value="Stout - English">Stout - English</option>
<option value="Stout - Foreign / Export">Stout - Foreign / Export</option>
<option value="Stout - Imperial / Double">Stout - Imperial / Double</option>
<option value="Stout - Imperial / Double Coffee">Stout - Imperial / Double Coffee</option>
<option value="Stout - Imperial / Double Milk">Stout - Imperial / Double Milk</option>
<option value="Stout - Imperial / Double Oatmeal">Stout - Imperial / Double Oatmeal</option>
<option value="Stout - Imperial / Double Pastry">Stout - Imperial / Double Pastry</option>
<option value="Stout - Imperial / Double White / Golden">Stout - Imperial / Double White / Golden</option>
<option value="Stout - Irish Dry">Stout - Irish Dry</option>
<option value="Stout - Milk / Sweet">Stout - Milk / Sweet</option>
<option value="Stout - Oatmeal">Stout - Oatmeal</option>
<option value="Stout - Other">Stout - Other</option>
<option value="Stout - Oyster">Stout - Oyster</option>
<option value="Stout - Pastry">Stout - Pastry</option>
<option value="Stout - Russian Imperial">Stout - Russian Imperial</option>
<option value="Stout - White / Golden">Stout - White / Golden</option>
<option value="Strong Ale - American">Strong Ale - American</option>
<option value="Strong Ale - English">Strong Ale - English</option>
<option value="Strong Ale - Other">Strong Ale - Other</option>
<option value="Table Beer">Table Beer</option>
<option value="Traditional Ale">Traditional Ale</option>
<option value="Ukrainian Golden Ale">Ukrainian Golden Ale</option>
<option value="Wheat Beer - American Pale Wheat">Wheat Beer - American Pale Wheat</option>
<option value="Wheat Beer - Dunkelweizen">Wheat Beer - Dunkelweizen</option>
<option value="Wheat Beer - Hefeweizen">Wheat Beer - Hefeweizen</option>
<option value="Wheat Beer - Hefeweizen Light / Leicht">Wheat Beer - Hefeweizen Light / Leicht</option>
<option value="Wheat Beer - Hopfenweisse">Wheat Beer - Hopfenweisse</option>
<option value="Wheat Beer - Kristallweizen">Wheat Beer - Kristallweizen</option>
<option value="Wheat Beer - Other">Wheat Beer - Other</option>
<option value="Wheat Beer - Wheat Wine">Wheat Beer - Wheat Wine</option>
<option value="Wheat Beer - Witbier / Blanche">Wheat Beer - Witbier / Blanche</option>
<option value="Wild Ale - American">Wild Ale - American</option>
<option value="Wild Ale - Other">Wild Ale - Other</option>
<option value="Winter Ale">Winter Ale</option>
<option value="Winter Warmer">Winter Warmer</option>

                            </select>


<script type="text/javascript">
    $("#select2").select2({
        templateResult: formatState
    });
    function formatState (state) {
        if (!state.id) {
            return state.text;
        }
        var baseUrl = "flags";
        var $state = $(
            '<span>' + state.text + '</span>'
        );
        return $state;
    }
</script>





















