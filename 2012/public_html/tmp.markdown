#CS 738 - Advanced Compiler Optimization (2011-12 II Semester)
******
* __Instructor__: [Amey Karkare][karkare] (<karkare@cse.iitk.ac.in>)
* __TAs__ : [Saurabh Joshi][sbjoshi] (<sbjoshi@cse.iitk.ac.in>), [Pritesh Agarwal][pritesh]  (<pritesh@cse.iitk.ac.in>)
* __Timings__ : Wed,Fri: 2:00PM - 3:20PM



******

This course aims to teach advanced topics in compiler optimizations.

* [Code of Ethics](#ethics)
* [Announcements](#announcements)
* [Course Outline](#outline)
* [Topics covered and handouts](#handouts)
* [Assignments](#assignments)
* [Course Project](#project)
* [Supporting Material](#support)
* [Research Material](#research)
* [Recommended References](#reference)

## Performance
<i>NEW:</i> Check your performance [HERE](http://karkare.cse.iitk.ac.in/~cs738/grades/)

##Code of Ethics <a id="ethics"/>

Any report/program/assignment you submit must __clearly distinguish__ your contribution from others (webpages, softwares, report, discussions with other students). <font color="red">The penalty for copying in any form will be severe</font>.

##Announcements <a id="announcements"/>

 <font color="red">Important</font> :  All emails either to the instructor or the TAs should begin with subject line "__[CS738]__" -- without any spaces in the course code (and without quotes). Email not complying to this rule __will NOT be entertained__.
 Dates following the announcement corresponds to the date when the announcement was made. __DO NOT__ confuse it with submission deadlines. Keep checking the announcement section regularly.

- Deadline for final project report submission is ~~17 April 2012 23:59:59~~. Click [here](#project) for more details.
- Assignment 4 uploaded. Deadline ~~30 Mar 2012 11:59:59PM~~.(16 Mar 2012)
- Paper Critique submission deadline ~~23 Mar 2012 11:59:59PM~~. Check [Piazza](https://piazza.com/class#winter2012/cs738) announcement for details. (07 Mar 2012)
- Assignment 3 uploaded. ~~Deadline 14 Mar 2012 11:59:59PM~~.(20 Feb 2012)
- E-mail your choice for paper critique to the instructor as well as TAs by ~~25th Feb 2012 11:59:59PM~~. Details are [here](papercritique/cs738_papers.html).(17 Feb 2012)
- E-mail your detailed project proposal to the instructor as well as TAs. The subject of the mail should be __"[CS738] Project"__. Deadline for submission is ~~15 Feb 2012 11:59:59PM~~. Post any related queries on Piazza. (04 Feb 2012) 
- Assignment 2 uploaded. ~~Deadline 29 Jan 2012~~.(23 Jan 2012)
- Project groups finalized.(17 Jan 2012)
- Slides for lecture 2 & 3 are uploaded.(11 Jan 2012)
- E-mail your project group, language/infrastructure you plan to use, project idea (if you have some), and any other relevant information to the instructor as well as TAs. The subject of the mail should be __"[CS738] Project"__. Deadline for submitting this information is ~~13 Jan 2012 11:59:59PM~~ .(11 Jan 2012) 
- Everyone taking the course __must register__ on [Piazza](https://piazza.com/class#winter2012/cs738). (11 Jan 2012)
- Assignment 1 uploaded.(5 Jan 2012)
- Course project can de done individually or in a grup of two.(5 Jan 2012)
- Slides for introductory lectures uploaded.(5 Jan 2012)



##Course Outline <a id="outline"/>

The course will mainly cover topics from the following list (not necessarily in the same order). Not all topics listed below will be covered, and depending on class feedback, new topics may be added. 

- Introduction, compiler architecture, intermediate representations
- Control flow analysis, control-flow graphs, basic blocks
- Dataflow analysis
- SSA form
- Classical optimizations (constant folding, CSE, PRE)
- Loop optimizations
- Register allocation
- Pointer and alias analysis
- Interprocedural analysis
- Advanced Topics: Garbage Collection, Dynamic (JIT) compilation, Program Synthesis

###Evaluation 

---------------------------------            ----------
Assignments                                        5%

Paper presentation and critique                    20%

Course Project                                     40%

   --Proposal(5%)+Report(20%)
   +Presentation(15%)     


End semester exam                                  30%

Class Discussions                                  5%

-------------------------------                ----------

##Topics Covered and Slides <a id="handouts"/>
The slides are not suitable for taking prints as there is lot of redundancy due to overlays. Use handouts if you really need a print.

---  ----------------------------------     -----------------------------------------------------------          -----------------------------------------------------------     -------------------------------------------  

 1.  Introduction                           [[handouts](lecturenotes/01IntroductionHandout.pdf)]                 [[slides](lecturenotes/01Introduction.pdf)]
 2.  Optimization Overview                  [[handouts](lecturenotes/02OptimizationOverviewHandout.pdf)]         [[slides](lecturenotes/02OptimizationOverview.pdf)]
 3.  Dataflow Analysis                      [[handouts](lecturenotes/03DataFlowAnalysisHandout.pdf)]             [[slides](lecturenotes/03DataFlowAnalysis.pdf)]
 4.  ... (contd)                            [[handouts](lecturenotes/04DataFlowAnalysisHandout.pdf)]             [[slides](lecturenotes/04DataFlowAnalysis.pdf)]
 5.  Foundations of Data Flow Analysis      [[handouts](lecturenotes/05FoundationsDataFlowAnalysisHandout.pdf)]  [[slides](lecturenotes/05FoundationsDataFlowAnalysis.pdf)]
 6.  ... (contd)                            [[handouts](lecturenotes/06FoundationsDataFlowAnalysisHandout.pdf)]  [[slides](lecturenotes/06FoundationsDataFlowAnalysis.pdf)]
 7.  Flow Graph Theory                      [[handouts](lecturenotes/07FlowGraphTheoryHandout.pdf)]              [[slides](lecturenotes/07FlowGraphTheory.pdf)]                  (Reading Assignment)
 8.  Constant Propagation                   [[handouts](lecturenotes/08ConstantPropagationHandout.pdf)]          [[slides](lecturenotes/08ConstantPropagation.pdf)]
 9.  Static Single Assignment Form          [[handouts](lecturenotes/09SSAHandout.pdf)]                          [[slides](lecturenotes/09SSA.pdf)]                              [[paper](http://dl.acm.org/citation.cfm?id=115320)]
10.  ... (contd)                            [[handouts](lecturenotes/10SsaOptsHandout.pdf)]                      [[slides](lecturenotes/10SsaOpts.pdf)]
11.  Conditional Constant Propagation       [[handouts](lecturenotes/11CondConstPropHandout.pdf)]                [[slides](lecturenotes/11CondConstPropSlides.pdf)]              [[paper](http://dl.acm.org/citation.cfm?id=103136)]
12.  SSA PRE                                [[handouts](lecturenotes/12SSAPREHandout.pdf)]                       [[slides](lecturenotes/12SSAPRESlides.pdf)]                     [[paper](http://dl.acm.org/citation.cfm?id=319348)]
13.  ... (contd)                            [[handouts](lecturenotes/13SsaPreExampleHandout.pdf)]                [[slides](lecturenotes/13SsaPreExampleSlides.pdf)]
14.  Interprocedural Analysis               [[handouts](lecturenotes/14InterProcHandout.pdf)]                    [[slides](lecturenotes/14InterProcSlides.pdf)]
15.  ... (Functional Approach)              [[handouts](lecturenotes/15InterProcHandout.pdf)]                    [[slides](lecturenotes/15InterProcSlides.pdf)]
16.  ... (Call Strings Approach)            [[handouts](lecturenotes/16ip-dfa4in1.pdf)]                          [[slides](lecturenotes/16ip-dfa.pdf)]                           (Prof Uday Khedker's notes)
17.  Pointer Analysis                       [[handouts](lecturenotes/17PointerAnalysisHandout.pdf)]              [[slides](lecturenotes/17PointerAnalysisSlides.pdf)]            [[Streensgaard](http://dl.acm.org/citation.cfm?id=237727)] [[Anderson](http://www-ti.informatik.uni-tuebingen.de/~behrend/PaperSeminar/Program%20Analysis%20and%20SpecializationPhD.pdf)]
18.  ... (contd)
19.  Heap Reference Analysis                [[handouts](lecturenotes/19HRAHandout.pdf)]                          [[slides](lecturenotes/19HRASlides.pdf)]                        [[paper](http://dl.acm.org/citation.cfm?id=1290521)]
20.  ... (contd)
21.  ... (contd)

---  ----------------------------------     -----------------------------------------------------------          ------------------------------------------------                 -------------------------------------------  


##Assignments <a id="assignments"/>

There will be short assignments to give you a chance to apply the lecture material. Assignments will have some written and some programming tasks. 

* [Assignment 4](assignments/asgn4/asgn4.pdf) : ~~Deadline 30th Mar 2012~~
* [Assignment 3](assignments/asgn3/asgn3.pdf) : ~~Deadline 14th Mar 2012~~
* [Assignment 2](assignments/asgn2/asgn2.pdf) : ~~Deadline 29th Jan 2012~~
* [Assignment 1](assignments/asgn1/asgn1.pdf) : ~~Deadline 11th Jan 2012~~
	- Submitted reports. [[here](assignments/asgn1/asgn1_submit.html)]




##Course Project<a id="project"/>

The course project gives you a chance to explore a specific area of compiler implementation in more depth. You will be required to __implement__ some compiler feature, and perform an __experimental evaluation__ of your implementation. You may do your implementation within any freely-available compiler infrastructure (e.g. [Soot][soot], [JikesRVM][jikesrvm], [LLVM][llvm], [gcc][gcc], [Eclipse][eclipse], [Frama-C][framac], etc.) (Some [Details about each infrastructure.][infra])


You will report on your project in a paper in the style of a PLDI research paper (approx. 10 pages), and give a presentation/demo of your project to the class. [LaTeX and MS Word templates for the PLDI paper format are available from SIGPLAN.][templates] 

* Project can be done individually or in a group of two.
* Final project groups and titles [[here](projects/pgroup.html)]
* Deadline for final project report submission is ~~17 April 2012 23:59:59~~. This first submission is __compulsory__.
    - One resubmission will allowed before 20 April 2012 23:59:59 to let project groups fix minor mistakes and accommodate changes suggested during the demo.
    - No new features should be added or major changes should be done between the first and the second submission. These changes will __NOT__ carry any weight.
    - Project report carrier __20%__ weight. Hence, project groups are advised to put in their earnest efforts.    


##Supporting Material <a id="support"/>
##### Most of the following softwares are available from package repositories of linux distributions. It is recommended to use these repositories and install than to build them from source.

* [darcs][darcs] : A very good version control system
* [cscope][cscope] and [ctags][ctags] : Code browing utilities
* [Eclipse][eclipse] : A Java based Integrated Development Environment
* [LaTeX][latex] : A document preparation system
	- [Here][latexdocs] are some LaTeX related documents



##Research Material <a id="research"/>

* Journals
    -  International Journal of Parallel Programming
    -  Journal of the ACM
    -  Communications of the ACM
    -  ACM Transactions on Programming Languages
    -  IEEE Software
    -  IEEE Computer
    -  IEEE Transactions on Computers
    -  IEEE Transactions on Parallel and Distributed Systems
    -  IEEE Transactions on Software Engineering
    -  IBM Journal of Research and Development
    -  IBM Systems Journal
    -  SIAM Jounal of Computing
    -  SIGPLAN Notices
    -  ACTA INFORMATICA

* Conference Proceedings
    - International Conferences on Parallel Processing (ICPP)
    - Proceedings of International Conf on Software Engineering (ICSE)
    - Lecture Notes in Computer Science series.
    - Proceedings of SIGPLAN conference on Programming Language Design and Implementation (PLDI)
    - ACM Transactions on Programming Languages and Systemes (TOPLAS)
    - ACM Symposium on Principles of Programming Languages (POPL)
    - Proceedings SIGPLAN Simposium on Compiler Construction (CC)
    - Annual International Symposium on Computer Architecture (ISCA)
    - Proc. International Conference on Architectural Support for Programming Languages and Operating Systems (IEEE) (ASPLOS)
    - International Parallel Processing Symposium, IEEE Computer Society.
    - International Static Analysis Symposium (SAS)
    - and many more ...

##Recommended References <a id="reference"/>

* Appel, A., __Modern Compiler Implementation in Java__ (or ML, or C), Cambridge University Press, 2002.
* Cooper, K., Torczon, L., __Engineering a Compiler__, Morgan Kaufmann, 2004
* Muchnick, S., __Advanced Compiler Design and Implementation__, Morgan Kaufmann, 1997.
* Aho, A., Lam, M., Sethi, R., Ullman, J., __Compilers: Principles, Techniques, & Tools__, Addison Wesley, 2007.
* Y. N. Srikant, Priti Shankar, __The Compiler Design Handbook: Optimizations and Machine Code Generation__, CRC Press, 2008
* Randy Allen, Ken Kennedy,__Optimizing Compilers for Modern Architectures: A Dependence-based Approach__, Morgan Kaufmann, 2001 



[karkare]:	http://www.cse.iitk.ac.in/users/karkare
[sbjoshi]:	http://www.cse.iitk.ac.in/users/sbjoshi
[pritesh]:	http://www.cse.iitk.ac.in/users/pritesh
[soot]:		http://www.sable.mcgill.ca/soot
[jikesrvm]:	http://jikesrvm.sourceforge.net/
[llvm]:		http://llvm.org/
[gcc]:		http://gcc.gnu.org/
[eclipse]:	http://www.eclipse.org/
[framac]:	http://frama-c.com/
[templates]:	http://www.sigplan.org/authorInformation.htm
[infra]:	InfraDetails.html
[darcs]:	http://darcs.net
[cscope]:	http://cscope.sourceforge.net
[ctags]:	http://ctags.sourceforge.net
[latex]:	http://www.latex-project.org
[eclipse]:	http://www.eclipse.org
[latexdocs]:	SupportMaterial/latexdocs.tar


------------------------
###Take me [Home](http://www2.cse.iitk.ac.in/karkare/cs738)

###### powered by [Pandoc](http://johnmacfarlane.net/pandoc/)

Last Modified at :  Fri Nov 2 22:23:56 IST 2012
