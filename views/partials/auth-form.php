<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900"><?= $heading ?></h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="<?= $type === "register" ? "/register" : "/login" ?>" method="POST">
      <?php if ($type === 'register') : ?>
        <div>
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
          <div class="mt-2">
            <input id="name" name="name" type="text" autocomplete="name" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
          <?php if ($errors['name'] ?? false) : ?>
            <p class="mt-3 text-sm leading-6 text-red-600"><?= $errors['name'] ?></p>
          <?php endif; ?>
        </div>
      <?php endif; ?>

      <div>
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
        <div class="mt-2">
          <input id="email" name="email" type="email" autocomplete="email" value="<?= old('email') ?>" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
        <?php if ($errors['email'] ?? false) : ?>
          <p class="mt-3 text-sm leading-6 text-red-600"><?= $errors['email'] ?></p>
        <?php endif; ?>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
          <?php if ($type === 'login') : ?>
            <div class="text-sm">
              <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
            </div>
          <?php endif; ?>
        </div>
        <div class="mt-2">
          <input id="password" name="password" type="password" autocomplete="current-password" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
        <?php if ($errors['password'] ?? false) : ?>
          <p class="mt-3 text-sm leading-6 text-red-600"><?= $errors['password'] ?></p>
        <?php endif; ?>
      </div>

      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><?= $buttonText ?></button>
      </div>
      <?php if ($errors['credentials'] ?? false) : ?>
        <p class="mt-3 text-sm leading-6 text-red-600"><?= $errors['credentials'] ?></p>
      <?php endif; ?>
    </form>

    <?php if ($type === 'register') : ?>
      <p class="mt-10 text-center text-sm text-gray-500">
        Have an account?
        <a href="/login" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Log in now</a>
      </p>
    <?php else : ?>
      <p class="mt-10 text-center text-sm text-gray-500">
        Not a member?
        <a href="/register" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Start a 14 day free trial</a>
      </p>
    <?php endif; ?>
  </div>
</div>