# TGT shd be the base of the tex file (filename without .tex extension)
# Finally we create $(TGT)Slides.tex and $(TGT)Handout.tex
TGT:=22TypeBasedPointsTo
# include full name of dependencies
DEP:=title.tex defs.tex \
	$(TGT).tex

#--------------------------------------------------------------
# Should not need to change things below

# Variables
RM=/bin/rm
LN=/bin/ln

SLIDES:=$(TGT)Slides
HANDOUTS:=$(TGT)Handout
OUTPUTDIR:=../lecturenotes
LATEXOPTS:=-pdfps -output-directory=$(OUTPUTDIR)
LATEX:=latexmk $(LATEXOPTS)
# To please Emacs, if it cannot infer latex mode
TEX:=$(LATEX)

# Targets
slides: $(TGT)Slides.pdf
handouts: $(TGT)Handout.pdf
all: prep slides handouts

%Handout.pdf: %Handout.tex 
	$(LATEX) $< 
	pdfnup --nup '2x2' --frame true --delta '5mm 5mm' --scale 0.95 \
	        $(OUTPUTDIR)/$@ --outfile /tmp/bakup.pdf
	mv /tmp/bakup.pdf $(OUTPUTDIR)/$@ 

%.pdf: %.tex $(DEP)
	$(LATEX) $< 

%.ps: %.dvi
	$(DVIPS) -o $@ $?


.PHONY: prep clean clobber fresh
prep:
	-mkdir -p output

clean: 
	-$(RM) -f $(OUTPUTDIR)/*.aux
	-$(RM) -f $(OUTPUTDIR)/*.dvi
	-$(RM) -f $(OUTPUTDIR)/*.fdb_latexmk
	-$(RM) -f $(OUTPUTDIR)/*.fls
	-$(RM) -f $(OUTPUTDIR)/*.log
	-$(RM) -f $(OUTPUTDIR)/*.nav
	-$(RM) -f $(OUTPUTDIR)/*.out
	-$(RM) -f $(OUTPUTDIR)/*.ps
	-$(RM) -f $(OUTPUTDIR)/*.snm
	-$(RM) -f $(OUTPUTDIR)/*.toc

clobber: clean
	-$(RM) -f $(OUTPUTDIR)/*

fresh: clobber all
