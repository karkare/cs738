#CS618 Program Analysis (2016-17 Ist Semester, IIT Bombay)<a id="top"/>

******

* __Instructor__: [Amey Karkare][karkare] (<karkare@cse.iitb.ac.in>, <karkare@gmail.com>)
* __TAs__: [Binapani Beria][binapani] (<binapani@cse.iitb.ac.in>), [Sushmita Nikose][sushmita] (<sushmita@cse.iitb.ac.in>)
* __Timings__: Tue,Fri: 2:00PM - 3:25PM

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

 <font color="red">Important</font>: All emails either to the
 instructor or the TAs should begin with subject line
 "__[CS618]__" -- without any spaces in the course code (and
 without quotes). Email not complying to this rule __will NOT be
 entertained__.

- Project Presentation Schedule<br>
![Project Presentation Schedule](ProjectPresentationSchedule.bmp "Project Presentation Schedule")
- Slides for lecture #20 uploaded [below](#handouts) (on 18th October 2016).
- Slides for lecture #19 uploaded [below](#handouts) (on 18th October 2016).
- Slides for lecture #18 uploaded [below](#handouts) (on 15th October 2016).
- Slides for lecture #17 uploaded [below](#handouts) (on 14th October 2016).
- Slides for lecture #15,16 uploaded [below](#handouts) (on 07th October 2016).
- Reading material for Call-strings approach for Interprocedural Analysis added [below](#handouts) (on 27th September 2016).
- Project Proposals are due soon. Submit via [Moodle][cs618moodle]. 
- Slides for lecture #13,14 uploaded [below](#handouts) (on 20th September 2016).
- Slides for lecture #12 uploaded [below](#handouts) (on 15th September 2016).
- [Assignment #4 (Part A and B) released](#assignments) on 30th August 2016. Submit via [Moodle][cs618moodle].
- Slides for lecture #11 uploaded [below](#handouts) (on 30th August 2016).
- __Evaluation Scheme Updated__ [below](#handouts) (on 26th August 2016).
- Slides for lecture #9,#10 uploaded [below](#handouts) (on 26th August 2016).
- [Assignment #3 released](#assignments) on 19th August 2016. Submit via [Moodle][cs618moodle].
- Slides for lecture #8 uploaded [below](#handouts) (on 19th August 2016).
- Slides for lecture #6, #7 uploaded [below](#handouts) (on 16th August 2016).
- Quiz #1 in class on 12th August 2016
- Slides for lecture #5 uploaded [below](#handouts) (on 08th August 2016).
- [Assignment #2 released](#assignments) on 05th August 2016. Submit via [Moodle][cs618moodle]. 
- Slides for lecture #4 uploaded [below](#handouts) (on 05th August 2016).
- Slides for lecture #3 uploaded [below](#handouts) (on 29th July 2016).
- Slides for lecture #2 uploaded [below](#handouts) (on 23rd July 2016).
- Slides for introductory lecture (#1) uploaded [below](#handouts) (on 20th July 2016).
- Fill this [google form][gform] if you plan to credit/audit this course.
- Make sure you are subscribed to [Moodle Page for CS618][cs618moodle] if you plan to credit/audit this course.

******

##Topics Covered and Slides <a id="handouts"/>
The slides are not suitable for taking prints as there is a lot of redundancy due to overlays. Use handouts if you really need a print.

\#  | Description                       | Handout   | Slides   | References
---:|:----------------------------------|:----------|:---------|:------------  
 1. | Introduction                      |[[handouts](lecturenotes/01IntroductionHandouts.pdf)]                |[[slides](lecturenotes/01IntroductionSlides.pdf)]
 2. | Overview of Optimizations         |[[handouts](lecturenotes/02OptimizationOverviewHandouts.pdf)]        |[[slides](lecturenotes/02OptimizationOverviewSlides.pdf)]
 3. | Data Flow Analysis                |[[handouts](lecturenotes/03DataFlowAnalysisHandouts.pdf)]            |[[slides](lecturenotes/03DataFlowAnalysisSlides.pdf)]
 4. | Data Flow Analysis (contd ...)    |[[handouts](lecturenotes/04DataFlowAnalysisHandouts.pdf)]            |[[slides](lecturenotes/04DataFlowAnalysisSlides.pdf)]
 5. | Data Flow Analysis Foundations    |[[handouts](lecturenotes/05DataFlowAnalysisFoundationsHandouts.pdf)] |[[slides](lecturenotes/05DataFlowAnalysisFoundationsSlides.pdf)]
 6. | DFA Foundations (contd ...)       |[[handouts](lecturenotes/06FoundationsDataFlowAnalysisHandouts.pdf)] |[[slides](lecturenotes/06FoundationsDataFlowAnalysisSlides.pdf)]
 7. | Flow Graph Theory                 |[[handouts](lecturenotes/07FlowGraphTheoryHandouts.pdf)]             |[[slides](lecturenotes/07FlowGraphTheorySlides.pdf)]
 8. | Constant Propagation              |[[handouts](lecturenotes/08ConstantPropagationHandouts.pdf)]         |[[slides](lecturenotes/08ConstantPropagationSlides.pdf)]
 9. | SSA                               |[[handouts](lecturenotes/09SSAHandouts.pdf)]                         |[[slides](lecturenotes/09SSASlides.pdf)]                         |[[paper](http://dl.acm.org/citation.cfm?id=115320)]
10. | SSA (contd ...)                   |[[handouts](lecturenotes/10SsaOptsHandouts.pdf)]                     |[[slides](lecturenotes/10SsaOptsSlides.pdf)]
11. | Conditional Constant Propagation  |[[handouts](lecturenotes/11CondConstPropHandout.pdf)]                |[[slides](lecturenotes/11CondConstPropSlides.pdf)]               |[[paper](http://dl.acm.org/citation.cfm?id=103136)]
12. | Interprocedural analysis          |[[handouts](lecturenotes/14InterProcHandout.pdf)]                    |[[slides](lecturenotes/14InterProcSlides.pdf)]
13. | ... (Functional Approach)         |[[handouts](lecturenotes/15InterProcHandout.pdf)]                    |[[slides](lecturenotes/15InterProcSlides.pdf)]
--. | ... (Call-strings Approach)       |[[handouts](lecturenotes/16InterProc_CallString_UK_Handout.pdf)]     |[[slides](lecturenotes/16InterProc_CallString_UK_Slides.pdf)]    |__By [Prof Uday][uday]__
14. | Liveness based Garbage Collection |[[handouts](lecturenotes/16LgcHandout.pdf)]                          |[[slides](lecturenotes/16LgcSlides.pdf)]                         |[[paper1](http://link.springer.com/chapter/10.1007%2F978-3-642-54807-9_5)][[paper2](http://dl.acm.org/citation.cfm?doid=2926697.2926698)]
--. | ... (continued)                   |                                                                     |                                                                 |[[Mohri-Nederhof Transformation](https://drona.csa.iisc.ernet.in/~deepakd/atc-common/RegApprox.pdf)]
15. | Pointer Analysis                  |[[handouts](lecturenotes/17PointerAnalysisHandout.pdf)]              |[[slides](lecturenotes/17PointerAnalysisSlides.pdf)]             |[[Anderson's](http://citeseer.ist.psu.edu/viewdoc/summary?doi=10.1.1.109.6502)][[Steensgaard's](http://dl.acm.org/citation.cfm?id=237727)]
16. | Types and Program Analysis        |[[handouts](lecturenotes/18TypesAndPLHandout.pdf)]                   |[[slides](lecturenotes/18TypesAndPLSlides.pdf)]
17. | Untyped Lambda Calculus           |[[handouts](lecturenotes/19UTLambdaCalculusHandout.pdf)]             |[[slides](lecturenotes/19UTLambdaCalculusSlides.pdf)]
18. | Typed Arithmetic Expressions      |[[handouts](lecturenotes/20TypedArithExprHandout.pdf)]               |[[slides](lecturenotes/20TypedArithExprSlides.pdf)]
19. | Simply Typed Lambda Calculus      |[[handouts](lecturenotes/21STLambdaCalculusHandout.pdf)]             |[[slides](lecturenotes/21STLambdaCalculusSlides.pdf)]
20. | Type-based Points-to Analysis     |[[handouts](lecturenotes/22TypeBasedPointsToHandout.pdf)]            |[[slides](lecturenotes/22TypeBasedPointsToSlides.pdf)]           | [[Steensgaard's](http://dl.acm.org/citation.cfm?id=237727)] [[Manuvir's](http://dl.acm.org/citation.cfm?doid=349299.349309)]

--: __Reading Assignment__

##Assignments <a id="assignments"/>

There will be short assignments to give you a chance to apply the lecture material. Assignments will have some written and some programming tasks. 

* [Assignment 4B](assignments/asgn4/Assignment.html) : Deadline 01st October 2016
* [Assignment 4A](assignments/asgn4/Assignment.html) : Deadline 20th September 2016 [Solutions](assignments/asgn4/solution_A4_A.pdf)
* [Assignment 3](assignments/asgn3/Assignment.html) : Deadline 30th August 2016 [Solutions](assignments/asgn3/a3solns.pdf)
* [Assignment 2](assignments/asgn2/Assignment.html) : Deadline 19th August 2016 [Solutions](assignments/asgn2/solution_A2.pdf)
* [Assignment 1](assignments/asgn1/Assignment.html) : Deadline 30th July 2016

Thanks to TAs([Binapani Beria][binapani], [Sushmita Nikose][sushmita] ) for the solutions to the assignments.
******

##Course Project<a id="project"/>

* __Project Proposal__: Deadline 06th October 2016

The course project gives you a chance to explore a specific area of compiler implementation in more depth. You will be required to __implement__ some compiler feature, and perform an __experimental evaluation__ of your implementation. You may do your implementation within any freely-available compiler infrastructure (e.g. [LLVM][llvm], [gcc][gcc], [Soot][soot],  etc.)

You will report on your project in a paper in the style of a research paper (approx. 10 pages), and give a presentation/demo of your project to the class. [LaTeX and MS Word templates for the paper format are available from SIGPLAN.][templates] 

* Project can be done individually or in a group of two.

 <font color="red">Important</font>: Use of git version control system on __[bitbucket][bitbucket]__ is __required__ for programming assignments and project.

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
Assignments                  15%

Quizzes                      10%

Mid semester exam            15%

End semester exam            25%

Course Project               35%   

(Proposal: 5%,
 Report: 10%,
 Implementation: 15%,
 Presentation: 5%)
----------------------       ----------

__Audit__

---------------------------------  
- Assignments                      
- Mid semester exam                
- Quizzes 
- Paper Critique and Presentation
-------------------------------    

Must get __satisfactory  marks__ in midsem/quizzes. Must be present for at least __half__ of the total number of quizzes.

******

##Supporting Material <a id="support"/>
##### Most of the following softwares are available from package repositories of linux distributions. It is recommended to use these repositories and install instead of building them from source.

* [cscope][cscope] and [ctags][ctags]: Code browing utilities
* [Eclipse][eclipse]: A Java based Integrated Development Environment
* [LaTeX][latex]: A document preparation system


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
[binapani]:	http://www.cse.iitb.ac.in/~binapani
[sushmita]:	http://www.cse.iitb.ac.in/~sushmita

[soot]:		http://www.sable.mcgill.ca/soot
[jikesrvm]:	http://jikesrvm.sourceforge.net/
[llvm]:		http://llvm.org/
[gcc]:		http://gcc.gnu.org/
[framac]:	http://frama-c.com/
[templates]:	http://www.sigplan.org/authorInformation.htm
[infra]:	InfraDetails.html
[bitbucket]:	http://bitbucket.org
[cscope]:	http://cscope.sourceforge.net
[ctags]:	http://ctags.sourceforge.net
[latex]:	http://www.latex-project.org
[eclipse]:	http://www.eclipse.org
[latexdocs]:	SupportMaterial/latexdocs.tar

[uday]:         http://www.cse.iitb.ac.in/~uday
[dfabook]:      https://www.cse.iitb.ac.in/~uday/dfaBook-web
[gform]:        http://goo.gl/forms/FSDWm4Wt8500AJFA2


[cs618moodle]:  http://moodle.iitb.ac.in/course/view.php?id=3275
