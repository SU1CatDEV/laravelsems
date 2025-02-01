{{-- я не знаю конкретно ли это хотели, но меня не учили создавать АПИ с цсрф, а в формах передовать put нельзя. --}}
<form name="employee-form" id="employee-form" method="post" action="{{ url('/employee/'.$id) }}">
    @csrf
    <div class="form-group">
        <label for="name">Имя</label>
        <input type="text" id="name" name="name" class="form-control" required="true"/>
    </div>
    <div class="form-group">
        <label for="surname">Фамилия</label>
        <input type="text" id="surname" name="surname" class="form-control" required="true"/>
    </div>
    <div class="form-group">
        <label for="age">Возраст</label>
        <input type="number" id="age" name="age" class="form-control" required="true"/>
    </div>
    <div class="form-group">
        <label for="salary">Зарплата</label>
        <input type="number" id="salary" name="salary" class="form-control" required="true"/>
    </div>
    <div class="form-group">
        <label for="role">Должность</label>
        <input type="text" id="role" name="role" class="form-control" required="true"/>
    </div>
    <div class="form-group">
        <label for="job_tasks">Задачи / описание должности</label>
        <input type="text" id="job_tasks" name="job_tasks" class="form-control" required="true"/>
    </div>
    <div class="form-group">
        <label for="address">Адрес (в формате JSON)</label>
        <textarea type="text" id="address" name="address" class="form-control" required="true"></textarea>
    </div>
    <input type="submit" value="Отправить"/>
</form>