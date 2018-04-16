<div class="container margin-top-30">
    <div class="row row-centered">
    <div class="col-xs-9 col-md-6" style="float:none; margin:0 auto; margin-top:2%; margin-bottom:2%; ">
        <h2 style="padding-bottom:10px;">Анкета</h2>
        <form class="form-horizontal">
            <div class="form-group">
                <label class="control-label col-xs-3" for="lastName">Фамилия:</label>
                <div class="col-xs-9">
                    <input type="text" class="form-control" id="lastName" placeholder="Введите фамилию">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3" for="firstName">Имя:</label>
                <div class="col-xs-9">
                    <input type="text" class="form-control" id="firstName" placeholder="Введите имя">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3" for="fatherName">Отчество:</label>
                <div class="col-xs-9">
                    <input type="text" class="form-control" id="fatherName" placeholder="Введите отчество">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Дата рождения:</label>
                <div class="col-xs-9">
                    <input type="date" class="form-control" placeholder="Date">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3" for="lastName">Паспорт:</label>
                <div class="col-xs-3">
                    <input type="text" class="form-control" id="lastName" placeholder="Введите SK">
                </div>
                <div class="col-xs-6">
                    <input type="text" class="form-control" id="lastName" placeholder="SK номер">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Пол:</label>
                <div class="col-xs-2">
                    <label class="radio-inline">
                        <input type="radio" name="genderRadios" value="male"> Мужской
                    </label>
                </div>
                <div class="col-xs-2">
                    <label class="radio-inline">
                        <input type="radio" name="genderRadios" value="female"> Женский
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Профессия:</label>
                <div class="col-xs-9">
                    <input type="" class="form-control" id="" placeholder="Профессия">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3" for="inputEmail">Email:</label>
                <div class="col-xs-9">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Тел номер:&nbsp;+</label>
                <div class="col-xs-9">
                    <input type="tel" pattern="[0-9]{12}" class="form-control" id="" placeholder="Тел номер">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3" for="postalAddress">Адрес:</label>
                <div class="col-xs-9">
                    <textarea rows="3" class="form-control" id="postalAddress" placeholder="Введите адрес"></textarea>
                </div>
            </div>

            <hr>
            <!-- Маквон-->
            <div class="form-group">
                <label class="control-label col-xs-6"><h4>Выбрать категорию</h4></label>
                <select id="" class="form-control col-md-6" name="p01-contact_fields[4]">
                    <option id="" value=" Сотрудничество" selected="selected"> Маквон</option>
                    <option id="" value=" Предложения"> Ансан</option>
                </select>
            </div>
            <h2>Маквон</h2>
            <div class="form-group" style="background:#f5f3f3;">
                <label class="control-label col-xs-6">Копия свидетельства о рождении:</label>
                <div class="col-xs-2">
                    <p><input type="file" name="f">
                </div>
            </div>
            <div class="form-group" style="background:#f5f3f3;">
                <label class="control-label col-xs-6">Копия паспортов родителей студента:</label>
                <div class="col-xs-2">
                    <p><input type="file" name="f">
                </div>
            </div>
            <div class="form-group" style="background:#f5f3f3;">
                <label class="control-label col-xs-6">Копия свидетельства о заключении брака родителей студента:</label>
                <div class="col-xs-2">
                    <p><input type="file" name="f">
                </div>
            </div>
            <div class="form-group" style="background:#f5f3f3;">
                <label class="control-label col-xs-6">Фотографии 4x5 (на белом фоне) - 8шт:</label>
                <div class="col-xs-2">
                    <p><input type="file" name="f">
                </div>
            </div>
            <div class="form-group" style="background:#f5f3f3;">
                <label class="control-label col-xs-6">Копия свидетельства о рождении:</label>
                <div class="col-xs-2">
                    <p><input type="file" name="f">
                </div>
            </div>

            <!--Ансан-->
            <hr>
            <h2>Ансан</h2>
            <div class="form-group" style="background:#f5f3f3;">
                <label class="control-label col-xs-6">Копия паспорта студента;</label>
                <div class="col-xs-2">
                    <p><input class="" type="file" name="f">
                </div>
            </div>
            <div class="form-group" style="background:#f5f3f3;">
                <label class="control-label col-xs-6">Апостиль диплома о среднем-образовании;</label>
                <div class="col-xs-2">
                    <p><input type="file" name="f">
                </div>
            </div>
            <div class="form-group" style="background:#f5f3f3;">
                <label class="control-label col-xs-6">Справка с банка о том, что на счету у студента или у родителя студента имеется более 10.000$ США (на англиском языке);</label>
                <div class="col-xs-2">
                    <p><input type="file" name="f">
                </div>
            </div>
            <div class="form-group" style="background:#f5f3f3;">
                <label class="control-label col-xs-6">Справка с места работы подителей о зароботоной плате или справка об открытии бизнеса (за пос-лед 3-года);</label>
                <div class="col-xs-2">
                    <p><input type="file" name="f">
                </div>
            </div>

            <div class="form-group" style="background:#f5f3f3;">
                <div class="col-xs-offset-3 col-xs-9">
                    <label class="checkbox-inline">
                        <input type="checkbox" value="agree">  Я согласен с <a href="#">условиями</a>.
                    </label>
                </div>
            </div>
            <br />

            <div class="form-group">
                <div class="col-xs-offset-3 col-xs-9">
                    <input type="submit" class="btn btn-primary" value="Отправить">
                    <p>место для запроса подверждение бланки</p>
                </div>
            </div>
        </form>
    </div>
</div>
</div>