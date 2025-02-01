<div>
    <form class="contact-form" method="POST" action="{{ route('store_form') }}">
        <label for="fname">Введите имя:</label>
        <input type="text" name="fname" id="fname"/>
        <label for="lname">Введите фамилию:</label>
        <input type="text" name="lname" id="lname"/>
        <label for="email">Введите email:</label>
        <input type="text" name="email" id="email"/>
        @csrf
        <input type="submit" value="отправить" />
    </form>
</div>
