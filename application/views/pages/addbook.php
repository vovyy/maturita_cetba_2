
<form action="<?php echo base_url()?>pridat_knihu" method="post" style="padding-top:5%;padding-left:10%;padding-right:10%;">
  <div class="form-group">
    <label class="form-label "for="exampleFormControlTextarea1"><h3>Nazev</h3> </label>
    <textarea type="text" name="nazev_knihy" class="form-control " placeholder="Sem napište úkol..." id="exampleFormControlTextarea1" rows="4" cols="32"required=""></textarea>
  </div>
  <label for="texarea">Kategorie</label>
  <input name="kategorie_id_kategorie" type="text" class="form-control" placeholder="Zadejte kategorii"/>
<br />
  <label for="texarea">Autor knížky</label>
  <textarea  type="text" class="form-control" placeholder="Zadej autora knížky" name="autor" id="exampleFormControlTextarea1" rows="2" value=""></textarea>
  <label for="texarea">Anotace</label>
  <textarea  type="text" class="form-control" placeholder="Zadej anotaci" name="anotace" id="exampleFormControlTextarea1" rows="2"></textarea>
  <button type="submit" name="submit" value"Submit" style="margin-top:10px" id="" class="btn btn-primary" href="#" role="button">Přidej</button>

</form>
