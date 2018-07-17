#CS 738: Advanced Compiler Optimizations (2017-18 Ist Semester)<a id="top"/>

******


# __Course Project__: 

The course project gives you a chance to explore a specific area
of compiler implementation in more depth. You will be required to
__re-implement__ some tool from recent paper, and perform an
__experimental evaluation__ of your implementation.

You will report on your project in a paper in the style of a
research paper (approx. 5 pages), and give a presentation/demo of
your project to the class. [LaTeX and MS Word templates for the
paper format are available from SIGPLAN.][templates]

* Project will be done in a group of two.

* <font color="red">Important</font>: Use of git version control
   system on __[bitbucket][bitbucket]__ is __required__ for
   programming assignments and project.

* For this offering, you have to reproduce the implementation of
  the following tool using [Flix][flix]:<br/>
  <p><font
  color="red" size="+1">[P/Taint: Unified Points-to and Taint
  Analysis][ptaint]</font> by Neville Grech and Yannis Smaragdakis </p>

* Supplementry reading material:

    ** Edward J. Schwartz, Thanassis Avgerinos, and David Brumley,
   [All You Ever Wanted to Know About Dynamic Taint Analysis and
   Forward Symbolic Execution (but might have been afraid to
   ask), S&P'10][oakland].

    ** Arzt, S., Rasthofer, S., Fritz, C., Bodden, E., Bartel, A.,
  Klein, J., Traon, Y., Octeau, D., and McDaniel, P., FlowDroid:
  [Precise context, flow, field, objectsensitive and
  lifecycleaware taint analysis for android apps,
  PLDI’14][flowdroid].

    ** Smaragdakis, Y., Kastrinis, G., and Balatsouras, G.,
  [Introspective analysis: Context-sensitivity, across the board,
  PLDI’14][introspective].


#__Deadlines__: 

* Presentations due: During the last week of classes (10th -- 15th Nov 2017)

* Report due: 17th Nov 2017

* Implementation Due: 17th Nov 2017


[karkare]:	http://www.cse.iitk.ac.in/users/karkare

[templates]:	http://www.sigplan.org/authorInformation.htm
[bitbucket]:	http://bitbucket.org



[introspective]:  https://yanniss.github.io/introspective-pldi14.pdf
[flowdroid]:      http://www.bodden.de/pubs/far+14flowdroid.pdf       
[oakland]:        https://users.ece.cmu.edu/~aavgerin/papers/Oakland10.pdf
[flix]:           http://flix.github.io/
[ptaint]:         https://yanniss.github.io/ptaint-oopsla17-prelim.pdf