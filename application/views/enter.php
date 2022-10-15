<?
//представление личного кабинета (страница личного кабинета)
if(!$unVisibleForm):?>
<!--h1>Вход в личный кабинет</h1>
<!-- ?endif;?>
<!--?

if(!$unVisibleForm):
echo $msg;
?>
<form action="/enter" method="POST">
  Логин: &nbsp;<input type="text" name="login" value="<?=$login?>" /><br />
  Пароль: <input type="text" name="pass" value="<?=$pass?>" /><br />
  <input type="submit" value="Вход" />
</form>
<!-- ?else:?>
<h1>Личный кабинет пользователя <?=$userName?></h1>
<a href="/enter?out=1">Выйти из кабинета!</a>
<!-- ?endif;?-->

<div class="dropdown-menu">
  <form class="px-5 py-4">
    <div class="form-group">
      <label for="exampleDropdownFormEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
    </div>
    <div class="form-group">
      <label for="exampleDropdownFormPassword1">Password</label>
      <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="dropdownCheck">
      <label class="form-check-label" for="dropdownCheck">
        Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
  </form>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="#">New around here? Sign up</a>
  <a class="dropdown-item" href="#">Forgot password?</a>
</div>
