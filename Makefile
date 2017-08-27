build:
	rm -f happyprime.tar
	rm -rf happyprime
	mkdir happyprime
	cp style.css happyprime/
	cp -fr template-parts happyprime/
	cp *.php happyprime/
