<form action="" method="POST">
    Выберите регион
    <select name="region">
            <option disabled>Выберите регион</option>
            {foreach item=item from=$arr}
                <option value='$item.region'></option>
            {/foreach}
    </select>
    <br>

    Выберите страну
    <select name="country">
        <option disabled>Выберите страну</option>
        {foreach item=item from=$arr}
            <option value='$item.country'></option>
        {/foreach}
    </select>
    <br>

    Выберите  город
    <select name="city">
        <option disabled>Выберите город</option>
        {foreach item=item from=$arr}
            <option value='$item.city'></option>
        {/foreach}
    </select>
</form>



