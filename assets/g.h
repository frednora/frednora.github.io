
// EAD
struct ead_d {
    int x;  // E
    int p;  // A
    int c;  // D
};

// M.M.
struct mm_d {
    struct ead_d ead;
};

// Gl.:
struct g_d {
    struct mm_d mm;
};

