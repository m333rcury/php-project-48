install:
	composer install

validate:
	composer validate

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin

test:
	composer run-script test

test-coverage:
	composer run-script test-coverage

gendiff:
	./bin/gendiff