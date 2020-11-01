#[CS618 Program Analysis (2016-17 Ist Semester, IIT Bombay)][cs618] <a id="top"/>
#Assignment 2

This assignment has 3 questions.

  1. [Available Expression Analysis](#avexpr)
  2. [Live Variables Analysis](#livevars)
  3. [Design a Data Flow Analysis](#dfa)

## Q1: Available Expression Analysis <a id="#avexpr"/>

Perform available expressions analysis, i.e. compute __gen, kill, in__
and __out__ for each block for the given flow graph. Show __in__ and
__out__ for each block __for each iteration till a fix-point is
reached__.

Entry and Exit blocks are not shown in the graph. The first block of
the program is (1) and the last block is (9)

<img src="available_expr.png">

## Q2: Live Variables Analysis <a id="#livevars" />

Perform live variables  analysis, i.e. compute __gen, kill, in__
and __out__ for each block for the given flow graph. Show __in__ and
__out__ for each block __for each iteration till a fix-point is
reached__.

Entry and Exit blocks are not shown in the graph. The first block of
the program is (1) and the last block is (9)

<img src="live_vars.png">

## Q3: Design a Data Flow Analysis <a id="#dfa" />

Consider a simple language that has only __two__ arithmetic
operations: __addition (+)__, and __multiplication__ (*). Further, the
language has only integer variables.  Otherwise it is similar to the
3-address language discussed in class.

For any given program in this language, we would like to divide
program variables into the following four categories at each program
point:

  1. Positive Even 
  2. Positive Odd
  3. Negative Even
  4. Negative Odd
  
Here, if a variable __X__ is marked <i>"Positive Even"</i> at a
program point <i>p</i>, it means that __X__ has a value at <i>p</i>
that is definitely a positive even number. The other categories are
defined analogously. Assume __0 is positive__ for the analysis
purpose.

   (a) Design a data flow analysis for 3-address programs in this
       language. In particular, describe the direction of the
       analysis, the lattice (or the component lattices), the transfer
       functions for the different types of the statements, and the
       meet operation.
   
   (b) Are your flow functions monotonic? Give proof. If you can not
       give proof, give intuition.






[cs618]:	http://www.cse.iitb.ac.in/~karkare/cs618