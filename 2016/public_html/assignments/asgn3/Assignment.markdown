#[CS618 Program Analysis (2016-17 Ist Semester, IIT Bombay)][cs618] <a id="top"/>
#Assignment 3

<font color="red">Discussion is encouraged, but Plagiarism is NOT.</font> Write your own solutions, without copying from other's (friends, books, webpages etc.).

This assignment has 4 questions.

  1. [Monotonic Functions](#monotone)
  2. [Knaster-Tarski Fixed Point Theorem](#tarski)
  3. [Back Edges in a Flow Graph](#back)
  4. [Natural Loops in a Flow Graph](#loop)

## Q1: Monotonic Functions <a id="#monotone"/>

Consider a semi-lattice $(S, \wedge)$, and a partial order $\leq$:
$\forall x, y \in S, x \leq y$ iff $x \wedge y = x$

Prove that the following two definitions of monotonicity are
equivalent for any function $f:S \rightarrow S$.

 1. $\forall x, y \in S, x \leq y \Rightarrow f(x) \leq f(y)$
 2. $\forall x, y \in S, f(x \wedge y) \leq f(x) \wedge f(y)$

## Q2: Knaster‐Tarski Fixed Point Theorem <a id="#tarski"/>

Let $f:S \rightarrow S$ be a monotonic function on a complete lattice
$(S, \vee,\wedge)$. Using the concepts covered in class, prove that
fix-points of $f$ (i.e. members of $fix(f)$) form a complete lattice.

## Q3: Back Edges in a Flow Graph <a id="#back"/>

An edge in a flow graph is a __back edge__ if its head dominates its tail.

Prove that every back edge is a retreating edge in every DFST of every
flow graph.

## Q4: Natural Loops in a Flow Graph <a id="#loop"/>

 In a flow graph, the __natural loop__ of a back edge $a\rightarrow b$ is $\{b\}$ plus
 the set of nodes that can reach $a$ without going through $b$.

 Prove that two natural loops are either disjoint, identical, or nested.

[cs618]:	http://www.cse.iitb.ac.in/~karkare/cs618