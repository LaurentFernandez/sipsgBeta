import React from "react";

function Inventory() {
  return (
    <div className="min-h-screen flex items-center justify-center bg-gray-100">
      <div className="bg-white p-6 rounded-lg shadow-lg w-full max-w-4xl">
        <h2 className="text-2xl font-bold mb-6 text-gray-900">Inventario</h2>
        <div className="overflow-x-auto">
          <table className="min-w-full bg-white">
            <thead>
              <tr>
                <th className="py-2 px-4 border-b-2 border-gray-300 bg-gray-200 text-left text-sm font-semibold text-gray-700">
                  Producto
                </th>
                <th className="py-2 px-4 border-b-2 border-gray-300 bg-gray-200 text-left text-sm font-semibold text-gray-700">
                  Stock
                </th>
                <th className="py-2 px-4 border-b-2 border-gray-300 bg-gray-200 text-left text-sm font-semibold text-gray-700">
                  Ubicación
                </th>
              </tr>
            </thead>
            <tbody>
              {/* Aquí irán los productos del inventario eventualmente */}
            </tbody>
          </table>
        </div>
      </div>
    </div>
  );
}

export default Inventory;
