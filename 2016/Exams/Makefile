TGT=Midsem-2016
 #define_me_on_command_line
LATEX=pslatex

all: pdf
pdf: $(TGT).pdf

$(TGT): $(TGT).ps

$(TGT).pdf: $(TGT).ps
	ps2pdf $(TGT).ps $(TGT).pdf

$(TGT).ps: $(TGT).dvi
	dvips -o $(TGT).ps $(TGT)

$(TGT).dvi: $(TGT).tex
	$(LATEX) $(TGT) && $(LATEX) $(TGT)

.PHONY: clean clobber fresh
clean: 
	-$(RM) -f $(TGT).dvi $(TGT).aux $(TGT).log
	-$(RM) -f $(TGT).toc $(TGT).idx $(TGT).bbl
	-$(RM) -f $(TGT).toc $(TGT).ind $(TGT).blg 
	-$(RM) -f missfont.log $(TGT).ps *~

clobber: clean
	-$(RM) -f $(TGT).pdf

fresh: clobber all
