<?hh

// Test that FrozenSet is put in the HH namespace.

namespace HH;

function main() {
  $s = FrozenSet {1, 2, 3}; // Should work.
  var_dump($s->count());
}

main();
