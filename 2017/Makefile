include Makefile.inc

SUBDIRS = assignments project  #papercritique
TARGETS =	index.html	 

.PHONY	: 	all clean subdirs $(SUBDIRS) websync

all	:	$(TARGETS)	$(SUBDIRS) websync

$(TARGETS)	:	%.html	:	%.markdown footer.markdown htmlheader.html htmlfooter.html
	@cat 	$< footer.markdown		> tmp.markdown
	@$(LASTMODIFIED) >> tmp.markdown
	@$(MARKDOWN) --ascii tmp.markdown > tmp.html
	@cat  htmlheader.html tmp.html htmlfooter.html  > $@
	@echo "Generating : " $@
	-@$(RM) tmp.markdown tmp.html

websync:
	@echo "Syncing IITK Webpage..."
	rsync -avz ./ karkare@turing:public_html/cs738/

subdirs	:	$(SUBDIRS)

$(SUBDIRS)	:
	@$(MAKE)	-C	$@
	@echo "Making : " $@

clean	:	
	-@$(RM) $(TARGETS)
