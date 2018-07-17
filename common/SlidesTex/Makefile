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
OUTPUTDIR:=output
LATEXOPTS:=-pdfps -output-directory=$(OUTPUTDIR)
LATEX:=latexmk $(LATEXOPTS)
# To please Emacs, if it cannot infer latex mode
TEX:=$(LATEX)

# Targets
slides: $(TGT)Slides.pdf
handouts: $(TGT)Handout.pdf
all: slides handouts

%.pdf: %.tex $(DEP)
	$(LATEX) $< 
	$(LN) -s -f $(OUTPUTDIR)/$@ $@

%.ps: %.dvi
	$(DVIPS) -o $@ $?


.PHONY: prep clean clobber fresh
prep:
	-mkdir -p output

clean: 
	-$(RM) -f $(OUTPUTDIR)/*

clobber: clean
	-$(RM) -f $(HANDOUTS).ps $(HANDOUTS).pdf
	-$(RM) -f $(SLIDES).ps $(SLIDES).pdf

fresh: clobber all
