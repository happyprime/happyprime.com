build:
	rm -f happyprime.tar
	rm -rf happyprime
	mkdir happyprime
	cp style.css happyprime/
	cp -fr template-parts happyprime/
	cp *.php happyprime/
	tar --create --file=happyprime.tar happyprime

deploy:
	scp happyprime.tar foghlaimeoir:/home/jeremyfelt/
