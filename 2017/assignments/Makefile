include ../Makefile.inc
TARGETS =	asgn1/Assignment.html \
                asgn2/Assignment.html \
                asgn3/Assignment.html

.PHONY	: 	all clean

all	:	$(TARGETS)

$(TARGETS)	:	%.html	:	%.markdown ../footer.markdown ../htmlheader.html ../htmlfooter.html
	@cat 	$< ../footer.markdown		> tmp.markdown
	@$(LASTMODIFIED) >> tmp.markdown
	@$(MARKDOWN) --ascii	tmp.markdown > tmp.html
	@cat  ../htmlheader.html tmp.html ../htmlfooter.html  > $@
	@echo "Generating : " $@
	-@$(RM) tmp.markdown tmp.html

subdirs	:	$(SUBDIRS)

$(SUBDIRS)	:
	@$(MAKE)	-C	$@
	@echo "Making : " $@

clean	:	
	-@$(RM) $(TARGETS)
