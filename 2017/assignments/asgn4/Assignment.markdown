<a id="top"/>

#Assignment 4

<font color="red">Discussion is encouraged, but Plagiarism is NOT.</font> Write your own solutions, without copying from other's (friends, books, webpages etc.).

  1. This is a __group__ assignment - to be done in teams of 2.
Form you team at the earliest and inform the instructor via Moodle.
  2. The assignment has 2 parts: [Analysis](#analysis) and [Implementation](#impl). The deadline for Analysis part is earlier than the Implementation part. This is to give a group having incorrect analysis, a chance to fix it for implementation.
  3. All the submissions for part A will be made available on Moodle after "deadline + 5 days" for discussions.
  

#Strong Liveness <a id="#str-live"/>

Given a  program, a  variable is __strongly__  live at  a program
point *p* if it is used to compute some value that is directly or
indirectly __useful__  in the  rest of the  program (from  *p* to
*exit*). For example, consider the following program:

  1. x = 1
  2. y = 2
  3. z = 3
  4. t = x
  5. x = y
  6. y = t
  7. print z

Here,  at OUT  of  statement  3, only  z  is  strongly live.   In
contrast,  x, y  and z  are all  live at  OUT of  statement 3  by
traditional liveness analysis.

Assume that a value is considered directly useful only when it is
printed using __print__, or is used to decide a path in a branch.
We can define strong liveness analysis informally as:


A variable *v* is strongly live at *p* if it is

1. Printed between *p* and *exit* without being re-defined, OR

2. Used inside a conditional goto between *p* and *exit*
without being re-defined, OR

3. Used to compute a strongly live variable *w* at a point
  *p'*  between *p* and *exit* without being re-defined.

(Note the difference with simple  liveness in point #3: for simple
liveness, *w* need not be strongly live)


##Part A: Analysis  <a id="analysis"/>


* __Q-A1:__ Describe the data  flow framework for strong liveness
analysis.   Assume   the   language  contains   only   a   single
representative binary operator (+)

* __Q-A2:__ Do you think the result of __strong liveness analysis__ will always be same as the following
<pre>
while (program changes) {
   do simple liveness analysis
   remove any assignments to dead variables
}
</pre>
    Prove the equivalence OR give a counter example where the above
    equivalence does not hold.

Submit a single pdf file for the above questions.

##Part B: Implementation <a id="impl"/>

__Q-B1:__ Implement "intraprocedural" strong liveness analysis in
the compiler framework of your choice.

__Q-B2:__  Submit 10  test-cases (small  programs) that  show the
effectiveness  of  your  analysis.   Your  test-cases  should  be
__different__ from others.

Submit a single compressed folder containing the implementation. The folder must have:

  1. A "README" file with instructions to build and run the implementation.

  2. A folder named "test-10" containing the 10 tests you want us to evaluate (Q-B2).

  3. A script, run-it, that I can run as:
  <pre>
     $ ./run-it &lt;test-path&gt; &lt;options&gt;
  </pre>
  Though I do not force it, it will be nice to have some useful options (-help, -verbose, -simple-live etc.) to make your implementation useful for others. Describe the options in README and in "-help" itself.


[cs618]:	http://www.cse.iitb.ac.in/~karkare/cs618
