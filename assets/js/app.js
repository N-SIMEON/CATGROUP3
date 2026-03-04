// NAYITURIKI SIMEON | REG NO :2530692| ROLE
// Role 5 — JavaScript Interaction Engineer

const qtyInput   = document.getElementById('quantity');
const priceInput = document.getElementById('unit_price');
const totalEl    = document.getElementById('live_total');

function calcTotal() {
  const qty   = parseFloat(qtyInput.value)   || 0;
  const price = parseFloat(priceInput.value) || 0;
  totalEl.textContent = 'Total ' + (qty * price).toLocaleString() + ' RWF';
}

qtyInput.addEventListener('input',  calcTotal);
priceInput.addEventListener('input', calcTotal);

// ── Save Record ──────────────────────────────────────────────
const form  = document.getElementById('service-form');
const btn   = document.getElementById('save-btn');
const msgEl = document.getElementById('msg');

form.addEventListener('submit', async function(e) {
  e.preventDefault();
  btn.disabled = true;
  btn.textContent = 'Saving...';
  msgEl.className = '';
  msgEl.style.display = 'none';

  const data = new FormData(form);
  data.append('action', 'save');

  try {
    const res  = await fetch('../app/create.php', { method: 'POST', body: data });
    const json = await res.json();

    if (json.success) {
      msgEl.className   = 'success';
      msgEl.textContent = '✓ ' + json.message;
      form.reset();
      totalEl.textContent = 'Total 0 RWF';
      loadRecords();
    } else {
      msgEl.className   = 'error';
      msgEl.textContent = '✗ ' + json.error;
    }
  } catch (err) {
    msgEl.className   = 'error';
    msgEl.textContent = '✗ Network error. Check connection.';
  }

  btn.disabled = false;
  btn.textContent = 'Save Record';
});

// ── Fetch & Display All Records ──────────────────────────────
async function loadRecords() {
  const tbody = document.getElementById('records-body');
  try {
    const res  = await fetch('../app/create.php?action=fetch');
    const json = await res.json();

    if (!json.success || json.records.length === 0) {
      tbody.innerHTML = '<tr><td colspan="4" class="no-records">No records saved yet</td></tr>';
      return;
    }

    tbody.innerHTML = json.records.map(r => `
      <tr>
        <td>${esc(r.client)}</td>
        <td>${esc(r.service)}</td>
        <td>${Number(r.total).toLocaleString()}</td>
        <td>${fmtDate(r.created_at)}</td>
      </tr>
    `).join('');

  } catch (err) {
    tbody.innerHTML = '<tr><td colspan="4" class="no-records">Could not load records</td></tr>';
  }
}

function esc(s) {
  return String(s).replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;');
}

function fmtDate(s) {
  const d = new Date(s);
  return d.toLocaleDateString('en-RW', { year:'numeric', month:'short', day:'2-digit' })
       + ' ' + d.toLocaleTimeString('en-RW', { hour:'2-digit', minute:'2-digit' });
}

// Load records on page start
loadRecords();
