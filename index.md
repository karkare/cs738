#CS 738: Advanced Compiler Optimizations (2017-18 Ist Semester)<a id="top"/>

******

* __Instructor__: [Amey Karkare][karkare] (<karkare@cse.iitk.ac.in>, <karkare@gmail.com>)
* __Timings__: Wed, Thu 3:30 -- 4:45 PM
* __Venue__: KD 102, Dept of CSE

******

This course aims to teach topics in program analysis and compiler optimizations.

* [Code of Ethics](#ethics)
* [Announcements](#announcements)
* [Course Outline](#outline)
* [Evaluation Scheme](#eval)
* [Topics covered and handouts](#handouts)
* [Assignments](#assignments)
* [Course Project](#project)
* [Supporting Material](#support)
* [Research Material](#research)
* [Recommended References](#reference)

******

##Code of Ethics <a id="ethics"/>

Any report/program/assignment you submit must __clearly
distinguish__ your contribution from others (webpages, softwares,
report, discussions with other students). <font color="red">The
penalty for copying in any form will be severe</font>.

******

##Announcements <a id="announcements"/>

 <font color="red">Important</font>: All emails' subject line
 should begin with "__[CS738]__". Email not complying to this
 rule __will NOT be entertained__.

- [Assignment #3 released](#assignments) on 20th August 2017.
- [Assignment #2 released](#assignments) on 20th August 2017.
- [Assignment #1 released](#assignments) on 02nd August 2017.

******

##Topics Covered and Slides <a id="handouts"/>

The slides are not suitable for taking prints as there is a lot of redundancy due to overlays. Use handouts if you really need a print.

1.  Introduction                      [[handouts](lecturenotes/01IntroHandout.pdf)] [[slides](lecturenotes/01IntroSlides.pdf)] 
    
2.  Overview of Optimizations         [[handouts](lecturenotes/02OptsOverviewHandout.pdf)]         [[slides](lecturenotes/02OptsOverviewSlides.pdf)]

3.  Data Flow Analysis                [[handouts](lecturenotes/03DataFlowAnalysisHandout.pdf)]     [[slides](lecturenotes/03DataFlowAnalysisSlides.pdf)]

4.  Data Flow Analysis (contd ...)    [[handouts](lecturenotes/04DataFlowAnalysisHandout.pdf)]     [[slides](lecturenotes/04DataFlowAnalysisSlides.pdf)]

5.  Data Flow Analysis Foundations    [[handouts](lecturenotes/05FoundationsDFAHandout.pdf)]       [[slides](lecturenotes/05FoundationsDFASlides.pdf)]

6.  DFA Foundations (contd ...)       [[handouts](lecturenotes/06FoundationsDFAHandout.pdf)]       [[slides](lecturenotes/06FoundationsDFASlides.pdf)]

7.  Flow Graph Theory                 [[handouts](lecturenotes/07FlowGraphTheoryHandout.pdf)]      [[slides](lecturenotes/07FlowGraphTheorySlides.pdf)]

8.  Constant Propagation              [[handouts](lecturenotes/08ConstPropHandout.pdf)]         [[slides](lecturenotes/08ConstPropSlides.pdf)]

9.  SSA                               [[handouts](lecturenotes/09SSAHandout.pdf)]                         [[slides](lecturenotes/09SSASlides.pdf)]                         [[paper](http://dl.acm.org/citation.cfm?id=115320)]

10.  SSA (contd ...)                   [[handouts](lecturenotes/10SSAOptsHandout.pdf)]                     [[slides](lecturenotes/10SSAOptsSlides.pdf)]

11.  Conditional Constant Propagation  [[handouts](lecturenotes/11CondConstPropHandout.pdf)]                [[slides](lecturenotes/11CondConstPropSlides.pdf)]               [[paper](http://dl.acm.org/citation.cfm?id=103136)]

12.  Pointer Analysis                  [[handouts](lecturenotes/17PointerAnalysisHandout.pdf)]              [[slides](lecturenotes/17PointerAnalysisSlides.pdf)]             [[Anderson's](http://citeseer.ist.psu.edu/viewdoc/summary?doi=10.1.1.109.6502)][[Steensgaard's](http://dl.acm.org/citation.cfm?id=237727)] [[Yanniss's Tutorial](https://yanniss.github.io/points-to-tutorial15.pdf)]

13.  Interprocedural analysis          [[handouts](lecturenotes/14InterProcHandout.pdf)]                    [[slides](lecturenotes/14InterProcSlides.pdf)]

14.  ... (Functional Approach)         [[handouts](lecturenotes/15InterProcHandout.pdf)]                    [[slides](lecturenotes/15InterProcSlides.pdf)]

RA.  ... (Call-strings Approach)       [[handouts](lecturenotes/16InterProc_CallString_UK_Handout.pdf)]     [[slides](lecturenotes/16InterProc_CallString_UK_Slides.pdf)]    __By [Prof Uday][uday]__

15.  Liveness based Garbage Collection [[handouts](lecturenotes/16LgcHandout.pdf)]                          [[slides](lecturenotes/16LgcSlides.pdf)]                         [[paper1](http://link.springer.com/chapter/10.1007%2F978-3-642-54807-9_5)][[paper2](http://dl.acm.org/citation.cfm?doid=2926697.2926698)] [[Mohri-Nederhof Transformation](https://drona.csa.iisc.ernet.in/~deepakd/atc-common/RegApprox.pdf)]

16.  Types and Program Analysis        [[handouts](lecturenotes/18TypesAndPLHandout.pdf)]                   [[slides](lecturenotes/18TypesAndPLSlides.pdf)]

17.  Untyped Lambda Calculus           [[handouts](lecturenotes/19UTLambdaCalculusHandout.pdf)]             [[slides](lecturenotes/19UTLambdaCalculusSlides.pdf)]

18.  Typed Arithmetic Expressions      [[handouts](lecturenotes/20TypedArithExprHandout.pdf)]               [[slides](lecturenotes/20TypedArithExprSlides.pdf)]

19.  Simply Typed Lambda Calculus      [[handouts](lecturenotes/21STLambdaCalculusHandout.pdf)]             [[slides](lecturenotes/21STLambdaCalculusSlides.pdf)]

20.  Type-based Points-to Analysis     [[handouts](lecturenotes/22TypeBasedPointsToHandout.pdf)]            [[slides](lecturenotes/22TypeBasedPointsToSlides.pdf)]              [[Steensgaard's](http://dl.acm.org/citation.cfm?id=237727)] [[Manuvir's](http://dl.acm.org/citation.cfm?doid=349299.349309)]

RA: __Reading Assignment__

##Assignments <a id="assignments"/>

There will be short assignments to give you a chance to apply the lecture material. Assignments will have some written and some programming tasks. 

* [Assignment 1](assignments/asgn1/Assignment.html) : Deadline 30th July 2017
* [Assignment 2](assignments/asgn2/Assignment.html) : Deadline 25th August 2017
* [Assignment 3](assignments/asgn3/Assignment.html) : Deadline 30th August 2017

******

##Course Project<a id="project"/>

* __Project Description__ [Here](project/)


******

##Course Outline <a id="outline"/>

The course will mainly cover topics from the following list (not necessarily in the same order). Not all topics listed below will be covered, and depending on class feedback, new topics may be added. 

- Introduction, compiler architecture, intermediate representations
- Control flow analysis, control-flow graphs, basic blocks
- Dataflow analysis
- SSA form
- Classical optimizations (constant folding, CSE, PRE)
- Pointer and alias analysis
- Interprocedural analysis
- Advanced Topics:
    - Garbage Collection
    - Program Synthesis
    - Program Testing and Debugging
    - Types and Programming
    
******
    
###Evaluation Scheme <a id="eval"/>

__Credit__

----------------------       ----------
Assignments                    5% - 10%      

Quizzes                              5% 

Mid semester exam             10% - 20%

End semester exam             25% - 35%

Course Project                30% - 40% 

(Approx Breakup: 
 Proposal: 5%
 Report: 15% 
 Implementation: 10%
 Presentation: 5%
)
----------------------       ----------

******

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

* Uday P. Khedker, Amitabha Sanyal, and Bageshri Karkare, __Data Flow Analysis: Theory and Practice__,  CRC Press, USA (2009).
     * [Indian Edition is available][dfabook],  CRC Press, 2013.
* Appel, A., __Modern Compiler Implementation in Java__ (or ML, or C), Cambridge University Press, 2002.
* Cooper, K., Torczon, L., __Engineering a Compiler__, Morgan Kaufmann, 2004
* Muchnick, S., __Advanced Compiler Design and Implementation__, Morgan Kaufmann, 1997.
* Aho, A., Lam, M., Sethi, R., Ullman, J., __Compilers: Principles, Techniques, & Tools__, Addison Wesley, 2007.
* Y. N. Srikant, Priti Shankar, __The Compiler Design Handbook: Optimizations and Machine Code Generation__, CRC Press, 2008
* Randy Allen, Ken Kennedy,__Optimizing Compilers for Modern Architectures: A Dependence-based Approach__, Morgan Kaufmann, 2001 



[karkare]:	http://www.cse.iitk.ac.in/users/karkare

[templates]:	http://www.sigplan.org/authorInformation.htm
[bitbucket]:	http://bitbucket.org
[latexdocs]:	SupportMaterial/latexdocs.tar

[uday]:         http://www.cse.iitb.ac.in/~uday
[dfabook]:      https://www.cse.iitb.ac.in/~uday/dfaBook-web
[gform]:        http://goo.gl/forms/FSDWm4Wt8500AJFA2


