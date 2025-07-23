function calculateSize() {
    const gender = document.getElementById("gender").value;
    const height = parseInt(document.getElementById("height").value);
    const chest = parseInt(document.getElementById("chest").value);
    const waist = parseInt(document.getElementById("waist").value);
    const hips = parseInt(document.getElementById("hips").value);

    if (!gender || !height || !chest || !waist || !hips) {
        document.getElementById("result").textContent = "Please fill in all fields.";
        return;
    }

    const maleSizes = [
        { size: "XS", chest: [76, 84], waist: [66, 74], hips: [80, 87] },
        { size: "S", chest: [85, 92], waist: [75, 82], hips: [88, 95] },
        { size: "M", chest: [93, 100], waist: [83, 90], hips: [96, 102] },
        { size: "L", chest: [101, 108], waist: [91, 98], hips: [103, 109] },
        { size: "XL", chest: [109, 116], waist: [99, 106], hips: [110, 117] },
        { size: "XXL", chest: [117, 124], waist: [107, 114], hips: [118, 125] }
    ];

    const femaleSizes = [
        { size: "XS", chest: [75, 82], waist: [60, 66], hips: [82, 88] },
        { size: "S", chest: [83, 89], waist: [67, 73], hips: [89, 95] },
        { size: "M", chest: [90, 96], waist: [74, 80], hips: [96, 102] },
        { size: "L", chest: [97, 103], waist: [81, 87], hips: [103, 109] },
        { size: "XL", chest: [104, 110], waist: [88, 94], hips: [110, 116] },
        { size: "XXL", chest: [111, 117], waist: [95, 101], hips: [117, 123] }
    ];

    const sizes = gender === "male" ? maleSizes : femaleSizes;

    // Check for exact match first
    for (let i = 0; i < sizes.length; i++) {
        const s = sizes[i];
        if (
            chest >= s.chest[0] && chest <= s.chest[1] &&
            waist >= s.waist[0] && waist <= s.waist[1] &&
            hips >= s.hips[0] && hips <= s.hips[1]
        ) {
            document.getElementById("result").textContent = `Recommended Size: ${s.size}`;
            return;
        }
    }

    // No exact match, find closest size by least average distance
    let closest = null;
    let minDiff = Infinity;

    for (let i = 0; i < sizes.length; i++) {
        const s = sizes[i];
        const chestMid = (s.chest[0] + s.chest[1]) / 2;
        const waistMid = (s.waist[0] + s.waist[1]) / 2;
        const hipsMid = (s.hips[0] + s.hips[1]) / 2;

        const diff = Math.abs(chest - chestMid) + Math.abs(waist - waistMid) + Math.abs(hips - hipsMid);

        if (diff < minDiff) {
            minDiff = diff;
            closest = s.size;
        }
    }

    document.getElementById("result").textContent = `Closest Size Match: ${closest}`;

    
}
