<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="/css/styles.css" />
</head>

<body>
    <div class="content">
        <div class="conditie">
            <p style="width: 80%">
                <b>1.</b> Realizaţi o pagină Web în cod HTML cu formularul de maijos cu cîmpurile: pizza, suc,
                înghețată, cafea, mesaj. Aplicaţistiluri CSS formularului pentru formatare ca în imagine. Elaboraţiun
                script PHP cevapreluadatele din formularși
                le vaafișaîntr-o pagină Web. Încazulcînd n-a fostselectatniciuncîmp se vareveni la
                formularpentrucompletare.
            </p>

            <div class="row-1">
                <form class="form-1" action="meniu.php">
                    <h3 class="h3_form-1">Alegeti Meniul:</h3>
                    <hr id="f1" />
                    <div class="produse">
                        <div class="produse_b1">
                            <div class="b1">
                                Pizza: <input type="checkbox" name="pizza" />
                            </div>

                            <div class="b1">Suc: <input type="checkbox" name="suc" /></div>

                            <div class="b1">
                                Înghețată: <input type="checkbox" name="inghetata" />
                            </div>
                            <div class="b1">
                                Cafea: <input type="checkbox" name="cofe" />
                            </div>
                        </div>
                        <div class="produse_b2">
                            Lasați un mesaj:
                            <textarea name="mesage-f1" id="form1_textarea" cols="30" rows="5"></textarea><br />
                        </div>

                        <button class="form-1_button">Trimite</button>
                        <hr id="f1" />
                    </div>
                </form>
            </div>
            <br />
            <p style="width: 80%">
                <b>2.</b> Realizaţi o pagină Web în cod HTML cu formularul de
                maijos.Aplicaţistiluri CSS formularuluipentruformatarecaîn imagine.
                Elaboraţiun script PHP cevapreluadatele din formularși le
                vaafișaîntr-o pagină Web. Încazulcînd n-a fostselectatniciuncîmp se
                vareveni la formularpentrucompletare.
            </p>
            <form class="form-2" action="meniu.php">
                <h3>Livrare Pizza</h3>
                <div class="b2">
                    Numele Dvs.
                    <input style="margin: 0px 5px 15px 56px" type="text" name="f2_nume" />
                </div>
                <div class="b2">
                    Număru Dvs.
                    <input style="margin: 0px 5px 15px 54px" type="text" name="f2_numar" />
                </div>
                <div class="b2">
                    Alegeți pizza
                    <input style="margin: 0px 5px 15px 55px" type="checkbox" name="f2_piperoni" />Piperoni<input
                        style="margin: 0px 5px 0px 15px" type="checkbox" name="f2_vegetarian" />Vegetarian<input
                        style="margin: 0px 5px 0px 15px" type="checkbox" name="f2_ranchio" />Rancio
                </div>
                <div class="b2">
                    Sos pentru pizza
                    <select style="margin: 0px 5px 15px 34px">
                        <option>Sercret Sauce 1</option>
                        <option>Sercret Sauce 2</option>
                        <option>Sercret Sauce 3</option>
                    </select>
                </div>
                <div class="b2">
                    Adaos adaugător
                    <input style="margin: 0px 5px 15px 32px" style="margin-left: 32px 0px 5px 10px" type="checkbox"
                        name="f2_extraCheese" />Extra Cheese<input style="margin: 0px 5px 0px 15px" type="checkbox"
                        name="f2_gluten" />Gluten Free Base
                </div>
                <div class="produse_b2">
                    Instructiuni pentru<br />
                    livrare
                    <textarea style="margin-left: 20px" name="f2_liv_mesage" id="" cols="39" rows="5"></textarea>
                </div>
                <button style="
              background-color: #ffff;
              border-radius: 4px;
              margin: 15px 5px 5px 145px;cursor:pointer;
            ">
                    TRIMITE Comanda
                </button>
            </form>

            <br />
            <p style="width: 80%">
                <b>3.</b> Realizaţi o pagină Web în cod HTML cu formularul de mai jos.Aplicaţi stiluri CSS formularului
                pentru formatare ca în imagine. Elaboraţiun script PHP ceva prelua datele din formularși le
                vaafișaîntr-o pagină Web. Încazul cînd
                n-a fostselectat nici un cîmp se va reveni la formular pentru completare.
            </p>
            <br />


            <div class="form-3">
                Please complete the form below

                <div class="form-31">

                    <fieldset class="f3_f1">
                        <legend> Login Details</legend>
                        <div class="l1i">
                            <label for="f3_user">User Name </label>
                            <label for="f3_password">Password </label>
                            <label for="f3_password_2">Retype passwort</label>
                        </div>
                        <div class="l2">
                            <input type="text" id="f3_user" name="f3_user"> <br>
                            <input type="password" id="f3_password" name="f3_password"> <br>
                            <input type="password" id="f3_password_2" name="f3_password_2">
                        </div>
                    </fieldset>



                    <fieldset class="f3_f2">
                        <legend>User Details</legend>
                        <div class="l1">
                            <label for="f3_fname">First Name </label>
                            <label for="f3_lname">Last Name </label>
                            <label for="f3_gmale">Gender </label>
                            <label for="f3_dbrith">Date of Birth </label>
                            <label for="f3_email">Email</label><br>
                        </div>
                        <div class="l2">
                            <input type="text" id="f3_fname" name="f3_fname"> <br>
                            <input type="text" id="f3_lname" name="f3_lname"> <br>
                            <label for="f3_gmale"><input type="radio" id="f3_gmale" name="f3_gmale"> <label
                                    for="f3_gmale">Male</label><input type="radio" id="f3_gfemale" name="f3_gfemale">
                                <label for="f3_gfemale">Female</label> <br>
                                <input type="date" id="f3_dbrith" name="f3_dbrith"> <br>
                                <input type="text" id="f3_email" name="f3_email"> <br>
                        </div>
                    </fieldset>
                    <button style="background-color:#0B7ED3;border-radius: 5px;
   font-size: x-large;cursor:pointer;">Register</button>
                </div>
            </div>
            <br />
            <p style="width: 80%">
                <b>4.</b> Realizațiunformularcaînimaginea de maijos.Elaborațiun script în PHP care vaafișalista de
                cărțiselectateșisumatotală la apăsareabutonuluiAfișează
            </p>
            <br />
            <form class="f4" action="/1.php" method="GET" id=f4>
                <table class="f_table">
                    <tr>
                        <th style="border-bottom: 1px solid red;">Selecteaza</th>
                        <th style="border-bottom: 1px solid red;">Denumire</th>
                        <th style="border-bottom: 1px solid red;">Pret</th>
                    </tr>
                    <tr>
                        <th><input type="checkbox" name="denumire"></th>
                        <label for="denumire">
                            <td name="Capra">Capra cu trei iezi</td>
                            <td>200</td>
                        </label>
                    </tr>
                    <tr>

                </table>
                <input type="button" value="aaa">
                <button class="b_f4" type="submit" form="f4" value="Afisează">Afisează</button>
            </form>
            <br />
            <p style="width: 80%">
                <b>5.</b> Realizați o pagină Web în cod HTML caînimaginea de maijos.Realizațiun script care vacalcula
                media de concurs la apăsareabutonuluiCalculeaza.
            </p>
            <br />
















            <!-- ///////////////// -->
        </div>
    </div>
</body>

</html>