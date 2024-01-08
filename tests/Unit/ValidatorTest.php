<?php

use Core\Validator;

it('validates a string', function () {
  expect(Validator::string('foo'))->toBeTrue();
  expect(Validator::string(false))->toBeFalse();
  expect(Validator::string(''))->toBeFalse();
});

it('validates a string with minimun length', function () {
  expect(Validator::string('foo', 20))->toBeFalse();
});

it('validates an email address', function () {
  expect(Validator::email('foo'))->toBeFalse();
  expect(Validator::email('cyrus@dev.com'))->toBeTrue();
});
