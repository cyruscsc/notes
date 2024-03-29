<form method="POST" <?= isset($note['body']) ? 'action="/note"' : 'action="/notes"' ?>>
  <?php if (isset($note['body'])) : ?>
    <input type="hidden" name="_method" value="PATCH">
    <input type="hidden" name="id" value="<?= $note['id'] ?>">
  <?php endif; ?>
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <h2 class="text-base font-semibold leading-7 text-gray-900"><?= $heading ?></h2>
      <p class="mt-1 text-sm leading-6 text-gray-600"><?= $description ?></p>
      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="col-span-full">
          <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Body</label>
          <div class="mt-2">
            <textarea id="body" name="body" rows="3" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"><?= $note['body'] ?? '' ?></textarea>
          </div>
          <?php if (isset($errors['body'])) : ?>
            <p class="mt-3 text-sm leading-6 text-red-600"><?= $errors['body'] ?></p>
          <?php else : ?>
            <p class="mt-3 text-sm leading-6 text-gray-600">What's on your mind?</p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="mt-6 flex items-center justify-end gap-x-6">
    <a href="/notes" type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
  </div>
</form>